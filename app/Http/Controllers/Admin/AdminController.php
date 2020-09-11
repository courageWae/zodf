<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Project;
use Image;
use App\Model\Admin\Material;
use App\Model\User\Contact;
use App\Model\Admin\Steering;
use App\Model\User\Student;
use App\Model\User\Subscription;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Redirect,Response,File;
use Illuminate\Support\Facades\Session;
use App\Model\Admin\Post;
use App\Model\Admin\Tag;
use App\Model\Admin\Category;
use Illuminate\Support\Str;
use Storage;
use App\Model\Admin\Gallery;
use Excel;
use DB;
use App\Exports\StudentsExport;
use App\Exports\StudentExport;
use App\Imports\StudentsImport;
use App\Model\Admin\Number;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indextag()
    {
        $tags = tag::all();
        return view('admin/tag/show', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtag()
    {
        return view('admin/tag/tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetag(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

        $tag= new tag;
        $tag -> name = $request->name;

        $tag -> slug = Str::slug($request->name,'-');

        $tag->save();

        return redirect(route('indextag'));
    }

    public function updatenumber(Request $request, $id)
    {
        $this->validate($request,[
            'youth'=>'required',
            'zongos'=>'required',
            'projects'=>'required',
            'success'=>'required',
        ]);

        $numbers = Number::find($id);

        $numbers->youth = $request->youth;
        $numbers->zongos = $request->zongos;
        $numbers->projects = $request->projects;
        $numbers->success = $request->success;

        $numbers->save();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edittag($id)
    {
        $tag = tag::where('id',$id)->first();
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatetag(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

        $tag= tag::find($id);
        $tag -> name = $request->name;

        $tag->slug = Str::slug($request->name,'-');

        $tag->save();

        return redirect(route('indextag'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroytag($id)
    {
        tag::where('id',$id)->delete();
        return redirect()->back();
    }



    public function indexcategory()
    {
        $categories = category::all();
        return view('admin/category/show', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcategory()
    {
        return view('admin/category/category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecategory(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

        $category= new category;
        $category->name=$request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();

        return redirect(route('indexcategory'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editcategory($id)
    {
        $category = category::where('id',$id)->first();
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecategory(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

        $category= category::find($id);
        $category->name=$request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();

        return redirect(route('indexcategory'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycategory($id)
    {
        category::where('id',$id)->delete();
        return redirect()->back();
    }





    public function adminlogin()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
            // return view('admin.admin-login');
            return redirect()->route('admin.dashboard');
        }
        elseif (Auth::guest()) {
            # code...
            return view('admin.admin-login');
        }
    }

    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)&&Auth::user()->role_id==2) {
            // Authentication passed...
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route("adminlogin")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function adminlogout() {
        Session::flush();
        Auth::logout();
        // return Redirect('adminlogin');

        return redirect()->route('adminlogin');
    }

    public function showgallery()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $gallery = Gallery::orderBy('created_at','DESC')->get();
        return view('admin.gallery.show',compact('gallery'));
        }elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function savegallery(Request $request)
    {
        request()->validate([

            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if ($image = $request->file('image')) {
            foreach ($image as $files) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalName();
            $files->move($destinationPath, $profileImage);
            $insert[]['image'] = "$profileImage";
            }
        }

        $check = Gallery::insert($insert);

        return redirect()->back()->with('status', "Image uploaded successfully.");
    }

    public function destroygallery($id)
    {
        Gallery::where('id',$id)->delete();
        return redirect()->back();
    }

    public function index()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $students=Student::all();
        $countstudents = count($students);
        $projects = Project::all();
        $countprojects = count($projects);
        $subscription = Subscription::all();
        $countsubscriber = count($subscription);
        $news = Post::all();
        $countnews = count($news);
        $numbers = Number::all();
        return view('admin.dashboard', compact('countstudents','countprojects','countsubscriber','countnews','numbers'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function showquestions()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $questions = Faq::all();
        return view('admin.faq.show', compact('questions'));
    }
    elseif (Auth::guest()) {
        # code...
        return redirect()->route('adminlogin');
    }
    }

    public function showreply($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $q = Faq::where('id',$id)->first();
        // dd($q);
        return view('admin.faq.edit', compact('q'));
    }
    elseif (Auth::guest()) {
        # code...
        return redirect()->route('adminlogin');
    }
    }

    public function postreply(Request $request, $id)
    {
        $this->validate($request,[
            'question'=>'required',
            'answer'=>'required'
        ]);

        $reply = Faq::find($id);

        $reply->question = $request->question;
        $reply->answer=$request->answer;

        $reply->save();

        return redirect()->route('showquestions');
    }

    public function deletequestions($id)
    {
        Faq::where('id',$id)->delete();
        return redirect()->back();
    }

    public function addproject()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        return view('admin.project.add');
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function saveproject(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $project = new Project;

        $project->name=$request->name;
        $project->category=$request->category;
        $project->description=$request->description;

        $image = $request->file('image');

        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('/thumbnail');

        $resize_image = Image::make($image->getRealPath());

        $resize_image->resize(500, 300, function($constraint)
        {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $image_name);

        $destinationPath = public_path('/images');

        $image->move($destinationPath, $image_name);

        $project->image = $image_name;

        $project->save();

        return redirect()->route('allprojects');
    }

    public function showproject($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $project = Project::find($id);
        return view('admin.project.edit',compact('project'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function editproject(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'certificate'=>'required',
            'duration'=>'required',
            'materials'=>'required',
            'lesson'=>'required',
            'days'=>'required',
            'prequisite'=>'required',
            'language'=>'required',
            'skill'=>'required',
            'assessment'=>'required',
            'description'=>'required',
            'location'=>'required',
            'startdate'=>'required',
            'closingdate'=>'required',
        ]);

        $project = Project::find($id);

        $project->name=$request->name;
        $project->price=$request->price;
        $project->certificate=$request->certificate;
        $project->duration=$request->duration;
        $project->materials=$request->materials;
        $project->lesson=$request->lesson;
        $project->days=$request->days;
        $project->prequisite=$request->prequisite;
        $project->language=$request->language;
        $project->skill=$request->skill;
        $project->assessment=$request->assessment;
        $project->description=$request->description;
        $project->location=$request->location;
        $project->startdate=$request->startdate;
        $project->closingdate=$request->closingdate;

        // $image = $request->file('image');

        // $image_name = time() . '.' . $image->getClientOriginalExtension();

        // $destinationPath = public_path('/thumbnail');

        // $resize_image = Image::make($image->getRealPath());

        // $resize_image->resize(500, 300, function($constraint)
        // {
        //     $constraint->aspectRatio();
        // })->save($destinationPath . '/' . $image_name);

        // $destinationPath = public_path('/images');

        // $image->move($destinationPath, $image_name);

        // $project->image = $image_name;

        $project->save();

        return redirect()->route('allprojects');
    }

    public function destroyproject($id)
    {
        Project::where('id',$id)->delete();
        return redirect()->back();
    }

    public function allprojects()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $projects = Project::all();
        return view('admin.project.show', compact('projects'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function addmaterial()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $materials = Material::all();
        $projects = Project::all();
        return view('admin.material.show',compact('materials','projects'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function destroymaterial($id)
    {
        Material::where('id',$id)->delete();
        return redirect()->back();
    }

    public function savematerial(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'duration'=>'required',
            'project_id'=>'required',
            'file' => 'required|mimes:pdf,xlx,csv,doc,docx|max:2048',
        ]);

        $material = new Material;

        $material->name = $request->name;
        $material->duration=$request->duration;
        $material->project_id=$request->project_id;
        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('documents'), $fileName);

        $material->file = $fileName;

        $material->save();

        return redirect()->back();
    }

    public function showmaterial($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $material = Material::find($id);
        $projects = Project::all();
        return view('admin.material.edit',compact('material','projects'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function editmaterial(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required',
            'duration'=>'required',
            'project_id'=>'required',
        ]);

        $material = Material::find($id);

        $material->name = $request->name;
        $material->duration=$request->duration;
        $material->project_id=$request->project_id;

        // $fileName = time().'.'.$request->file->extension();

        // $request->file->move(public_path('documents'), $fileName);

        // $material->file = $fileName;

        $material->save();

        // return redirect()->back();
        return redirect()->route('addmaterial');
    }

    public function viewcontact()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $messages=Contact::all();
        return view('admin.message.show',compact('messages'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function contactdetail($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $message=Contact::find($id);
        $message->read="old";
        $message->save();
        return view('admin.message.singlemessage',compact('message'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function viewstaff()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $board = Steering::where('team','The Board')->orderBy('arrangement','ASC')->get();
        $management = Steering::where('team','The Executive Management')->orderBy('arrangement','ASC')->get();
        $staff = Steering::where('team','Staff')->orderBy('arrangement','ASC')->get();
        return view('admin.staff.show',compact('board','management','staff'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function savestaff(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'position'=>'required',
            'organization'=>'sometimes',
            'team'=>'required',
            'department'=>'sometimes',
            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required',
            'arrangement'=>'required',

        ]);

        $steering = new Steering;
        $steering->name=$request->name;
        $steering->position=$request->position;
        $steering->team=$request->team;
        $steering->department=$request->department;
        $steering->organization=$request->organization;
        $steering->description=$request->description;
        $steering->arrangement=$request->arrangement;

        $image = $request->file('image');

        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('/steering/thumbnail');

        $resize_image = Image::make($image->getRealPath());

        $resize_image->resize(500, 300, function($constraint)
        {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $image_name);

        $destinationPath = public_path('/steering');

        $image->move($destinationPath, $image_name);

        $steering->image = $image_name;

        $steering->save();

        return redirect()->back();
    }

    public function showstaff($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $steering = Steering::find($id);
        return view('admin.staff.edit',compact('steering'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function editstaff(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required',
            'position'=>'required',
            'organization'=>'sometimes',
            'team'=>'required',
            'department'=>'sometimes',
            'image'  => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required',
            'arrangement'=>'required',

        ]);

        $steering = Steering::find($id);

        $steering->name=$request->name;
        $steering->position=$request->position;
        $steering->team=$request->team;
        $steering->department=$request->department;
        $steering->organization=$request->organization;
        $steering->description=$request->description;
        $steering->arrangement=$request->arrangement;

        if ($request->file('image')) {
            # code...
            $image = $request->file('image');

            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/steering/thumbnail');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(500, 300, function($constraint)
            {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $image_name);

            $destinationPath = public_path('/steering');

            $image->move($destinationPath, $image_name);

            $steering->image = $image_name;
        }

        $steering->save();

        return redirect()->route('viewstaff');

        // return redirect()->back();
    }

    public function destroystaff($id)
    {
        Steering::where('id',$id)->delete();
        return redirect()->back();
    }

    public function registered()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $students = Student::orderBy('id','DESC')->get();
        $projects = Project::orderBy('created_at','DESC')->get();
        return view('admin.student.show',compact('students','projects'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function single($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        // $students = Student::orderBy('id','DESC')->get();
        $project_id = $id;
        $students = Student::where('project_id',$id)->orderBy('created_at','DESC')->get();
        return view('admin.student.single',compact('students','project_id'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function exportdata()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
            return Excel::download(new StudentsExport, 'student.xlsx');
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function exportsdata($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {

            return Excel::download(new StudentExport($id), 'student.xlsx');
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function importdata()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
            Excel::import(new StudentsImport,request()->file('file'));
            return back();
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function viewregistered($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $student = Student::find($id);
        $project_id = $student->project_id;
        $projectdetails = Project::find($project_id);

        return view('admin.student.view',compact('student','projectdetails'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function postRegistration(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'phone' => 'required|numeric',
        'password' => 'required|min:6',
        'role_id'=> 'required',
        ]);

        $data = $request->all();

        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'phone' => $data['phone'],
        ]);

        // $check = $this->create($data);
       if ($check) {
               return redirect()->route('viewadmin');
       } else {
           # code...
           return Redirect::to("registration")->withSuccess('Sorry Something went wrong');
       }
    }

    public function viewadmin()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $admins = User::where('role_id',1)->get();
        return view('admin.admin.showadmin', compact('admins'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function registration()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        return view('admin.admin.addadmin');
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function destroyadmin($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back();
    }

    public function showadmin($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
            $admin = User::find($id);
            return view('admin.admin.singleadmin', compact('admin'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    public function showsubscribe()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $subscribes = Subscription::all();
        $count = count($subscribes);
        return view('admin.subscribe.show', compact('subscribes','count'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }

    /////////news//////////////////

    public function showallnews()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        $posts = Post::all();
        return view('admin.post.show',compact('posts'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showcreatenews()
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
        // if (Auth::user()->can('posts.create')) {
            $tags =Tag::all();
            $categories =Category::all();
            return view('admin.post.post',compact('tags','categories'));
        // }
        // return redirect(route('admin.home'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storenews(Request $request)
    {
        $this->validate($request,[
            'title'     =>  'required|unique:posts,title',
            'subtitle'  =>  'required',
            'body'      =>  'required',
            'image'     =>  'sometimes|file|image|mimes:jpeg,png,jpg,gif,svg,gif|max:5000'
            ]);


        $post = new Post;

        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = Str::slug($request->title,'-');
        $post->body = $request->body;
        $post->status = $request->status;
        $post->admin_id = $request->admin_id;

        // dd($post);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1024, 600)->save($location);
            $post->image = $filename;
        }else{
            return 'No';
        }

        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('showallnews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editnews($id)
    {
        if (Auth::check()&&Auth::user()->role_id=='1')
        {
            $post = Post::with('tags','categories')->where('id',$id)->first();
            $tags =Tag::all();
            $categories =Category::all();
            return view('admin.post.edit',compact('tags','categories','post'));
        }
        elseif (Auth::guest()) {
            # code...
            return redirect()->route('adminlogin');
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatenews(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image'=>'sometimes|file|image|mimes:jpeg,png,jpg,gif,svg|max:5000'
            ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = Str::slug($request->title,'-');
        $post->body = $request->body;
        $post->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);

            Image::make($image)->resize(1024, 600)->save($location);

            $post->image = $filename;
        }

        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();
        return redirect(route('post.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroynews($id)
    {
        Post::where('id',$id)->delete();
        return redirect()->back();
    }
}

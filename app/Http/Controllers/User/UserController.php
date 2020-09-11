<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Project;
use App\Model\User\Student;
use App\Model\User\Contact;
use App\Model\User\Subscription;
use App\Model\Admin\Steering;
use App\Model\Admin\Post;
use App\Model\Admin\Category;
use App\Model\Admin\Tag;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Model\Admin\Gallery;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        if (Auth::check()&&Auth::user()->role_id=='2') 
        {
            
            // dd($student->firstname);

            $studentsection = $request->session()->get('student');
            if ($studentsection) {
                $student = $request->session()->get('student');
                // dd($student);
                // $student->save();
                // if ($student) {
                    # code...
                    // $student_id = $student->id;
                    $id = Auth::user()->id;
                    // $savestudent = Student::find($student_id);
                    $student->user_id = $id;
                    $student->save();
                    
                    if ($student) {
                        $request->session()->forget('student');
                        $user = User::where('id',$id)->get();
                        $students = Student::where('user_id',$id)->get();
                        return view('home', compact('students','user'))->with('success', 'Thank you for your time, Please note that shortlisted applicants will be notified.');
                    }else{
                        return redirect()->route('home')->with('fail', 'Sorry, something went wrong, please try again later. Thank you.');
                    }
                // }elseif (!$student) {
                    # code...
                    // $user = User::where('id',$id)->get();
                    // $students = Student::where('user_id',$id)->get();
                    // return view('home', compact('students','user'));
                // }
                
                
            }else {
                $id = Auth::user()->id;
                $user = User::where('id',$id)->get();
                $students = Student::where('user_id',$id)->get();
                
                // $projects = Project::where('id','pro_id')->get();
                
                return view('home', compact('students','user'));
            }
            
        }
            elseif (Auth::guest()) 
        {
            return redirect()->route('login');
        }
    }

    public function index()
    {
        $news = Post::where('status','1')->orderBy('id','DESC')->limit(3)->get();
        // dd($news);
        $steerings = Steering::orderBy('id', 'DESC')->limit(4)->get();
        $projects = Project::orderBy('id', 'DESC')->limit('5')->get();
        return view('user.home', compact('projects','steerings','news'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function aboutproject()
    {
        return view('user.aboutproject');
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->paginate(9);
        $count = count($galleries);
        return view('user.gallery',compact('galleries','count'));
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function sendcontact(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
            'read'=>'required',
        ]);

        $contact= new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->read=$request->read;

        $contact->save();

        return redirect()->back();
    }

    public function projects()
    {
        
        $projects = Project::orderBy('id', 'DESC')->paginate(10);
        return view('user.projects', compact('projects'));
    }

    public function projectdetail($id)
    {
        $update = Project::find($id);
        $value = $update->viewers+1;
        // dd($value);
        $update->viewers = $value;
        $update->save();

        $project = Project::find($id);
        $materials = Project::find($id)->materials()->where('project_id', $id)->get();
        $count = count($materials);

        $student = Student::where('project_id',$id)->get();
        $countstudents = count($student);
        // dd($materials);
        $latestcourses = Project::where('id','!=',$id)->orderBy('id', 'DESC')->limit(5)->get();
        return view('user.projectdetail',compact('project','materials','count','latestcourses','countstudents'));
    }

    public function projectregister(Request $request,$id)
    {
        $projects = Project::find($id);
        // $request->session()->forget(['student']);
        $student=$request->session()->get('student');
        return view('user.projectregister', compact('projects','student'));
    }

    public function postregister(Request $request)
    {
        $validatedData=$request->validate([
            'firstname'=>'required',
            'surname'=>'sometimes:required',
            'othername'=>'sometimes:required',
            'email'=>'sometimes:required',
            'phone'=>'sometimes:required',
            'age'=>'sometimes:required',
            'gender'=>'sometimes:required',
            'region'=>'sometimes:required',
            'religion'=>'sometimes:required',
            'zongo'=>'sometimes:required',
            'education'=>'sometimes:required',
            'employment'=>'sometimes:required',
            'address'=>'sometimes:required',
            'country'=>'sometimes:required',
            'word'=>'sometimes:required',
            'excel'=>'sometimes:required',
            'interest'=>'sometimes:required',
            'district'=>'sometimes:required',
            'disability'=>'sometimes:required',
            'trained'=>'sometimes:required',
            'othervocation'=>'sometimes:required',
            'project_id'=>'required',
            'status'=>'required',
        ]);

        if(empty($request->session()->get('student'))){
            $student = new Student();
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }else{
            $student = $request->session()->get('student');
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }
        // $student = $request->session()->get('student');

        $student = $request->session()->get('student');
        
        return redirect()->route('saveregister');
    }

    public function saveregister(Request $request)
    {
        $student = $request->session()->get('student');
        
        if (Auth::guest()) {
            return redirect()->route("login");
        }elseif (Auth::check()) {
            # code...
            if ($student) {
                $id = Auth::user()->id;
                $student->user_id = $id;
                // $student->save();
                // $request->session()->flash('student');
                return redirect()->route('home')->with('success', 'Thank you for your time, Please note that shortlisted applicants will be notified.');
            }else{
                return redirect()->route('home')->with('fail', 'Sorry, something went wrong, please try again later. Thank you.');
            }
        }
    }

    public function subscribe(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email'
        ]);

        $subscribe = new Subscription;

        $subscribe->email=$request->email;

        $subscribe->save();

        return redirect()->back();
    }

    public function staff()
    {
        $steerings = Steering::where('team','Staff')->orderBy('arrangement','ASC')->get();
        $name = "Staff";
        return view('user.steering',compact('steerings','name'));
    }

    public function board()
    {
        $name = "Board";
        $steerings = Steering::where('team','The Board')->orderBy('arrangement','ASC')->get();
        return view('user.steering',compact('steerings','name'));
    }

    public function executive()
    {
        $name = "Executive Management";
        $steerings = Steering::where('team','The Executive Management')->orderBy('arrangement','ASC')->get();
        return view('user.steering',compact('steerings','name'));
    }

    public function staffdetail($id)
    {
        $steering = Steering::find($id);
        return view('user.staffdetail', compact('steering'));
    }

    public function news()
    {
        $news = Post::orderBy('id', 'DESC')->paginate(10);
        return view('user.news', compact('news'));
    }

    public function singlenews(Category $category,$id)
    {
        $news = Post::find($id);
        $viewers = $news->viewer + 1;
        $news->viewer = $viewers;
        $news->save();
        $new= Post::find($id);

        // $related= Post::where('category_id', '=', $new->category->id)->where('id', '!=', $new->id)->get();
        // dd($related);

        $sides = Post::where('id','!=',$id)->orderBy('id','DESC')->limit(6)->get();

        $category = Category::limit(10)->get();
        $tags = Tag::limit(9)->get();

        $next = Post::where('id', '>', $id)->first();

        $previous = Post::where('id', '<', $id)->first(); 

        return view('user.singlenews', compact('new','sides','next','previous','category','tags'));
    }

    public function tag(Tag $tag)
    {
        $news = $tag->posts();
        return view('user.news', compact('news'));
    }

    public function category(Category $category)
    {
        $news = $category->posts();
        return view('user.news', compact('news'));
    }

    public function name(User $admin)
    {
        $admin_id = $admin->id;
        $news = Post::where('admin_id',$admin_id)->orderBy('created_at','DESC')->paginate(10);
        return view('user.news', compact('news'));
    }

    
}

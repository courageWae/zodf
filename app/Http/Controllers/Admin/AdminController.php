<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Project;
use Image;
use App\Model\Admin\Material;

class AdminController extends Controller
{
    public function adminlogin()
    {
        return view('admin.admin-login');
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

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('adminlogin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function showquestions()
    {
        $questions = Faq::all();
        return view('admin.faq.show', compact('questions'));
    }

    public function showreply($id)
    {
        $q = Faq::where('id',$id)->first();
        // dd($q);
        return view('admin.faq.edit', compact('q'));
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
        return view('admin.project.add');
    }

    public function saveproject(Request $request)
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
            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $project = new Project;

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

    public function allprojects()
    {
        $projects = Project::all();
        return view('admin.project.show', compact('projects'));
    }

    public function addmaterial()
    {
        $materials = Material::all();
        $projects = Project::all(); 
        return view('admin.material.show',compact('materials','projects'));
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
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Project;
use App\Model\User\Student;

class UserController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('user.home', compact('projects'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function projects()
    {
        $projects = Project::all();
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
        // dd($materials);
        return view('user.projectdetail',compact('project','materials','count'));
    }

    public function projectregister($id)
    {
        $projects = Project::find($id);
        return view('user.projectregister', compact('projects'));
    }

    public function saveregister(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'project_id'=>'required',
        ]);

        $student = new Student;

        $student->firstname = $request->firstname;
        $student->lastname=$request->lastname;
        $student->email = $request->email;
        $student->phone=$request->phone;
        $student->dob = $request->dob;
        $student->gender=$request->gender;
        $student->address = $request->address;
        $student->city = $request->city;
        $student->country=$request->country;
        $student->project_id=$request->project_id;

        $student->save();

        return redirect()->back();
    }
}

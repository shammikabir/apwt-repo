<?php

namespace App\Http\Controllers;
use Hash;
use Session;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherRequest  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }


    public function Teacherlogin(){

        return view('Teacher.Teacherlogin');
    }

    public function TeacherReg(){

        return view('Teacher.Registration');

    }

    public function TeacherDashboard(){

        return view('Teacher.TeacherDashboard');
    }
    



    public function TeacherAdddata(Request $request){

        $request->validate([
            "FirstName"=>"required|max:20",
            "LastName"=>"required|max:20",
            "Gender"=>'required',
            "Address"=>'required',

            'Email'=>'required|Email|unique:teachers,Email' ,
            
            "Password"=>'required'
            
        
        ]);
    

      $user= new Teacher;
    //$user->  $request->id;
    
    $user->FirstName=$request->FirstName;
    $user->LastName=$request->LastName;
    $user->Gender=$request->Gender;
    $user->Address=$request->Address;
    $user->Email=$request->Email;
    $user->Password=Hash::make ($request->Password);
    $user->save();
   
    if ($user){

        return back()-> with('success','You are Successfully Registered');


    }else
    {
        return back()-> with('fail','Something Wrong...' );
    }
        
    }

    // public function newstudent(){

    //     return view('Teacher.StudentCreate');
    // }

    
    

    public function addStudent(Request $request){

        $request->validate([
            "FirstName"=>"required",
            "LastName"=>"required",
            "Gender"=>'required',
            "Address"=>'required',
            "Course"=>"required",
            'Email'=>'required' ,
            
            
        ]);
        
        $user= new Student;
        //$user->  $request->id;
        
        $user->FirstName=$request->FirstName;
        $user->LastName=$request->LastName;
        $user->Gender=$request->Gender;
        $user->Address=$request->Address;
        $user->Email=$request->Email;
        $user->Course=$request->Course;
        $user->save();
        return redirect('Teacher.StudentList');
       
        if ($user){
    
            return back()-> with('success','You are Successfully Registered');
    
    
        }
        else
        {
            return back()-> with('fail','Something Wrong...' );
        }
        
        
    }



}

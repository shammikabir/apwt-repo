<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Hash;
use Session;
class StudentController extends Controller
{
    public function StudentLogin(){

        return view('Student.login');
    }

    public function Registration(){

        return view('Student.Registration');
    }

    public function StudentDashboard(){

        return view('Student.Dashboard');
    }
    

    public function StudentDetails(){

      
        $user= Student::all();

       return view ('Teacher.StudentList',['users'=> $user]);

   }
    // public function registrationSubmitted(Request $request){
    //     $request->validate([
    //         "FirstName"=>"required|min:5|max:20",
    //         "LastName"=>"required|min:5|max:20",
    //         "Course"=>'required',
    //         "Gender"=>'required',
    //         "Address"=>'required',

    //         'Email'=>'required',
    //         "Password"=>'required',
            
        
    //     ]);

       // return $request->FirstName;
    
        
    

    public function addData(Request $request)
    {


        
            $request->validate([
                "FirstName"=>"required|max:20",
                "LastName"=>"required|max:20",
                "Course"=>'required',
                "Gender"=>'required',
                "Address"=>'required',
    
                'Email'=>'required|Email|unique:Students,Email' ,
                
                "Password"=>'required'
                
            
            ]);
        

        $user= new Student;
        $user-> $request->id;
        $user->FirstName=$request->FirstName;
        $user->LastName=$request->LastName;
        $user->Course=$request->Course;
        $user->Gender=$request->Gender;
        $user->Address=$request->Address;
        $user->Email=$request->Email;
        $user->Password=Hash::make ($request->Password);
        $user->save();
       
        if ($user){

            return back()-> with('success','You are Successfully Registered');


        }else
        {
            return back()-> with('fail','Something Wrong' );
        }

    }


    public function loginsubmit(Request $request)
    {
     

        $request->validate([

            'Email'=>'required' ,
            
            "Password"=>'required'

       ]);
       
       if($request){

        $studentinfo= Student::where('Email','=', $request->Email)->first();
            if(!$studentinfo)
            {
                return back()->with('fail','Enter a valid email address');
            }
        else
        {
            //checking pass

            $studentinfo= Student::where('Password','=', $request->Password)->first();
            if(Hash::check($request->Password, $studentinfo->Password)){
                $request->session()->put('logid',$studentinfo->id);
                return redirect('/Dashboard');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }

    }  

       
    }
}
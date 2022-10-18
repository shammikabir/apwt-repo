<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Registration(){

        return view('pages.Registration');
    }

    public function contact(){

        return view('pages.Contact');
    }

    public function Login(){

        return view('pages.Login');
    }

    public function studentList(){
        $student = array();

        for($i=0; $i<5; $i++){
            $student = array(
                "name" => "Student " . ($i+1),
                "id" =>"00" . ($i+1)

            );
            $students[] = (object)$student; 
        }


        return view('pages.Contact')->with('students', $students);
    }


    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required",
            'email'=>'required',
            // 'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
    );
        return $request;
    }

    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required',
            'password' => 'required',
            // 'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
    );
        return $request->email;
    }

}

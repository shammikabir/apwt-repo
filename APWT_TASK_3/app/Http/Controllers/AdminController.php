<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Teacher;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Hash;

class AdminController extends Controller
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
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }



    public function TeacherDetails(){

      
        $teacher= Teacher::all();

       return view ('admin.TeacherList',['teachers'=> $teacher]);

   }


//     public function NewTeacher(){

//     return view('admin.TeacherCreate');
//    }

 
 public function TeacherAdd(Request $request){

    $request->validate([
        'name'=>'required',
        'email' => 'required|email|unique:teachers',
        'password' => 'required'
    ]);
    
    $teacher = new Teacher;
    $teacher->name = $request->name;
    $teacher->email = $request->email;
   $teacher->password = Hash::make($request->password);
    $save = $teacher->save();
    return redirect('admin.TeacherList');

    // if($save){
    //     return back()->with('success','Registration has been successful');
    // }
    // else{
    //     return back()->with('fail','Try Again, Something wrong');
    // }
}
}

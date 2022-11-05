@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><h1>Add New Student</h1></div>

<div class="card">
    <div class="card-body">
        <form action="{{route('StudentCreate')}}" method="POST">
            @csrf
            @if(Session::has('success') )
            <div class="alert alert-success" role="alert">{{Session::get ('success')}}</div>
            @endif
            @if(Session::has('fail') )
            <div class="alert alert-danger" role="alert">{{Session::get ('fail')}}</div>
            @endif
            </div> 
            <div style="font-weight:bold">
            <span>First Name:</span>
            <input type="text" name="FirstName" class="form-control">
            @error('FirstName')
            <span style="color:red">
              {{$message}}
            </span>
          @enderror
            </div>
            <div style="font-weight:bold">
                <br>
                <span>Last Name</span>
            <input type="text" name="LastName"   class="form-control">
           
            @error('LastName')
            <span style="color:red">
              {{$message}}
            </span>
          @enderror
            </div>
          
          {{-- <div style="font-weight:bold">  
            <span>
            Course:
          </span>
            <input type="text" name="Course" placeholder="Course Name" value="{{old('Course')}}" class="form-control"> 
          
            @error('Course')
            <span style="color:red">
              {{$message}}
            </span>
          @enderror --}}
          
            
          <div>  
          <label style="font-weight:bold">
          Gender :  
          </label><br>  
          <input type="radio" value="Male" name="Gender" checked > Male   
          <input type="radio" value="Female" name="Gender"> Female  
            
          </div> 
          
          <div style="font-weight:bold">
             
          <span>Address:</span>
                      <input type="text" name="Address"  class="form-control"  style="height:100px">
                     
                      @error('Address')
                      <span style="color:red">
                        {{$message}}
                      </span>
                    @enderror
                    </div>
                    <div style="font-weight:bold">
                   
          <span>Course</span>
                      <input type="text" name="Course" class="form-control">
                     
                      @error('Email')
                      <span style="color:red">
                        {{$message}}
                      </span>
                    @enderror
                    <span>Email</span>
                    <input type="text" name="Email" class="form-control">

                    @error('Password')
                      <span style="color:red">
                        {{$message}}
                      </span>
                    @enderror
                    <span>Password</span>
                    <input type="text" name="Password" class="form-control">
                   
                    @error('Address')
                    <span style="color:red">
                      {{$message}}
                    </span>
                  @enderror
                  <br>
          
                    
             <div class="text- center">
            
             <input type="submit" class="btn btn-primary" value="Add" />
             </div>
          </form>  
          </body>  
          </html>  
        
            

@endsection
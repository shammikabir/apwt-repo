
@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><h1>Student Details</h1></div>
            <div class="col col-md-10">
                <a href="{{route('StudentCreate')}}" class="btn btn-info">Add</button></a>
            </div>
        </div>
    </div>
 <table class="table table-success table-striped ">
        <thead class="table-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Course</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col-10">Edit</th>
            <th scope="col">Delete</th>
            
            
            
        </tr>
        </thead>
        <br> 
        @foreach($users as $user)
        <tr> 
            <td>{{$user['FirstName']}}</td>
            <td>{{$user['FirstName']}}</td>
            <td>{{$user['LastName']}}</td>
            <td>{{$user['Course']}}</td>
            <td>{{$user['Gender']}}</td>
            <td>{{$user['Address']}}</td>
            <td>{{$user['Email']}}</td>

            <td><a href= "{{route('StudentEdit')}}" class="btn btn-info">Edit</button></a>
                <td><a href= "{{route('StudentEdit')}}" class="btn btn-danger">Delete</button></a>
           
         
         
    
        </tr>
        
       
        @endforeach
         
    
    </table>
    @endsection



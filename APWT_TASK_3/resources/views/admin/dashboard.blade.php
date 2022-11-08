@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h4> Admin Dashboard</h4>
            <br>
            <h6> Admin Details:</h6>
        </div>
    </div>
</div>
            <table class="table table-hover">
                <thead>
                    <th>name</th>
                    <th>email</th>
                </thead>
                <tbody>
                    <td>{{$LoggedUserInfo['name'] }}</td>
                    <td>{{$LoggedUserInfo['email'] }}</td>
                    <td><a href="{{ route('auth.logout')}}">Logout</a></td>
                    
                </tbody>

            </table>
        </div>
    </div>
</div>
<br>

<a class="btn btn-primary" href="{{route('TeacherList')}}">Teacher Details</a>
@endsection
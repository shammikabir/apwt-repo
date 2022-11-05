<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
 
}  
.container {  
    padding: 100px;  
  background-color: rgb(178, 225, 240);  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 20%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}    
</style>  
</head>  
<body>  
  <form action="{{route('TeacherReg')}}" method="POST">
   
    {{csrf_field()}}
    

  <div class="container">  
    <div class="row col-md-6 col-md-offset-3">
   <h1> Teacher Registration Form</h1> 

  @if(Session::has('success') )
  <div class="alert alert-success" role="alert">{{Session::get ('success')}}</div>
  @endif
  @if(Session::has('fail') )
  <div class="alert alert-danger" role="alert">{{Session::get ('fail')}}</div>
  @endif
  </div>
  <hr>  
  <div style="font-weight:bold">
  <span>First Name:</span>
  <input type="text" name="FirstName" placeholder="Enter First Name" value="{{old('FirstName')}}" class="form-control">
  @error('FirstName')
  <span style="color:red">
    {{$message}}
  </span>
@enderror
  </div>
  <div style="font-weight:bold">
      <br>
      <span>Last Name</span>
  <input type="text" name="LastName" placeholder="Enter Last Name" value="{{old('LastName')}}" class="form-control">
 
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
            <input type="text" name="Address"  value="{{old('Address')}}"class="form-control"  style="height:100px" placeholder="Write Your Current Address..">
           
            @error('Address')
            <span style="color:red">
              {{$message}}
            </span>
          @enderror
          </div>
          <div style="font-weight:bold">
         
<span>Email</span>
            <input type="text" name="Email" placeholder="Enter  email" value="{{old('Email')}}" class="form-control">
           
            @error('Email')
            <span style="color:red">
              {{$message}}
            </span>
          @enderror

          </div>
          <div style="font-weight:bold">
           
   <span>Password</span>
            <input type="Password" name="Password" placeholder="Enter password" value="{{old('Password')}}" class="form-control">
            @error('Password')
            <span style="color:red">
              {{$message}}
            </span>
          @enderror

          </div>
           
  
    <center> <button type="submit" class="registerbtn">Register</button>   </center> 
</form>  
</body>  
</html>  
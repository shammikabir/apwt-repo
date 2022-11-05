

<h2>Login</h2>

@if(Session::has('success') )
  <div class="alert alert-success" role="alert">{{Session::get ('success')}}</div>
  @endif
  @if(Session::has('fail') )
  <div class="alert alert-danger" role="alert">{{Session::get ('fail')}}</div>
  @endif
<form action="{{route('login')}}"method="POST">
    {{csrf_field()}}
   
    

    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="Email" value="{{old('Email')}}" class="form-control">
        @error('Email')
            <span style="color:red">
              {{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="Password" name="Password" class="form-control">
        @error('Password')
            <span style="color:red">
              {{$message}}</span>
        @enderror
    </div>

    <br>
    <input type="submit" class="btn btn-success" value="Login" >  
</form>

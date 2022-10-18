<h2>login</h2>
<form action="/register" method="post">
    {{csrf_field()}}


    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="password" name="password" class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <br>
    <input type="submit" class="btn btn-success" value="Login" >  
</form>

@extends('layouts.app')
@section('content')
    <!-- Bootstrap CSS -->
   
    <div class="p-3 mb-2 bg-white text-dark">
      
    
        <html>
           <h1> Teacher Dashboard </h1>
           <br>
            <a class="btn btn-primary" href="{{route('StudentList')}}">Student Details</a>
            <a class="btn btn-primary" href="{{route('StudentList')}}">Student Edit</a>

            
        </html>

    </body>
  </head>
    
</html>

@endsection











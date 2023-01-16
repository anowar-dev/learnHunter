<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
   <h1>this is contact page</h1><br><br>
   <h2><a href="{{ url('/') }}">Back to home</a></h2><br><br>
    <h3>Store your contact person.</h3><br>

    @if (session('good'))
    <div class="alert alert-success">
        {{ session('good') }}
    </div>
    @endif
    <br>

   <form action="{{ route('student.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter your name"><br>
    <input type="email" name="email" placeholder="Enter your email address"><br>
    <input type="number" name="number" placeholder="Enter your number"><br>
    <input type="submit" value="Submit">
   </form>
       
</body>
</html>
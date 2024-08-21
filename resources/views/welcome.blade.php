<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite( ['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <h2> <button class="btn btn-primary" type="button">Welcome to School Management System</button></h2>

    <div style="margin-left:900px;">
        <a href="{{url('/')}}" class="btn btn-primary" mar>Home</a>
        <a href="{{url('/student')}}" class="btn btn-primary">All Student</a>
        <a href="{{ url('/grade') }}" class="btn btn-primary">All Grades</a>
        <a href="{{ url('/subject') }}" class="btn btn-primary">All Subjects</a>
    </div>
    
</body>
</html>



    
    
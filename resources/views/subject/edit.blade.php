<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Students</h1>
    <form action="/students/{{$student->id}}" method="POST">
        @csrf
        @method('put')
        <label for="first_name">FirstName</label>
        <input type="text" id="first_name" name="first_name" value="{{$student->first_name}}">
        <label for="last_name">LastName</label>
        <input type="text" id="last_name" name="last_name" value="{{$student->last_name}}">
        <label for="grade_id">GradeName</label>
      <select id="grade_id" name="grade_id" value={{$student->grade->grade_name}}>
        @foreach ($grades as $k=>$v)
        <option value="{{$k}}" {{($k==$student->grade_id)?"selected":""}}>{{$v}}</option>
        @endforeach
      </select>
<input type='submit' value='Update'>
    </form>
</body>
</html>
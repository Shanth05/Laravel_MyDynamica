<h2> 
    {{-- <button class="btn btn-primary" type="button">Welcome to School Management System</button> --}}
</h2>

<div style="margin-left:900px;">
    <a href="{{url('/')}}" class="btn btn-primary">Home</a>
    <a href="{{url('/students')}}" class="btn btn-primary">Students</a>
    <a href="{{ url('/grades') }}" class="btn btn-primary">Grades</a>
    <a href="{{ url('/subjects') }}" class="btn btn-primary">Subjects</a>
</div>

<table border="1">
    
@vite( ['resources/css/app.css', 'resources/js/app.js'])
{{$slot}}

</table>


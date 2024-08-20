<x-layout>

    <h2><b>Student Details</b></h2>
    <br>
    <table border="1" class="tablestudentindex table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade Name</th>

        </tr>
    
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td><a href="{{ url("student/{$student->id}") }}">{{ $student->first_name }}</a></td>
            <td>{{ $student->last_name }}</td>
            <td><a href="{{ url("grade/{$student->id}") }}">{{ $student->grade->grade_name }}</a></td> 
        </tr>  
    @endforeach

    </table>

</x-layout>
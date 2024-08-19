<x-layout>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade Name</th>

        </tr>
    
        @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td><a href="{{url("student/$student->id")}}">{{$student->first_name}}</a></td>
            <td>{{$student->last_name}}</td>
            <td><a href="{{url("grade/$student->id")}}">{{$student->grade->grade_name}}</td> 
        </tr>
            
        @endforeach
    </table>
    

</x-layout>
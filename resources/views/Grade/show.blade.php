<x-layout>

    <table border="1">
        <tr>
            <th>Group Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nic</th>
            <th>Joined Date</th>
            <th>Gender</th>
        </tr>
    
        @foreach ($students as $student)
        <tr>
            <td><a href="{{url("student/$grade->id")}}">{{$student->grade->grade_name}}</td>
            <td><a href="{{url("student/$grade->id")}}">{{$student->first_name}}</a></td>
            <td>{{$student->last_name}}</td>   
            <td>{{$student->nic}}</td>
            <td>{{$student->joined_date}}</td>
            <td>{{$student->gender}}</td>
            
        </tr>
            
        @endforeach
    </table>
    

</x-layout>
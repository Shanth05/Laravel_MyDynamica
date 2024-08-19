<x-layout>

    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Click</th>
        </tr>
    
        @foreach ($students as $student)
        <tr>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td> 
            <td><a href="{{url("student/$student->id")}}">Show</a></td> 
        </tr>
            
        @endforeach
    </table>
    

</x-layout>
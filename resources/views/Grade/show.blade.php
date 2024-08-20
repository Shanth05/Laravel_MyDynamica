<x-layout>
    <h2><b>Grade & Student Details</b></h2>
    <h3><ul>{{$grade->grade_name}} Students</ul></h3>
    <table border="1" class="tablegradeshow table-bordered border-primary">
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
            <td><a href="{{url("student/$grade->grade_name")}}">{{$student->grade->grade_name}}</a></td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>   
            <td>{{$student->nic}}</td>
            <td>{{$student->joined_date}}</td>
            <td>{{$student->gender}}</td>
            
        </tr>
            
        @endforeach
    </table>

    <table>
        @foreach ($grade->subjects as $subject)
            <tr>
                <td>
                    {{$subject->subject_name}}
                </td>
            </tr>
        @endforeach
    </table>
</x-layout> 






   
    {{-- <table border="1">
        <tr>
            <th>firstname</th>
        <th>lastname</th>
       </tr>
    @foreach ($students as $student)
    <tr>
        <td><a href="{{url("students/$student->id")}}">{{$student->firstname}}</a></td>
        <td>{{$student->lastname}}</td>

    </tr>
        @endforeach --}}









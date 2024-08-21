<x-layout>
    <h2><b>Personal Details</b></h2>
    <table border="1" class="tablestudentshow table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Nic</th>
            <th>Joined Date</th>
            <th>Gender</th>
            <th>Grade Name</th>
        </tr>
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td> 
            <td>{{$student->date_of_birth}}</td>
            <td>{{$student->nic}}</td>
            <td>{{$student->joined_date}}</td>
            <td>{{$student->gender}}</td>
            <td><a href="{{url("grade/$student->id")}}">{{$student->grade->grade_name}}</td>

        </tr>
    </table>
    <table>
        @foreach ($student->subjects as $subject)
            <tr>
                <td>
                    {{$subject->subject_name}}
                </td>
            </tr>
        @endforeach
    </table>
    
</x-layout>
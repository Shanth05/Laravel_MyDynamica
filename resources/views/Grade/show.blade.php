<x-layout>
    <h2><b><ul>{{$grade->grade_name}} Students</ul></b></h2>
    <table border="1" class="tablegradeshow table-bordered border-primary">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nic</th>
            <th>Joined Date</th>
            <th>Gender</th>
        </tr>
    
        @foreach ($students as $student)
        <tr>
            <td><a href="{{url("/student/$student->id")}}">{{$student->first_name}}</a></td>
            <td>{{$student->last_name}}</td>   
            <td>{{$student->nic}}</td>
            <td>{{$student->joined_date}}</td>
            <td>{{$student->gender}}</td>         
        </tr>           
        @endforeach
    </table>

    <h2>Subject</h2>
    <table border="1" class="tablestudentindex table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>
        </tr>

        @foreach ($grade->subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</a></td>
                <td>
                    <a href="{{url("/subject/$subject->id")}}">
                        {{$subject->subject}}
                    </a>
                </td>
                <td>{{ $subject->subject_order }}</td>
                <td>{{ $subject->color }}</td>
            </tr>
        @endforeach
    </table>

<br>

<h2>Grade</h2>
<table border="1" class="tablegradeshow table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>Grade Name</th>
            <th>Grade Order</th>
            <th>Grade Group</th>
            <th>Grade Color</th> 
        </tr>

        <tr>
            <td>{{$grade->id}}</td>
            <td>{{ $grade->grade_name }}</td> 
            <td>{{$grade->grade_order}}</td>
            <td>{{$grade->grade_group}}</td>
            <td>{{$grade->grade_color}}</td>
        </tr>

    </table>

</x-layout> 








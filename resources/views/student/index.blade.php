<x-layout>

    <h2><b>Student Details</b></h2>
    <br>
    <table border="1" class="tablestudentindex table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade</th>
            <th>Subject</th>

        </tr>
    
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td><a href="{{ url("student/{$student->id}") }}">{{ $student->first_name }}</a></td>
            <td>{{ $student->last_name }}</td>
            <td><a href="{{ url("grade/{$student->grade_id}") }}">{{ $student->grade->grade_name }}</a></td>
           
            <td>
                
                        @foreach ($student->subjects as $subject)
                        <a href="{{ url("subject/{$subject->id}") }}">
                            {{$subject->subject}}</a>,
                            
                        @endforeach
          
            </td> 
 
        </tr>  
    @endforeach

    </table>
    {{-- @foreach ($students->subjects as $student)
    <tr>
        <td>{{ $student->subject}}</td>
        

    </tr>  
@endforeach --}}

</x-layout>
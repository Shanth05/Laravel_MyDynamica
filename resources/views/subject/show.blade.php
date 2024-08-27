<x-layout>

    <h2>{{ $subject->subject }} Details</h2>

    <table border="1" class="tablestudentindex table-bordered border-primary">
        <tr>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>
            {{-- <th>Grade Name</th> --}}
        </tr>   
        <tr>
            <td>{{ $subject->subject_name}}</td>
            <td>{{ $subject->subject_order }}</td>
            <td>{{ $subject->color }}</td>
            {{-- <th>{{ $grade->grade_name }}</th> --}}
        </tr>

    </table>
    
    <table>
 
    </table>
</x-layout>



<h2>Grades</h2>
<table border="1" class="subjectshow">
    <tr>
    <th>Grade Name</th>
    <th>Grade Order</th>
    </tr>

    @foreach ($subject->grades as $grade)
        <tr>
        <td><a href="{{url("/grade/$grade->id")}}">{{ $grade->grade_name }}</a></td>
        <td>{{ $grade->grade_order }}</td>
        </tr>
    @endforeach

</table>

<h2>Students</h2>

    <table border="1" class="subjectshow">
        <tr>
            <th>Student Name</th>
        </tr>

        @foreach ($subject->students as $student)
            <tr>
                <td>
                    <a href="{{url("/student/$student->id")}}">
                        {{ $student->first_name }}
                    </a>   
                </td>
            </tr>
        @endforeach

    </table>
<x-layout>

    <h2>{{ $subject->subject_name }} Subject Details</h2>

    <table border="1" class="tablestudentindex table-bordered border-primary">
        <tr>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>
            {{-- <th>Grade Name</th> --}}
        </tr>   
        <tr>
            <td>{{ $subject->subject }}</td>
            <td>{{ $subject->subject_order }}</td>
            <td>{{ $subject->color }}</td>
            {{-- <th>{{ $grade->grade_name }}</th> --}}
        </tr>

    </table>
    
    <table>
 
    </table>
</x-layout>



<h2>Grades</h2>
<table border="1" class="tablestudentindex table-bordered border-primary">
    <tr>
    <th>Grade Name</th>
    <th>Grade Order</th>
    </tr>
    @foreach ($subject->grades as $grade)
        <tr>
        <td>{{ $grade->grade_name }}</td>
        <td>{{ $grade->grade_order }}</td>
        </tr>
    @endforeach
</table>

    <h2>Student</h2>
<table border="1" class="tablestudentindex table-bordered border-primary">
    <tr>
        <th>Student Name</th>
    </tr>
    @foreach ($subject->students as $student)
    <tr>
        <td>
            {{ $student->first_name }}
        </td>
    </tr>
    @endforeach
</table>
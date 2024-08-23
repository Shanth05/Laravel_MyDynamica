<x-layout>

    <h2><b>Subject Details</b></h2>
    <br>
    <table border="1" class="tablestudentindex table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>

        </tr>
    
        @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td><a href="{{ url("subjects/{$subject->id}") }}">{{ $subject->subject }}</a></td>
                <td>{{ $subject->subject_order }}</td>
                <td>{{ $subject->color }}</td>
            </tr>  
        @endforeach

    </table>
</x-layout>
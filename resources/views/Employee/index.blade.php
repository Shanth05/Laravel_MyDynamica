<x-layout>

    <h2><b>Employee Details</b></h2>
    <br>
    <table border="1" class="tablestudentindex table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade Name</th>

        </tr>
    
    @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td><a href="{{ url("employee/{$employee->id}") }}">{{ $employee->first_name }}</a></td>
            <td>{{ $employee->last_name }}</td>
            <td><a href="{{ url("distinct/{$employee->id}") }}">{{ $employee->distinct->name }}</a></td> 
        </tr>  
    @endforeach

    </table>

</x-layout>

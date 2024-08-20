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
            <th>Distinct</th>
        </tr>
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td> 
            <td>{{$employee->date_of_birth}}</td>
            <td>{{$employee->nic}}</td>
            <td>{{$employee->joined_date}}</td>
            <td>{{$employee->gender}}</td>
            <td>{{$employee->distinct}}</td>
            
            <td><a href="{{url("distinct/$employee->id")}}">{{$employee->distinct->name}}</td>

        </tr>
    </table>
    
    
</x-layout>

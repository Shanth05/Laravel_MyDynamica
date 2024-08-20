<x-layout>
    <h2><b>Employee & Distinct Details</b></h2>
    <h3><ul>{{$distinct->name}} Distinct</ul></h3>
    <table border="1" class="tablegradeshow table-bordered border-primary">
        <tr>
            <th>Employee Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>NIC</th>
            <th>Joined Date</th>
            <th>Gender</th>
            <th>Distinct</th>
        </tr>
    
        @foreach ($employees as $employee)
        <tr>
            <td><a href="{{url("employee/$distinct->name")}}">{{$employee->distinct->name}}</a></td>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>   
            <td>{{$employee->date_of_birth}}</td>  
            <td>{{$employee->nic}}</td>
            <td>{{$employee->joined_date}}</td>
            <td>{{$employee->gender}}</td>
            <td>{{$employee->distinct}}</td>  
            
        </tr>
            
        @endforeach
    </table>
</x-layout> 




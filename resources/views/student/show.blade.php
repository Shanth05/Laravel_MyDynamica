<x-layout>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Nic</th>
            <th>Joined Date</th>
            <th>Gender</th>
            <th>Designation</th>
        </tr>
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td> 
            <td>{{$student->date_of_birth}}</td>
            <td>{{$student->nic}}</td>
            <td>{{$student->joined_date}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->designation}}</td>
        </tr>
    </table>
    
    
</x-layout>
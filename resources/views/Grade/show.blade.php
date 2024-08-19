<x-layout>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Grade Name</th>
            <th>Grade Group</th>
            <th>Grade Color</th>
        </tr>
        <tr>
            <td>{{$grade->id}}</td>
            <td>{{$grade->grade_name}}</td>
            <td>{{$grade->grade_group}}</td> 
            <td>{{$grade->grade_color}}</td>
        </tr>
    </table>
     
</x-layout>
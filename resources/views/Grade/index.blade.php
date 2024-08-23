<x-layout>
    <h2><b>Grade Details</b></h2>
    <table border="1" class="tablegradeindex table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>Grade Name</th>
            <th>Grade Order</th>
            <th>Grade Group</th>
            <th>Grade Color</th> 
        </tr>
    
        @foreach ($grades as $grade)
        <tr>
            <td>{{$grade->id}}</td>
            <td><a href="{{ url("grades/{$grade->id}") }}">{{ $grade->grade_name }}</a></td> 
            <td>{{$grade->grade_order}}</td>
            <td>{{$grade->grade_group}}</td>
            <td>{{$grade->grade_color}}</td>
        </tr>
            
        @endforeach
    </table>
</x-layout> 





 
<x-layout>
    <h2><b>Grade Details</b></h2>
    <table border="1" class="tablegradeindex table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>Grade Name</th>
            <th>Grade Oder</th>
            <th>Grade Group</th>
            <th>Grade Color</th> 
        </tr>
    
        @foreach ($grades as $grade)
        <tr>
            <td><a href="{{url("grade/$grade->id")}}">{{$grade->grade_name}}</a></td>
            <td>{{$grade->grade_name}}</td>
            <td>{{$grade->grade_oder}}</td>
            <td>{{$grade->grade_color}}</td>
            <td>{{$grade->grade_group}}</td>
        </tr>
            
        @endforeach
    </table>
</x-layout> 





 
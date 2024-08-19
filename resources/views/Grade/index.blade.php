<x-layout>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Grade Name</th>
            {{-- <th>Grade Group</th>
            <th>Grade Color</th> --}}
        </tr>
    
        @foreach ($grades as $grade)
        <tr>
           <td><a href="{{url("grade/$grade->id")}}">{{$grade->id}}</a></td>
            <td>{{$grade->grade_name}}</td>
            {{-- <td>{{$grade->grade_group}}</td> 
            <td>{{$grade->grade_color}}</td>   --}}

            <td></td> 
        </tr>
            
        @endforeach
    </table>

</x-layout>
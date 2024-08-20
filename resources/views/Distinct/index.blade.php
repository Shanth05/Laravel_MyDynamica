<x-layout>
    <h2><b>Distinct Details</b></h2>
    <table border="1" class="tablegradeindex table-bordered border-primary">
        <tr>
            <th>ID</th>
            <th>Distinct Name</th>
            <th>Salary</th>
        </tr>
    
        @foreach ($distincts as $distinct)
        <tr>
            <td><a href="{{url("distinct/$distinct->id")}}">{{$distinct->name}}</a></td>
            <td>{{$distinct->name}}</td>
            <td>{{$distinct->salary}}</td>
        </tr>
            
        @endforeach
    </table>
</x-layout> 


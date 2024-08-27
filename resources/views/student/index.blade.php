<x-layout>

    <h2><b>Student Details</b></h2>

        {{-- {{$students->currentPage()}} <br>
        {{$students->count()}} --}}
    

    <br>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade</th>
                        <th>Click</th>
            
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td><a href="{{ url("grades/{$student->grade_id}") }}">{{ $student->grade->grade_name }}</a></td>
                       
                        <td>
                            <a href="{{ url("students/{$student->id}") }}">show</a>
                        </td> 
             
                    </tr>  
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
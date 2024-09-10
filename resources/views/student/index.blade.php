{{-- <h2><b>Student Details</b></h2>

        {{-- {{$students->currentPage()}} <br>
        {{$students->count()}} --}}


{{-- <br>

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
    </div>   --}}



<x-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Student Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href='/'>Dashboard</a> / Students
                </li>
            </ol>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-info text-white">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatablesSimple" class="table table-hover table-striped table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Grade</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->first_name }}</td>
                                            <td>{{ $student->last_name }}</td>
                                            <td>
                                                <a href="{{ url("grades/{$student->grade_id}") }}"
                                                    class="text-decoration-none text-dark">
                                                    {{ $student->grade->grade_name }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ url("students/{$student->id}") }}"
                                                    class="btn btn-sm btn-primary">
                                                    Show
                                                </a>
                                            <t/d>
                                            <td>
                                                <a href="{{ url("students/{$student->id}/edit") }}"
                                                    class="btn btn-sm btn-primary">
                                                    Edit
                                                </a>
                                            <td>
                                                <form action="/students/{{$student->id}}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                   
                                                    <input type="submit" value="delete" class="btn btn-sm btn-danger" onclick=" return confirm('Are you sure?')">                                    
                                                </form>
                                            </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$students->links()}}
                        </div>
                    </div>
                </div>
            </div>
</x-layout>

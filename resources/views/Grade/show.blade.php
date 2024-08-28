{{-- <x-layout>

    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Student Details
                </div>
                <div class="card-body">
                    <table border="1" class="tablegradeshow table-bordered border-primary">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                
                        </tr>
                    
                        @foreach ($students as $student)
                        <tr>
                            <td><a href="{{url("/students/$student->id")}}">{{$student->first_name}}</a></td>
                            <td>{{$student->last_name}}</td>        
                        </tr>           
                        @endforeach
                    </table>                       
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Subject Details
                </div>
                <div class="card-body">
                    <table border="1" class="tablestudentindex table-bordered border-primary">
                        <tr>
                            <th>ID</th>
                            <th>Subject Name</th>
                            <th>Subject Order</th>
                            <th>Subject Color</th>
                        </tr>
                
                        @foreach ($grade->subjects as $subject)
                            <tr>
                                <td>{{ $subject->id }}</a></td>
                                <td>
                                    <a href="{{url("/subjects/$subject->id")}}">
                                        {{$subject->subject_name}}
                                    </a>
                                </td>
                                <td>{{ $subject->subject_order }}</td>
                                <td>{{ $subject->color }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
              Grade Details
            </div>
            <div class="card-body">
                <table border="1" class="tablegradeshow table-bordered border-primary">
                    <tr>
                        <th>ID</th>
                        <th>Grade Name</th>
                        <th>Grade Order</th>
                        <th>Grade Group</th>
                        <th>Grade Color</th> 
                    </tr>
            
                    <tr>
                        <td>{{$grade->id}}</td>
                        <td>{{ $grade->grade_name }}</td> 
                        <td>{{$grade->grade_order}}</td>
                        <td>{{$grade->grade_group}}</td>
                        <td>{{$grade->grade_color}}</td>
                    </tr>
            
                </table>
            
            </div>
        </div>
    </div>
</div>
</x-layout> 
 --}}


<x-layout>
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">{{ $grade->grade_name }} Details</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"> <a href='/'>Dashboard</a> / <a href='/grades'>Grade </a> / {{$grade->grade_name}}</li>
            </ol>
            <div class="container my-4">
                <div class="row">
                    <div class="col-xl-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <i class="fas fa-user me-1"></i>
                                Student Details
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td><a href="{{ url("/students/$student->id") }}"
                                                        class="text-decoration-none text-dark">{{ $student->first_name }}</a>
                                                </td>
                                                <td><a href="{{ url("/students/$student->id") }}"
                                                        class="text-decoration-none text-dark">{{ $student->last_name }}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-success text-white">
                                <i class="fas fa-book me-1"></i>
                                Subject Details
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead class="table-success">
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject Name</th>
                                            <th>Subject Order</th>
                                            <th>Subject Color</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($grade->subjects as $subject)
                                            <tr>
                                                <td>{{ $subject->id }}</td>
                                                <td><a href="{{ url("/subjects/$subject->id") }}"
                                                        class="text-decoration-none text-dark">{{ $subject->subject_name }}</a>
                                                </td>
                                                <td>{{ $subject->subject_order }}</td>
                                                <td>{{ $subject->color }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>

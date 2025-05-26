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

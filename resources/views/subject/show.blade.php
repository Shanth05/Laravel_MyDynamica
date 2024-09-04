{{-- <x-layout>

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">

                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                           Grade Details
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <th>Grade Name</th>
                                    <th>Grade Order</th>
                                </tr>

                                @foreach ($subject->grades as $grade)
                                    <tr>
                                        <td><a href="{{ url("/grades/$grade->id") }}">{{ $grade->grade_name }}</a></td>
                                        <td>{{ $grade->grade_order }}</td>
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
                                Students
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <th>Student Name</th>
                                </tr>

                                @foreach ($subject->students as $student)
                                    <tr>
                                        <td>
                                            <a href="{{ url("/student/$student->id") }}">
                                                {{ $student->first_name }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout> --}}

<x-layout>
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">{{$subject->subject_name}} Details</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href='/'>Dashboard</a> / <a href='/subjects'>Subject</a> / {{$subject->subject_name}}
                </li>
            </ol>

            <div class="row">
                <!-- Grade Details Section -->
                <div class="col-xl-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <i class="fas fa-chart-area me-1"></i>
                            Grade Details
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Grade Name</th>
                                        <th>Grade Order</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subject->grades as $grade)
                                        <tr>
                                            <td>
                                                <a href="{{ url("/grades/$grade->id") }}" class="text-decoration-none text-dark">
                                                    {{ $grade->grade_name }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ url("/grades/$grade->id") }}" class="text-decoration-none text-dark">
                                                    {{ $grade->grade_order }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Students Section -->
                <div class="col-xl-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-success text-white">
                            <i class="fas fa-chart-bar me-1"></i>
                            Students
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                <thead class="table-success">
                                    <tr>
                                        <th>Student Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subject->students as $student)
                                        <tr>
                                            <td>
                                                <a href="{{ url("/students/$student->id") }}" class="text-decoration-none text-dark">
                                                    {{ $student->first_name }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>

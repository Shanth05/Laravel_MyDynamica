{{-- <x-layout>

    <h2><b>Grade Details</b></h2>

    {{-- {{$students->currentPage()}} <br>
        {{$students->count()}} --}}


<br>

{{-- <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Grade Name</th>
                        <th>Grade Group</th>
                        <th>Grade Order</th>
                        <th>Grade Color</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                        <tr>
                            <td>{{ $grade->id }}</td>
                            <td><a href="{{ url("grades/{$grade->id}") }}">{{ $grade->grade_name }}</a></td>
                            <td>{{ $grade->grade_group }}</td>
                            <td>{{ $grade->grade_order }}</td>
                            <td>{{ $grade->grade_color }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}

{{-- </x-layout> --}}

<x-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Grade Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href='/'>Dashboard</a> / Grade</li>
            </ol>
            <div class="container-fluid px-4">
                <br>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-success text-white">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatablesSimple" class="table table-hover table-striped table-bordered">
                                <thead class="table-warning">
                                    <tr>
                                        <th>ID</th>
                                        <th>Grade Name</th>
                                        <th>Grade Group</th>
                                        <th>Grade Order</th>
                                        <th>Grade Color</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grades as $grade)
                                        <tr>
                                            <td>{{ $grade->id }}</td>
                                            <td>
                                                <a href="{{ url("grades/{$grade->id}") }}"
                                                    class="text-decoration-none text-dark">
                                                    {{ $grade->grade_name }}
                                                </a>
                                            </td>
                                            <td>{{ $grade->grade_group }}</td>
                                            <td>{{ $grade->grade_order }}</td>
                                            <td>
                                                <span class="badge"
                                                    style="background-color: {{ $grade->grade_color }};">
                                                    {{ $grade->grade_color }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ url("grades/{$grade->id}") }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ url("grades/{$grade->id}/edit") }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            <td>
                                                <form action="/grades/{{$grade->id}}" method="post">
                                                    @method('delete')
                                                    @csrf 
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-sm" style="background-color:red; color:white; border:none;">
                                                        <i class="bi bi-trash3"></i>
                                                    </button>                                                </form>
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

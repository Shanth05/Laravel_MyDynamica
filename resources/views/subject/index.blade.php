{{-- <x-layout>

    <h2><b>Subject Details</b></h2>

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
                        <th>Subject Name</th>
                        <th>Subject Order</th>
                        <th>Subject Color</th>
                        <th>Click</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td><a href="{{ url("subjects/{$subject->id}") }}">{{ $subject->subject_name }}</a></td>
                            <td>{{ $subject->subject_order }}</td>
                            <td>{{ $subject->color }}</td>
                            <td><a href="{{ url("subjects/{$subject->id}") }}">show</a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}

{{-- </x-layout>  --}}

<x-layout>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Subject Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    <a href='/'>Dashboard</a> / Student
                </li>
            </ol>
            <div class="container-fluid px-4">
                <br>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-warning text-white">
                        <i class="fas fa-table me-1"></i>
                       Subject Table
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatablesSimple" class="table table-hover table-striped table-bordered">
                                <thead class="table-danger">
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject Name</th>
                                        <th>Subject Order</th>
                                        <th>Subject Color</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{ $subject->id }}</td>
                                            <td>
                                                <a href="{{ url("subjects/{$subject->id}") }}"
                                                    class="text-decoration-none text-dark">
                                                    {{ $subject->subject_name }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ url("subjects/{$subject->id}") }}"
                                                    class="text-decoration-none text-dark">
                                                    {{ $subject->subject_order }}
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge" style="background-color: {{ $subject->color }};">
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ url("subjects/{$subject->id}") }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ url("subjects/{$subject->id}/edit") }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            <td>
                                                <form action="/subjects/{{$subject->id}}" method="post">
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

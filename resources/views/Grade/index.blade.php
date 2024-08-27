<x-layout>

    <h2><b>Grade Details</b></h2>

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
    </div>

</x-layout>

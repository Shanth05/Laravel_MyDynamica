<x-layout>

    <h2><b>Subject Details</b></h2>

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
    </div>

</x-layout>

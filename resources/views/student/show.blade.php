<x-layout>
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">{{ $student->last_name }} Details</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="/">Dashboard / <a href="/students"> Students </a> / {{$student->first_name}}</a></li>
            </ol>
            <div class="row">
                <!-- Grade Details Section -->
                <div class="col-xl-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <i class="fas fa-chart-area me-1"></i>
                            Student Information
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                    <tr>
                                        <td colspan="4">
                                            <div
                                                style="width:120px;height:120px; border-radious:60px; background-color:aqua">
                                                <img src="{{ Vite::asset('resources/images/student.jpg') }}" style="width:100%;height:100%;object-fit:cover"
                                                    class="card-img-center" alt="{{ $student->first_name }}">
                                            </div>
                                        </td>
                                        <td style="padding-left:10px">
                                            <p>ID&emsp;&emsp; <b>{{ $student->id }}</b></p>
                                            <p>NAME &emsp; <b>{{ $student->first_name }} {{ $student->last_name }}</b></p>
                                            <p>GRADE&emsp; <b>{{ $student->grade->grade_name }}</b></p>
                                        </td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Subject Details Section -->
                <div class="col-xl-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-success text-white">
                            <i class="fas fa-chart-bar me-1"></i>
                            Subject Details
                        </div>
                        <div class="card-body">
                                <tbody>
                                    <div class="card-body">
                                        @if (count($student->subjects) <= 0)
                                            <h3 style="text-align:center"> No Data!</h3>
                                        @endif
                                        @foreach ($student->subjects as $subject)
                                            <div class="card mb-4"
                                                style="margin-right: 10px 10px; box-shadow: 1px 1px 20px black ;border-radius:20px">
                                                <a href="/subjects/{{ $subject->id }}" class="student-list"
                                                    style="text-decoration: none">
                                                    <div class="card-body">
                                                        <li class="list-group-item"><b>{{ $subject->subject_name }}</b></li>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>









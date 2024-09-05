{{-- <x-layout>
    
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><b>{{$student->last_name}} Details</b></h1>
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
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Grade Name</th>
                                </tr>
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->first_name}}</td>
                                    <td>{{$student->last_name}}</td> 
                                    <td><a href="{{url("grades/$student->grade_id")}}">{{$student->grade->grade_name}}</td>
                        
                                </tr>
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
                            <table class="table table-striped">
                                <tr>
                                    <th>Subject Name</th>
                                    <th>Subject Order</th>
                                    <th>Subject Color</th>
                                </tr>
                            
                                @foreach ($student->subjects as $subject)
                                <tr>
                                    <td>
                                        <a href="{{url("/subjects/$subject->id")}}">{{$subject->subject_name}}</a>
                                    </td>
                                    <td>{{$subject->subject_order}}</td>
                                    <td>{{$subject->color}}</td>
                                </tr>
                            @endforeach
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>





















{{-- 
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade Name</th>
        </tr>
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td> 
            <td><a href="{{url("grades/$student->id")}}">{{$student->grade->grade_name}}</td>

        </tr>
    </table>


<h2>Subject</h2>
<table border="1" class="subjectshow">
    <tr>
        <th>Subject Name</th>
    </tr>

    @foreach ($student->subjects as $subject)
    <tr>
        <td>
            <a href="{{url("/subject/$subject->id")}}">{{$subject->subject_name}}</a>
        </td>
    </tr>
@endforeach

</table> --}}
    
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









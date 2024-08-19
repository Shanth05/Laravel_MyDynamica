<?php

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    $students=Student::all();
    return view('student.index',compact('students'));
});

Route::get('/student/{id}', function ($id) {
    $student=Student::find($id);
    return view('student.show',compact('student'));
});


Route::get('/grade', function () {
    $grades=Grade::all();
    return view('grade.index',compact('grades'));
});

Route::get('/grade/{id}', function ($id) {
    $grade=Grade::find($id);
    return view('grade.show',compact('grade'));
});

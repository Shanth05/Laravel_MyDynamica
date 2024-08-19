<?php

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

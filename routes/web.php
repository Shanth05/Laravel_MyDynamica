<?php

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
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

// Route to show all grades
Route::get('/grade', function () {
    $grades=Grade::all();
    return view('grade.index',compact('grades'));
});

Route::get('/grade/{id}', function ($id) {
    $grade=Grade::find($id);
    $students=Grade::find($id)->students;
    return view('grade.show',compact('grade','students'));
});

// Route to show all subject
Route::get('/subject', function () {
    $subjects=Subject::all();
    return view('subject.index',compact('subjects'));
});

Route::get('/subject/{id}', function ($id) {
    $subject = Subject::find($id);
    $grades = Grade::find($id)->grades;  // ithu relationship routes
    return view('subject.show', compact('subject', 'grades'));
});
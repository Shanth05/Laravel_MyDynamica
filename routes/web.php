<?php

use Illuminate\Support\Facades\Route;
use App\Models\Distinct;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', function () {
    $employees=Employee::all();
    return view('employee.index',compact('employees'));
});

Route::get('/employee/{id}', function ($id) {
    $employee=Employee::find($id);
    return view('employee.show',compact('employee'));
});

// Route to show all grades
Route::get('/distinct', function () {
    $distincts=Distinct::all();
    return view('distinct.index',compact('distincts'));
});

Route::get('/grade/{id}', function ($id) {
    $grade=Distinct::find($id);
    $employees=Distinct::find($id)->employees;
    return view('distinct.show',compact('distinct','employees'));
});

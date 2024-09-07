<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $input = $request->all();
        // $name = $request->query('page');
        // dd($name);

        $students=Student::all();
    return view('student.index',compact('students'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view ("student.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->first_name=$request ->input('first_name');
        $student->last_name=$request ->input('last_name');
        $student->grade_id=$request ->input('grade_id');

        $student->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);
        return view('student.show',compact('student'));

        //     // Fetch the student with related grade and subjects
        // $student = Student::with('grade', 'subjects')->findOrFail($id);

        // return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

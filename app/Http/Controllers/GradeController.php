<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades=Grade::all();
        return view('grade.index',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade=Grade::find($id);
        $students = Grade::find($id)->students;
        return view('grade.show',compact('grade','students'));
        

        // // Fetch the grade by ID
        // $grade = Grade::with('students', 'subjects')->findOrFail($id);

        // // Assuming $grade->students gives you the related students for that grade
        // $students = $grade->students;

        // return view('Grade.show', compact('grade', 'students'));
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

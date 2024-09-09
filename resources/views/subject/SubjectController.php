<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grade.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'grade_name' => 'required|unique:grades|max:255',
        ]);

        $grade = new Grade;
        $grade->grade_name = $request->input('grade_name');
        $grade->save();

        return redirect()->route('grades.index')->with('success', 'Grade created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade = Grade::find($id);
        return view('grade.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grade = Grade::find($id);
        return view('grade.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'grade_name' => 'required|unique:grades,grade_name,' . $id . '|max:255',
        ]);

        $grade = Grade::find($id);
        $grade->grade_name = $request->input('grade_name');
        $grade->save();

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grade = Grade::find($id);
        $grade->delete();

        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully.');
    }
}

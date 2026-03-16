<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'course' => 'required'
        ]);
        \App\Models\Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course
        ]);

        return "Student Saved Successfully";
    }
    public function index()
    {
        $students = \App\Models\Student::all();

        return view('student.index', compact('students'));
    }
    public function delete($id)
    {
        \App\Models\Student::find($id)->delete();

        return redirect('/students')->with('success','Student Deleted Successfully');
    }
    public function edit($id)
    {
        $student = \App\Models\Student::find($id);

        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'course' => 'required'
        ]);
        $student = \App\Models\Student::find($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->course = $request->course;

        $student->save();

        return redirect('/students');
    }
}

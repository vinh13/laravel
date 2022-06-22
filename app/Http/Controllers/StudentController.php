<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('id', 'desc')->paginate(10);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'math' => 'required',
            'physic' => 'required',
            'chemistry' => 'required'
        ]);

        $student = [
            "name" => $request["name"],
            "age" => $request["age"],
            "gender" => $request["gender"],
            "math" => $request["math"],
            "physic" => $request["physic"],
            "chemistry" => $request["chemistry"],
        ];
        // $student = new Student;
        // $student->name = $request->name;
        // $student->age = $request->age;
        // $student->gender = $request->gender;
        // $student->math = $request->math;
        // $student->physic = $request->physic;
        // $student->chemistry = $request->chemistry;
        // $student->save();
        
        $student = Student::create($student);

        return redirect()->route('index')
            ->with('success', 'Student created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'math' => 'required',
            'physic' => 'required',
            'chemistry' => 'required'
        ]);

        $student_update = [
            "name" => $request["name"],
            "age" => $request["age"],
            "gender" => $request["gender"],
            "math" => $request["math"],
            "physic" => $request["physic"],
            "chemistry" => $request["chemistry"]
        ];

        $student->update($student_update);

        return redirect()->route('index')
            ->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('index')
            ->with('success', 'Student deleted successfully');
    }
}

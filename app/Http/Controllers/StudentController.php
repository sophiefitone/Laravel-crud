<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students=Student::all();
        return view('students.index',['students'=>$students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students');
    }

    public function show( $id)
    {
        $student = Student::find($id);
        return view('students.show',['students'=>$student]);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.update',['students'=>$student]);
    }

    
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('students'); 
    }

    
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students');
    }
}

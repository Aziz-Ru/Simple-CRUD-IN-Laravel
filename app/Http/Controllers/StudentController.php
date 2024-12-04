<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::query()->orderBy('id','desc')->paginate(10);
        return view('student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>['required','string'],
            'age'=>[ 'required','integer','min:6','max:30'],
            'class_id'=>['required','integer','min:1','max:12'],
            'email'=>['required','email',"unique:students"],
            'phone'=>['required','string',"unique:students"],
            'address'=>['required','string'],
        ]);
    
        $stude=Student::create($data);
        return to_route('student.show',$stude);

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        return view('student.show',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
        return view('student.edit',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $data=$request->validate([
            'name'=>['required','string'],
            'age'=>[ 'required','integer','min:6','max:30'],
            'class_id'=>['required','integer','min:1','max:12'],
            'email'=>['required','email',"unique:students,email,".$student->id],
            'phone'=>['required','string',"unique:students,phone,".$student->id],
            'address'=>['required','string'],
        ]);
        $student->update($data);
        return to_route('student.show',$student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return to_route('student.index');

    }
}

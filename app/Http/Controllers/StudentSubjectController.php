<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\Student;
use App\Models\StudentSubject;
use Illuminate\Http\Request;

class StudentSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('studentsubject/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $subjects=Subject::all();
        // return view('student_subject/create', compact('subjects'));
        
    }

    public function crea($id){
         $students=Student::find($id);
        $studentSubjects=Student::find($id)->subjects; 
      
        $studentid=$id;
        $subjects=Subject::all();
        return view('studentsubject/create', compact('students','subjects','studentid','studentSubjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentid=$request->studentid;
        $subject = $request->subject;

        $student=Student::find($studentid);
        $student->subjects()->sync($subject);
        
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        $student_Subjects=Student::find($id)->subjects;
       return view('studentsubject/show',compact('student_Subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

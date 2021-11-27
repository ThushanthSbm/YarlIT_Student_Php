<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        $fna=$request->input('fname');
        $lna=$request->input('lname');
        $gen=$request->input('gender');
        $gr=$request->input('grade');
        $add=$request->input('address');
        $sub=$request->input('subject_id');

       $dob=$request->input('birthday');

        $ma=$request->input('email');
        $ph=$request->input('phone');
        $student=new Student();

        $validated = $request->validate(['birthday' =>'required|date|before:-18years',]);
        $student->first_name=$fna;
        $student->last_name=$lna;
        $student->gender=$gen;
        $student->grade_id=$gr;
        $student->address=$add;
        $student->subject_id =implode(',' ,$request->subject);
        $student->date_of_birth=$dob;
        $student->mail=$ma;
        $student->phone_id=$ph;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       $student = Student::find($id);
        // return $student;
        return view('student.show' ,compact('student'));
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
        $student = Student::find($id);
        // return $student;
        return view('student.edit' ,['student' => $student]);
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
        $fna = $request->input('fname');
        $lna = $request->input('lname');
        $lna=$request->input('lname');
        $gen=$request->input('gender');
        $gr=$request->input('grade');
        $add=$request->input('address');
        $sub=$request->input('subject_id');
        $dob=$request->input('birthday');
        $ma=$request->input('email');
        $ph=$request->input('phone');

        $student = Student::find($id);

        $student->first_name=$fna; 
        $student->last_name=$lna;
        $student->gender=$gen;
        $student->grade_id=$gr;
        $student->address=$add;
        $student->subject_id =implode(',' ,$request->subject);
        $student->date_of_birth=$dob;
        $student->mail=$ma;
        $student->phone_id=$ph;
        $student->save();

        //
        return redirect()->route('students.index');


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
        $student = Student::find($id);
        $student->delete();
        return"delete";

    }
}

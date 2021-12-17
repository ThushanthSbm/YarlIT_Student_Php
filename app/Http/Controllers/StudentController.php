<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
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
        $grades=Grade::all();
        $subjects=Subject::all();
        return view('student/create',compact('grades','subjects'));
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
        $validatedData = $request->validate([
            'fname' => ['required' ,'min:5'],
            'lname' => ['required ','min:5'],
            'gender' => ['required '],
            'address' => ['required' ,'min:5'],
            
            'birthday' => ['required','date','before:-18years'],
            'email' => ['email:rfc,dns'],
            'phone' => ['required','digits:10'],
            ]);
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

        // $validated = $request->validate(['birthday' =>'required|date|before:-18years',]);
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
        return redirect()->route('students.index')->with('message','save successfully');
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
    //    $student = Student::find($id);
    //     // return $student;
    //     return view('student.show' ,compact('student'));

    $student=Student::find($id);
        $subjects=Subject::all();
        $student_Subjects=Student::find($id)->subjects;
       return view('student.show',compact('student','subjects','student_Subjects'));
       
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
        $grades=Grade::all();
        $subjects=Subject::all();
        // return $student;
        return view('student.edit',compact('student','grades','subjects'));
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
        $sub=$request->input('subject');
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

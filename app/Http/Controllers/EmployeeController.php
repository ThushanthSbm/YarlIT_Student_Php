<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees=Employee::all();
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');
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
        $dob=$request->input('birthday');
        $bs=$request->input('bsalary');
        $employee=new Employee();
        $employee->first_name=$fna;
        $employee->last_name=$lna;
        $employee->date_of_birth=$dob;
        $employee->basic_salary=$bs;
        $employee->save();
        return redirect()->route('employees.index');
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
        $employee = Employee::find($id);
        // return $employee;
        return view('employee.show' ,compact('employee'));
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
        $employee = Employee::find($id);
        // return $employee;
        return view('employee.edit' ,['employee' => $employee]);
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
        $dob = $request->input('birthday');
        $bs = $request->input('bsalary');

        $employee = Employee::find($id);
        $employee->first_name=$fna;
        $employee->last_name=$lna;
        $employee->date_of_birth=$dob;
        $employee->basic_salary=$bs;
        $employee->save();

        return $fna."".$lna."".$dob."".$bs;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return"delete";
    }
}

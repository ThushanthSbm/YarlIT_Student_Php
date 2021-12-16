<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subjects=Subject::all();
        return view('subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('subject.create');
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
        // $validatedData = $request->validate([
           
        //  'sname' => ['required'],
          
        //     ]);

        // $data=$request->all();
        // $sna=$request->input('sname');
        // $subject=new Subject();
        // $subject->subject_name=$sna;
        // $subject->save();
        // return redirect()->route('subjects.index');

        {
            //
            //validation
            $this->validate($request,array(
                'subject_name' => 'required|',
                'color' => 'required|',
                'sub_index' => 'required|',
                'order' => 'required|numeric|max:200',
            ));
            $subject = new Subject();
    
            $subject->subject_name = $request->subject_name;
            $color = $request->color;
            $sub_index = $request->sub_index;
            $order = $request->order;
            $collection = collect(['color' => $color, 'sub_index' => $sub_index, 'order' => $order]);
    
            $extraa = $collection->toJson();
            $subject->extra = $extraa;
      
            $subject->save();
            return redirect()->route('subjects.index');
        }
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
        // $subject = Subject::find($id);
        // // return 
        // return view('subject.show' ,compact('subject'));

        $subject = Subject::find($id);
        $extra = json_decode($subject->extra);
        return view('subject.show',compact('subject','extra'));
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
        // $subject = Subject::find($id);
        // return view('subject.edit' ,['subject' => $subject]);

        $subject = Subject::find($id);
        $extra = json_decode($subject->extra);


        //return the view and pass in to the var we perviously created
        return view('subject.edit',['subject'=> $subject,'extra' => $extra]);
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
    //     $sna=$request->input('sname');
    //     $subject=new Subject();
    //     $subject->subject_name=$sna;
    //     $subject->save();
    //     return redirect()->route('subjects.index');
    // }

    $subject = Subject::find($id);
        
    $this->validate($request,array(
        'subject_name' => 'required|',
        'color' => 'required|',
        'sub_index' => 'required|',
        'order' => 'required|numeric|max:200',
    ));

   $subject->subject_name = $request->input('subject_name');

    $color = $request->color;
    $sub_index = $request->sub_index;
    $order = $request->order;
    $collection = collect(['color' => $color, 'sub_index' => $sub_index, 'order' => $order]);

    $extraa = $collection->toJson();
    $subject->extra = $extraa;

   $subject->save();
   return redirect()->route('subjects.index');
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
        $subject = Subject::find($id);
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}

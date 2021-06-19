<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student= student::all();
        return response()->view('Admin.students',['student'=>$student]);
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
            'name'=> 'required',
            
            'AcademicCode'=> 'required | min:11 | max:11 |unique:_students',
            'level'=> 'required',
            'depart'=> 'required'
        ]);
        response()->json(student::create($request->all()), 201);
        return redirect('api/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id);
        if(is_null($student)){
            return response()->json('record not found', 404);
        }
        return response()->json($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $student = student::find($id);
        return view('Admin.editStudent', ['student'=> $student]);
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            
            'AcademicCode'=> 'required | min:11 | max:11 |unique:_students',
            'level'=> 'required',
            'depart'=> 'required'
        ]);
        $student = student::find($id);
        if(is_null($student)){
            return response()->json('record not found', 404);
        }
        $student->update($request->all());
        return response()->json($student, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $student = student::destroy($id);
       if(is_null($student)){
        return response()->json('record not found', 404);
    }
        return redirect("api/students");
    }
}

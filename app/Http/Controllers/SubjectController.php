<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = subject::all();
        return response()->view('Admin.subjects', ['subject'=> $subject]);
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
            'level'=> 'required',
            'depart'=> 'required'
        ]);
        subject::create($request->all());
        return redirect('subjects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub = subject::find($id);
        if(is_null($sub)){
            return response()->json('record not found', 404);
        }
        return $sub;
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
        $subject = subject::find($id);
        return view('Admin.editSubject', ['subject'=> $subject]);
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'level'=> 'required',
            'depart'=> 'required'
        ]);
        $sub = subject::find($id);
        if(is_null($sub)){
            return response()->json('record not found', 404);
        }
        $sub->update($request->all());
        return $sub;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $sub = subject::destroy($id);
       if(is_null($sub))
       {
        return response()->json('record not found', 404);
       }
       return redirect('Admin.subjects');
    }
}

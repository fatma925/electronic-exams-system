<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors= professor::all();
        return response()->json($professors);
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
            
            'email'=> 'required | email |unique:professors'
        ]);
        response()->json(professor::create($request->all()), 201);
        return redirect('api/professors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prof = professor::find($id);
        if(is_null($prof)){
            return response()->json('record not found', 404);
        }
        return response()->json($prof);
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
        $prof = professor::find($id);
        return view('Admin.editProfessor', ['prof'=> $prof]);
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required | email |unique:professors'
        ]);
        $prof = professor::find($id);
        if(is_null($prof)){
            return response()->json('record not found', 404);
        }
        $prof->update($request->all());
        return response()->json($prof, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $prof = professor::destroy($id);
       if(is_null($prof)){
        return response()->json('record not found', 404);
    }
        return redirect("api/professors");
    }
}

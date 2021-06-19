<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\depart;

class departController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $depart = depart::all();
        return response()->view('Admin.depart',['depart'=>$depart]);
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
        $request->validate([
            'name'=> 'required|unique:departs',
        ]);
        response()->json(depart::create($request->all()),201);
        return redirect('api/departs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depart = depart::find($id);
        if(is_null($depart)){
            return response()->json('record not found', 404);
        }
        return response()->json($depart);
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
        $depart = depart::find($id);
        return view('Admin.editDepart', ['depart'=> $depart]);
        
    }
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name'=> 'required|unique:departs',
            'head_id'=> 'required'
        ]);
        $depart = depart::find($id);
        if(is_null($depart)){
            return response()->json('record not found', 404);
        }
        $depart->update($request->all());
        return response()->json($depart, 200);
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
        $depart = depart::destroy($id);
        if(is_null($depart)){
            return response()->json('record not found', 404);
        }
        return redirect("api/departs");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\level;
class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level = level::all();
        return response()->view('Admin.levels', ['levels'=> $level]);
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
            'head_id'=> 'required'
        ]);
        level::create($request->all());
        return redirect('levels');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $level = level::find($id);
        if(is_null($level)){
            return response()->json('record not found', 404);
        }
        return response()->json($level);

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
        $level = level::find($id);
        return view('Admin.editLevel', ['level'=> $level]);
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'head_id'=> 'required'
        
        ]);
        $level = level::find($id);
        if(is_null($level)){
            return response()->json('record not found', 404);
        }
        $level->update($request->all());
        return response()->json($level, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $level = level::destroy($id);
        if(is_null($level)){
            return response()->json('record not found', 404);
        }
        return redirect("api/levels");
    }
}

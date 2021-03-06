<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\level;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = level::all();
        return response()->json($levels, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'level_name'=> 'required|unique:_levels',
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->getMessageBag(), "success"=>FALSE);
            return $response;
        }
        else{
            // create new record
            $level = new level();
            $level->level_name = $request->input('level_name');
            $level->save();
            return response()->json($level,200);
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
        $name = $level->level_name;
        return view('Admin.editLevel', ['name'=> $name, 'id'=>$id]);
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'level_name'=> 'required',
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
        return response()->json("deleted ");
    }
}

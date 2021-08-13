<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\depart;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Validator;

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
        $departs = depart::all();
       
        return response()->json($departs);
        // view('Admin.depart',['depart'=>$depart]);
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
            'depart_name'=> 'required|unique:_departs',
            'headId' => 'required'
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->getMessageBag(), "success"=>FALSE);
            return $response;
        }
        else{
            // create new record
            $depart = new depart();
            $depart->depart_name = $request->input('depart_name');
            $depart->headId = $request->input('headId');
            $depart->save();
            return response()->json($depart,200);
        }
        //
        // $request->validate([
        //     'depart_name'=> 'required|unique:departs',
        // ]);
        // response()->json(depart::create($request->all()),201);
        // //return redirect('api/departs');
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
        $name =$depart->depart_name;
        $head =$depart->head_id;
       
         return view('Admin.editDepart', ['name'=> $name, 'head'=> $head ,'id'=>$id]);
        
    }
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'depart_name'=> 'required|unique:_departs',
            'headId'=> 'required'
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
        return response()->json("department deleted",200);
    }
}

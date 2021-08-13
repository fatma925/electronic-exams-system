<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chapter;
use Illuminate\Support\Facades\Validator;
use App\Models\subject;
class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chapters = chapter::all();
        return response()->json($chapters, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=> 'required|unique:chapters',
            'subId' => 'required'
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->getMessageBag(), "success"=>FALSE);
            return $response;
        }
        else{
            // create new record
            $chapter = new chapter();
            $chapter->title = $request->input('title');
            $chapter->subId = $request->input('subId');
            $chapter->chTitle = $request->input('chTitle');
            $chapter->save();
            return response()->json($chapter,201);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chapter = chapter::destroy($id);
        if(is_null($chapter)){
            return response()->json('record not found', 404);
        }
        return response()->json("chapter deleted",200);
    }
}

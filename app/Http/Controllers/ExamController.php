<?php

namespace App\Http\Controllers;

use App\Models\exam;
use App\Models\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function getSubId($subTitle){
        $sub= DB::table('_subjects')->where('subTitle', $subTitle)->first();
        return $sub->id;
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
        $validator = Validator::make($request->all(),[
            'start'=> 'required',
            'end'=> 'required',
            'allQs'=> 'required',
            'hardQs'=> 'required',
            'midQs'=> 'required',
            'easyQs'=> 'required',
            'subTitle'=> 'required',
            'date'=> 'required',
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->getMessageBag(), "success"=>FALSE);
            return $response;
        }
        else{
            // create new record
            $subTitle = $request->input('subTitle');
            $sub= DB::table('_subjects')->where('subTitle', $subTitle)->first();
            $subId = $sub->id;
            $ex = new exam();
            $ex->start = $request->input('start');
            $ex->end = $request->input('end');
            $ex->allQs = $request->input('allQs');
            $ex->hardQs = $request->input('hardQs');
            $ex->midQs = $request->input('midQs');
            $ex->easyQs = $request->input('easyQs');
            $ex->subTitle = $subId;
            $ex->date = $request->input('date');
            $ex->save();
            return response()->json($ex,200);
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
        //
    }
}

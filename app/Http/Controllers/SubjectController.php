<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\depart;
use App\Models\professor;
use App\Models\level;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator; 

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = DB::table('_subjects')
            ->join('_levels', '_subjects.levelIdId', '=', '_levels.id')
            ->join('_departs', '_subjects.departId', '=', '_departs.id')
            ->join('professors', '_subjects.profId', '=', 'professors.id')
            ->select('_subjects.*', '_levels.level_name', '_departs.depart_name', 'professors.prof_name')
            ->get();
        
        return response()->json($subjects,200);
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
            'subTitle'=> 'required|unique:_subjects',
            'code' => 'required',
            'prof' => 'required',
            'level' => 'required',
            'depart' => 'required'
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->getMessageBag(), "success"=>FALSE);
            return $response;
        }
        else{
            // create new record
            $sub = new subject();
            $sub->subTitle = $request->input('subTitle');
            $sub->subCode = $request->input('code');
            $sub->profId = $request->input('prof');
            $sub->levelIdId = $request->input('level');
            $sub->departId = $request->input('depart');
            $sub->save();
            return response()->json($sub,200);
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
        $subject = DB::table('_subjects')
            ->join('_levels', '_subjects.levelIdId', '=', '_levels.id')
            ->join('_departs', '_subjects.departId', '=', '_departs.id')
            ->join('professors', '_subjects.profId', '=', 'professors.id')
            ->select('_subjects.*', '_levels.level_name', '_departs.depart_name', 'professors.prof_name')
            ->where("_subjects.id", '=', $id)
            ->get();
           
        return view('Admin.editSubject', ['subject'=> $subject, 'id'=>$id]);
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'subTitle'=> 'required',
            'subCode'=> 'required',
            'profId'=> 'required',
            'levelIdId'=> 'required',
            'departId'=> 'required',
            ]);

        $sub = subject::find($id);
        if(is_null($sub)){
            return response()->json('record not found', 404);
        }
        $sub->update($request->all());
        return response()->json($sub);
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
       return response()->json('deleted successfully', 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professor;
use App\Models\depart;
use App\Models\level;
use Illuminate\Support\Facades\DB;
use App\Models\student;
use App\Models\subject;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function getDeparts()
    {
        $depart = depart::all();
        return response()->view('Admin.depart',['depart'=>$depart]);
    }
    public function getLevels()
    {
        $level = level::all();
        return response()->view('Admin.levels',['level'=>$level]);
    }

    public function getProfs()
    {
        $prof= professor::all();
        return response()->view('Admin.profs',['prof'=>$prof]);
    }
    public function getStudents()
    {
        $student= student::all();
        return response()->view('Admin.students',['student'=>$student]);
    }
    public function getSubjects()
    {
        $subject = DB::table('_subjects')
            ->join('professors', '_subjects.profId', '=', 'professors.id')
            ->join('_departs', '_subjects.departId', '=', '_departs.id')
            ->join('_levels', '_subjects.levelIdId', '=', '_levels.id')
            ->get();
        
        return response()->view('Admin.subjects',['subject'=>$subject]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddDepart(Request $request)
    {
        //
        response()->json(depart::create($request->all()),201);
        return redirect('api/departs');
    }
    public function AddSub(Request $request)
    {
        //
        response()->json(subject::create($request->all()), 201);
        return redirect('api/subjects');
    }
    public function AddLevel(Request $request)
    {
        //
        response()->json(level::create($request->all()), 201);
        return redirect('api/levels');
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
    public function editDepart(Request $request, $id)
    {
        return view('Admin.editDepart');
        
    }
    public function updateDepart(Request $request, $id)
    {
        
        $depart = depart::find($id);
        if(is_null($depart)){
            return response()->json('record not found', 404);
        }
        $depart->update($request->all());
        return response()->json($depart, 200);

    }

    public function editLevel(Request $request, $id)
    {
        return view('Admin.editLevel');
        
    }
    public function updateLevel(Request $request, $id)
    {
        
        $level = level::find($id);
        $level->update($request->all());
        return response()->json($level, 200);

    }

    public function editStudent(Request $request, $id)
    {
        return view('Admin.editStudent');
        
    }
    public function updateStudent(Request $request, $id)
    {
        
        $st = student::find($id);
        $st->update($request->all());
        return response()->json($st, 200);

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

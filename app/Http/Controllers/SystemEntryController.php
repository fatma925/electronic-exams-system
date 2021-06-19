<?php

namespace App\Http\Controllers;

use App\Models\depart;
use App\Models\level;
use App\Models\professor;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class SystemEntryController extends Controller
{
    
    public function profregister(Request $request)
    {
        //
        $validate = $request->validate([
            'name'=> 'required',
            'pass'=> 'required | min:8',
            'email'=> 'required | email |unique:professors'
        ]);

        $prof = professor::create([
            'prof_name' => $validate['name'],
            'password' => bcrypt($validate['pass']),
            'email' => $validate['email']

        ]);

        $token = $prof->createToken("appToken")->plainTextToken;
        $response = [
            'prof' => $prof,
            'token' => $token
        ];
        return response($response, 201);
       
    }


    public function profLogin(Request $request)
    {
        session_start();
        $user = $request->name;
	    $pass =$request->pass;
        session()->put('user',$user);
        
        $data = DB::table('professors')
        ->where("prof_name", "=", $user)
        ->get();

        if(!empty($data[0])){
        $name = $data[0]->prof_name;
        $id = $data[0]->id;
        $password = $data[0]->password;
        $groubID = $data[0]->groubID;
        session()->put('id',$id);
        if($name === $user && password_verify($pass, $password))
        {

        	if($groubID == 1)
        	{
        		return redirect("api/departs");
           
        	}
        	else if($groubID == 0)
        	{
                session()->put('isStart',true);
        		return view('professors.chapter');
        	}
        }
        else
        {
        	return view('App.prof-login');
        }
    }
        else
        {
        	return view('App.prof-register');
        }
        
    }

    public function studentRegister(Request $request)
    {
        //
        $request->validate([
            'name'=> 'required',
            'pass'=> 'required | min:8',
            'AcademicCode'=> 'required | min:11 | max:11 |unique:_students',
            'level'=> 'required',
            'depart'=> 'required'
        ]);
        $st = new student();
        $st->name = $request->name;
        $st->AcademicCode = $request->code;
        $st->password = Hash::make($request->pass);
        $st->level = $request->level;
        $st->depart = $request->depart;
        $st->save();
        return view('App.student-login');
    }


    public function studentLogin(Request $request)
    {
        session_start();
        $user = $request->name;
	    $pass =$request->pass;
        session()->put('user',$user);
        
        $data = DB::table('_students')
        ->where("name", "=", $user)
        ->get();

        if(!empty($data[0])){
        $name = $data[0]->name;
        $id = $data[0]->id;
        $password = $data[0]->password;
        //$groubID = $data[0]->groubID;
        session()->put('id',$id);
        if($name === $user && password_verify($pass, $password))
        {

        		return view('students.question-bank');
        	
        }
        else
        {
        	return view('App.student-login');
        }
    }
        else
        {
        	return view('App.student-register');
        }
        
    }

    public function getData()
    {
        $departs = depart::all();
        $levels = level::all();
        return view('App.student-register',["departs"=>$departs, "levels"=>$levels]);


    }
}

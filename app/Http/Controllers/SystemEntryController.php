<?php

namespace App\Http\Controllers;

use App\Models\depart;
use App\Models\level;
use App\Models\professor;
use App\Models\User;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class SystemEntryController extends Controller
{
    
    public function profregister(Request $request)
    {
        //
        $validate = $request->validate([
            'name'=> 'required',
            'pass'=> 'required | min:8',
            'email'=> 'required | email |unique:users'
        ]);

        $prof = User::create([
            'name' => $validate['name'],
            'password' => bcrypt($validate['pass']),
            'email' => $validate['email']

        ]);

        $token = $prof->createToken("appToken")->plainTextToken;
        $response = [
            'prof' => $prof,
            'token' => $token
        ];
        return response(redirect('api/departs'));
       
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return [
            'message' => 'logged out'
        ];

    }


    public function profLogin(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required | string',
            'pass' => 'required | min:8'
        ]);
        $user = professor::where('email', $fields['email'])->first();
        if(!$user || !Hash::check($fields['pass'], $user->password))
        {
            return response(['message'=>'bad creds'], 201);
        }
        $token = $user->createToken("appToken")->plainTextToken;
        $response = [
            'professor' => $user,
            'token' => $token
        ];

        return redirect('levels');
        }

        


    public function studentRegister(Request $request)
    {
        //
        $fields = $request->validate([
            'name'=> 'required',
            'pass'=> 'required | min:8',
            'AcademicCode'=> 'required | min:11 | max:11 |unique:_students',
            'level'=> 'required',
            'depart'=> 'required'
        ]);
        $stud = student::create([
            'name' => $fields['name'],
            'password' => bcrypt($fields['pass']),
            'level' => $fields['level'],
            'depart' => $fields['depart'],
            'AcademicCode' => $fields['AcademicCode']

        ]);

        $token = $stud->createToken("appToken")->plainTextToken;
        $response = [
            'student' => $stud,
            'token' => $token
        ];
        return response($response, 201);
        
        //return view('App.student-login');
    }


    public function studentLogin(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required | string',
            'pass' => 'required | min:8'
        ]);
        
        $user = student::where('name', $fields['name'])->first();
        if(!$user || !Hash::check($fields['pass'], $user->password))
        {
            return response(['message'=>'bad creds'], 201);
        }
        $token = $user->createToken("appToken")->plainTextToken;
        $headers = $request->headers->all();
        $response = [
            'student' => $user,
            'token' => $token
        ];
       
            return redirect('api/departs');
        
        

        //return response($response, 201);
        
    }

    public function getData()
    {
        $departs = depart::all();
        $levels = level::all();
        return view('App.student-register',["departs"=>$departs, "levels"=>$levels]);


    }
}

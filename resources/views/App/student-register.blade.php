@extends('App.header')
@section('title', 'student register')
@section('subtitle', 'GetYourExam-login')
@section('content')
         <form method="POST" action="api/studentRegister"> 
             @csrf
             <input type="text" placeholder="full name" name="name" required><br>
             <input type="password" placeholder="password" name="pass" required><br>
             <input type="number" placeholder="academic Id" name="AcademicCode" required><br>
             <select type="text" placeholder="level" name="level" required><br>
                
                @foreach ($levels as $item)
                    <option>{{$item->name}}</option>
                @endforeach

             </select><br>
             <select type="text" placeholder="Department" name="depart" required>

                @foreach ($departs as $item)
                    <option>{{$item->name}}</option>
                @endforeach
                
             </select><br>
             <input type="submit"  class="sub" value="Sign Up">
         </form>
        <a href="student_login">already registered ?</a>
     </div>
     
  @endsection
@extends('App.header')
@section('title', 'student register')
@section('subtitle', 'GetYourExam-login')
@section('content')
         <form> 
             <input type="text" placeholder="full name"><br>
             <input type="password" placeholder="password"><br>
             <input type="text" placeholder="level"><br>
             <input type="text" placeholder="Department"><br>
             <input type="submit"  class="sub" value="Sign Up">
         </form>
        <a href="student_login">already registered ?</a>
     </div>
     
  @endsection
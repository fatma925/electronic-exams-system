@extends('App.header')
@section('title', 'professor register')
@section('subtitle', 'GetYourExam-SignUp')
@section('content')
         <form> 
             <input type="text" placeholder="full name"><br>
             <input type="password" placeholder="password"><br>
             <input type="text" placeholder="priviledge"><br>
             <input type="submit"  class="sub" value="Sign Up">
         </form>
        <a href="prof_login">registered before ?</a>
     </div>
@endsection
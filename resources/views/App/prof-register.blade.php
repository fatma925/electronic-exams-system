@extends('App.header')
@section('title', 'professor register')
@section('subtitle', 'GetYourExam-SignUp')
@section('content')
         <form action="prof-register" method="POST"> 

             @csrf

             <input type="text" placeholder="full name" name="name" required><br>
             <span style="color: red;">@error ('name') {{$message}} @enderror</span>
             <input type="email" placeholder="email" name="email" required><br>
             <span style="color: red;">@error ('email') {{$message}} @enderror</span>
             <input type="password" placeholder="password" name="pass" required><br>
             <span style="color: red;">@error ('pass') {{$message}} @enderror</span>
             <input type="text" placeholder="priviledge" name="priv"><br>
             <input type="submit"  class="sub" value="Sign Up">
         </form>
        <a href="prof_login">registered before ?</a>
     </div>
@endsection
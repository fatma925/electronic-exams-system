@extends('App.header')
@section('title', 'professor login')
@section('subtitle', 'GetYourExam-login')
@section('content')

<form method="POST" action="prof-login"> 
  @csrf
  <input type="text" placeholder="full name" name="name"><br>
  <input type="password" placeholder="password" name="pass"><br>
  <input type="submit" class="sub" value="LogIn">
</form>

<a href="prof_register">don't have an account?</a>
</div>

@endsection

     
@extends('App.header')
@section('title', 'student login')
@section('subtitle', 'GetYourExam-login')
@section('content')
<form action="api/studentLogin" method="POST">
  @csrf 
  <input type="text" placeholder="full name" name="name"><br>
  <input type="password" placeholder="password" maxlength="12" name="pass"><br>
  <input type="submit"  class="sub" value="LogIn">
</form>
<a href="student_register">don't have an account?</a>
</div>


@endsection
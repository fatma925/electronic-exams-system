@extends('App.header')
@section('title', 'student login')
@section('subtitle', 'GetYourExam-login')
@section('content')
<form> 
  <input type="text" placeholder="full name"><br>
  <input type="text" placeholder="academic id" maxlength="12"><br>
  <input type="submit"  class="sub" value="LogIn">
</form>
<a href="student_register">don't have an account?</a>
</div>


@endsection
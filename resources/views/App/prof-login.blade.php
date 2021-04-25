@extends('App.header')
@section('title', 'professor login')
@section('subtitle', 'GetYourExam-login')
@section('content')

<form> 
  <input type="text" placeholder="full name"><br>
  <input type="password" placeholder="password"><br>
  <input type="submit" class="sub" value="LogIn">
</form>

<a href="prof_register">don't have an account?</a>
</div>

@endsection

     
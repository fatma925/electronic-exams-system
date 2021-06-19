@extends('Admin.header')
@section('title', 'Departments')
@section('subtitle', 'Departments')
 
@section('content')
   
<div class="add small">
<form action="{{url('api/departs')}}" action="put">
    @csrf
<h4>Add new depart<span>ment</span></h4>
<input type="text" name="depart">
<input type="number" name="head_id">
<input type="submit" class="btn btn-primary" value="Add">
</form>
</div>

@endsection
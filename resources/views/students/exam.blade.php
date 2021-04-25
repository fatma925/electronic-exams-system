@extends('students.header')
@section('title', 'Exam')

@section('content')
    

<div class="exam">
<header>Start Your Exam Now</header>
<div class="middle">
    <span class="e-left">
        <div class="text-center e-box">Question : 1</div><br><br>
        <h5>Q1: what is meaning of software construction?</h5>
    </span>
    <span class="e-right">
        <div class="text-center">Options:</div><br><br>
        <div class="text-left">
            <input type="radio" name="answer">A)</div><br>
        <div class="text-left">
            <input type="radio" name="answer">B)</div><br>
        <div class="text-left">
            <input type="radio" name="answer">C)</div><br>
        <div class="text-left">
            <input type="radio" name="answer">D)</div><br>
    </span>
</div>
<button class="btn btn-primary save">save and next</button><br><br>
<div class="nots">
    Note that: if you don't submit your answer before the time of question , the next question will start and you will miss the mark of previous question 
</div>
</div>

@endsection
@extends('students.header')
@section('title', 'question bank')

@section('content')
     <div class="ques">
         <header>Question Bank:MCQ</header>
         <div class="middle">
             <div class="row">
                 <span class="left">
                     <h5>what is meaning of software construction?</h5>
                     <input type="radio" name="answer">A)
                     <input type="radio" name="answer">B)
                     <input type="radio" name="answer">C)
                     <input type="radio" name="answer">D)
                </span>
                <sapn class="right">
                    <h6>Correct Answer</h6>
                    <input type="radio" name="correct" checked disabled>A)
                 </sapn>
             </div>
             <div class="row">
                 <span class="left">
                     <h5>what is meaning of software construction?</h5>
                     <input type="radio" name="answer">A)
                     <input type="radio" name="answer">B)
                     <input type="radio" name="answer">C)
                     <input type="radio" name="answer">D)
                </span>
                <sapn class="right">
                    <h6>Correct Answer</h6>
                    <input type="radio" name="correct" checked disabled>A)
                 </sapn>
             </div>
         </div>
         <header>Question Bank:True/False</header>
         <div class="middle">
             <div class="row">
                 <span class="left true">
                 <h5>what is meaning of software construction?</h5>
                 <input type="radio" name="answer">True
                 <input type="radio" name="answer">False
                </span>
                <sapn class="right">
                    <h6>Correct Answer</h6>
                    <input type="radio" name="correct" checked disabled>True
                 </sapn>
            </div>
        </div>
     </div>
      
    @endsection
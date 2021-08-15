@extends('professors.header')
@section('title', 'exam')
{{-- @section('subtitle') --}}

{{-- @endsection --}}
@section('content')

<div class="exam">
    <header style="width: 100%">add exam details</header>
<div class="form-group">
    <form id="add_exam"><br>
        <label class="lbl" style="margin-right: 50px" >Start time of exam:</label>
        <input type="time" name="stime" id="start" ><hr>
        <label class="lbl" style="margin-right: 50px">End time of exam:</label>
        <input type="time" name="etime" id="end"><hr>
        <label class="lbl" style="margin-right: 50px">date of exam:</label>
        <input type="date" name="etime" id="date" style="width: 140px"><hr>
        <label class="lbl" style="margin-right: 50px">Number of exam question:</label>
        <input type="number" name="e-question" id="all"><hr>
        <label class="lbl" style="margin-right: 50px">Number of Hard questions:</label>
        <input type="number" name="ch-question" id="hard"><hr>
        <label class="lbl" style="margin-right: 50px">Number of Easy questions :</label>
        <input type="number" name="h-question" id="easy"><hr>
        <label class="lbl" style="margin-right: 50px">Number of intermediate questions :</label>
        <input type="number" name="i-question" id="mid"><hr>
        <label class="lbl" style="margin-right: 50px" >subject :</label>
        <select class="form-select sub" aria-label="Default select example" style="font-size: 17px" id="subtitle">
        <option selected disabled>choose subject</option>         
        </select><hr>
        <br>
        <input type="submit" value="submit your exam" class="exam-sub" style="margin-left: 14px;width: 63%" onclick="addexam()">
    </form>
</div>
</div>
@endsection

@section('jq')
  <script>
    $(document).ready(function(){

// function to add department
$("#add_exam").on("submit", function(e){
    e.preventDefault();
    let subtitle = $("#subtitle").val();
    let start = $("#start").val();
    let end = $("#end").val();
    let all = $("#all").val();
    let hard = $("#hard").val();
    let mid = $("#mid").val();
    let easy = $("#easy").val();
    let date = $("#date").val();
    addExam(subtitle, start, end, all, hard, mid, easy, date);

});

function addExam(subtitle, start, end, all, hard, mid, easy, date){
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/exams',
        data: {subTitle : subtitle, start: start,end: end, date:date, allQs:all, midQs:mid,
               hardQs:hard, easyQs:easy ,  _token: '{!! csrf_token() !!}'}
    }).done(function(ex){
        alert("exam # " + ex.id + " added");
        location.reload();

    });
}

});

  </script>
@endsection
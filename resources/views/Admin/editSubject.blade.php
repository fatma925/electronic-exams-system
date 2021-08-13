@extends('Admin.header')
@section('title', 'subjects')
@section('subtitle', 'update subject')
 
@section('content')
        {{-- <div class="add small"> --}}
            <form id="updateSub">
                @csrf
             @foreach ($subject as $sub)
                 
             
            <input type="text" id="sub_name" class="form-control" placeholder="{{$sub->subTitle}}"><br>
            <input type="text" id="sub_code" class="form-control" placeholder="{{$sub->subCode}}"><br>
            <input type="number" id="prof" class="form-control" placeholder="{{$sub->prof_name}}"><br>
            <input type="number" id="depart" class="form-control" placeholder="{{$sub->depart_name}}"><br>
            <input type="number" id="level" class="form-control" placeholder="{{$sub->level_name}}"><br>
            <input type="submit" class="btn btn-primary" value="Add"><br>
            @endforeach()
            </form>
            </div>
     {{-- </div> --}}
     @endsection
         {{-- <table class="table">
             <thead>

            @yield('content') --}}
@section('jq')
    <script type="text/javascript">
                $(document).ready(function(){

//function to add department
$("#updateSub").on("submit", function(e){
    e.preventDefault();
    let sub_name = $("#sub_name").val();
    let sub_code = $("#sub_code").val();
    let prof = $("#prof").val();
    let level = $("#level").val();
    let depart = $("#depart").val();
    let id = {{$id}};
    alert(sub_name);
    alert(id);
    addSub(sub_name, sub_code, prof, level, depart, id);

});

function addSub(sub_name, sub_code, prof, level, depart, id){
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/subjects/'+id,
        data: { _method: "PUT" ,subTitle : sub_name, subCode: sub_code, profId: prof,
                levelIdId: level, departId: depart, id: id,  _token: '{!! csrf_token() !!}'}
    }).done(function(sub){
        alert("subject # " + sub.id + " updated");
        location.reload();

    });
}
});
                </script>
@endsection
@extends('Admin.header')
@section('title', 'professors')
@section('subtitle', 'update professor')
 
@section('content')
        {{-- <div class="add small"> --}}
            <form id="updateProf">
                @csrf
             
            <input type="text" id="prof_name" class="form-control" placeholder="{{$name}}"><br>
            <input type="submit" class="btn btn-primary" value="Add"><br>
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

// function to add department
$("#updateProf").on("submit", function(e){
    e.preventDefault();
    let prof_name = $("#prof_name").val();
    let id = {{$id}};
    alert(prof_name);
    alert(id);
    addLevel(prof_name,id );

});

function addLevel(prof_name, id){
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/levels/'+id,
        data: { _method: "PUT" ,prof_name : prof_name, _token: '{!! csrf_token() !!}'}
    }).done(function(level){
        alert("depart # " + prof.id + " updated");
        location.reload();

    });
}
});
                </script>
@endsection
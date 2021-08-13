@extends('Admin.header')
@section('title', 'Departments')
@section('subtitle', 'update level')
 
@section('content')
        {{-- <div class="add small"> --}}
            <form id="updateLevel">
                @csrf
             
            <input type="text" id="level_name" class="form-control" placeholder="{{$name}}"><br>
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
$("#updateLevel").on("submit", function(e){
    e.preventDefault();
    let level_name = $("#level_name").val();
    let id = {{$id}};
    alert(level_name);
    alert(id);
    addLevel(level_name,id );

});

function addLevel(level_name, id){
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/levels/'+id,
        data: { _method: "PUT" ,level_name : level_name, _token: '{!! csrf_token() !!}'}
    }).done(function(level){
        alert("depart # " + level.id + " updated");
        location.reload();

    });
}
});
                </script>
@endsection
            
@extends('Admin.header')
@section('title', 'students')
@section('subtitle', 'update student')
 
@section('content')
        {{-- <div class="add small"> --}}
            <form id="updateStd">
                @csrf
             
            <input type="text" id="std_name" class="form-control" placeholder="{{$name}}"><br>
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
$("#updateStd").on("submit", function(e){
    e.preventDefault();
    let std_name = $("#std_sub").val();
    let id = {{$id}};
    alert(std_name);
    alert(id);
    addStd(std_name,id );

});

function addStd(std_name, id){
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/levels/'+id,
        data: { _method: "PUT" ,std_name : std_name, _token: '{!! csrf_token() !!}'}
    }).done(function(student){
        alert("student # " + std.id + " updated");
        location.reload();

    });
}
});
                </script>
@endsection
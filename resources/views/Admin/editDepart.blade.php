@extends('Admin.header')
@section('title', 'Departments')
@section('subtitle', 'update Department')
 
@section('content')
        {{-- <div class="add small"> --}}
            <form id="updateDepart">
                @csrf
             
            <input type="text" id="depart_name" class="form-control" placeholder="{{$name}}"><br>
            <input type="number" id="headId" class="form-control" placeholder='{{$head}}'><br>
            
            
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
$("#updateDepart").on("submit", function(e){
    e.preventDefault();
    let headId = $("#headId").val();
    let depart_name = $("#depart_name").val();
    let id = {{$id}};
    alert(depart_name);
    alert(headId);
    alert(id);
    addDepart(depart_name, headId,id );

});

function addDepart(depart_name, headId,id){
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/departs/'+id,
        data: { _method: "PUT" ,depart_name : depart_name, headId: headId,  _token: '{!! csrf_token() !!}'}
    }).done(function(depart){
        alert("depart # " + depart.id + " updated");
        location.reload();

    });
}
});
                </script>
@endsection
            
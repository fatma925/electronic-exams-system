@extends('Admin.header')
@section('title', 'Levels')
@section('subtitle', 'Levels')
 
@section('content')
<table class="table">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
</tr>
</thead>
<tbody id="lev">
{{-- @foreach ($level as $level)
<tr>
<td>{{$level->id}}</td>
<td>{{$level->level_name}}</td>
<td><a href="#" class="btn btn-primary">edit</a></td>
<td><a href="#" class="btn btn-danger">delete</a></td>

</tr>
@endforeach --}}
                 
               
</tbody>  
</table> 

</div>
<div class="add small">
<form id="add_level">
    @csrf
    <h4>Add new level </h4><br>
    <input type="text" id="level" placeholder="level name" class="form-control">
    <input type="submit" class="btn btn-primary" value="Add">
</form>
</div>
@endsection
@section('jq')
<script >
    
$(document).ready(function(){
    getlevels();

    // add new level
$("#add_level").on("submit", function(e){
e.preventDefault();
let level_name = $("#level").val();
alert(typeof level_name);
addLevel(level_name);
});

function addLevel(level_name){
    $.ajax({
        method:'POST',
        url:'http://127.0.0.1:8000/api/levels',
        data: {level_name: level_name, _token: '{!! csrf_token() !!}'}
    }).done(function(level){
        alert(level.id);
        alert("level #" + level.id + " added successfully");
        location.reload();
    });
}

// function to get all levels
function getlevels(){
    $.ajax({
        url:'http://127.0.0.1:8000/api/levels'
    }).done(function(levels){
let output = '';
$.each(levels, function(key, level){
        output += `
        <tr><td> ${level.id}</td>
        <td>${level.level_name}</td>
    
        <td><a href="#" class="btn btn-danger deleteLevel" data-id=${level.id}>
        delete</a></td>
        <td><a href="{{ url('api/levels/ ${level.id}/edit')}}" class="btn btn-primary" data-id=${level.id}>
        edit</a></td>
        </tr>
        `;
    //alert(key + ":" + depart.depart_name)
    });
$('#lev').append(output);
    });
    }

    // delete level
    $('body').on('click', '.deleteLevel', function(e){
        e.preventDefault();
        let id = $(this).data('id');
        alert(id);
        deleteLevel(id);
    });
    function deleteLevel(id){
        $.ajax({
            method: 'POST',
            url: 'http://127.0.0.1:8000/api/levels/'+id,
            data: {_method: 'DELETE', _token: '{!! csrf_token() !!}'}
        }).done(function(level){
            alert("deleted successfully");
            location.reload();
        });
    }

});
</script>
@endsection
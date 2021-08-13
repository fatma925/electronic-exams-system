@extends('Admin.header')
@section('title', 'Subjects')
@section('subtitle', 'Subjects')
 
@section('content')
<table class="table">
  <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">SubCode</th>
              <th scope="col">Level</th>
              <th scope="col">Department</th>
              <th scope="col">Professor</th>
            </tr>
          </thead>
          <tbody id="sub">
            {{-- @foreach ($subject as $sub)
            <tr>
              <th scope="row">{{$sub->id}}</th>
              <td>{{$sub->subTitle}}</td>
              <td>{{$sub->subCode}}</td>
              <td> {{$sub->level_name}}</td>
              <td>{{$sub->depart_name}}</td>
              <td>{{$sub->prof_name}}</td>
              <td><a href="#" class="btn btn-primary">edit</a></td>
              <td><a href="#" class="btn btn-danger">delete</a></td>
         </tr>
            @endforeach --}}
            
          </tbody>
        </table>
     </div>
     <div class="add">
         <form id="add_subject">
             <div><h4>Add new subject</h4></div>
             <div>
                 <input type="text" id="name" placeholder="Name"><br>
                 <input type="text" id="code" placeholder="Subcode"><br>
                 <input type="number" id="level" placeholder="Level ID" class="form-control"><br>
                 <input type="number" id="depart" placeholder="Department ID" class="form-control"><br>
                 <input type="number" id="prof" placeholder="Professor ID" class="form-control">
                 <input type="submit" class="btn btn-primary" value="Add">
             </div>
         </form>
    </div>
     
    @endsection

    @section('jq')
    <script >
$(document).ready(function(){
    getSubjects();

// function to add department
$("#add_subject").on("submit", function(e){
    e.preventDefault();
    let name = $("#name").val();
    let level = $("#level").val();
    let depart = $('#depart').val();
    let code = $('#code').val();
    let prof = $('#prof').val();

    alert(name);
    // alert(headId);
    addSubject(name, level, depart, code, prof);

});

function addSubject(name, level, depart, code, prof){
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/subjects',
        data: {subTitle : name, level: level, depart:depart, code: code, prof:prof, _token: '{!! csrf_token() !!}'}
    }).done(function(sub){
        alert("subject #" + sub.id + " added");
        location.reload();

    });
}

// function to get all departments
function getSubjects(){
    $.ajax({
        url:'http://127.0.0.1:8000/api/subjects'
    }).done(function(subjects){
let output = '';
$.each(subjects, function(key, sub){
        output += `
        <tr><td> ${sub.id}</td>
        <td>${sub.subTitle}</td>
        <td>${sub.subCode}</td>
        <td>${sub.level_name}</td>
        <td>${sub.depart_name}</td>
        <td>${sub.prof_name}</td>
        <td><a href="#" class="btn btn-danger deleteSub" data-id=${sub.id}>
        delete</a></td>
        <td><a href="{{ url('api/subjects/ ${sub.id}/edit')}}" class="btn btn-primary" data-id=${sub.id}>
        edit</a></td>
        </tr>
        `;
    //alert(key + ":" + depart.depart_name)
    });
$('#sub').append(output);
    });
}

// function to delete department
$('body').on('click', '.deleteSub', function(e){
    e.preventDefault();
    let id = $(this).data('id');
    //console.log(id);
    deleteSubject(id);
});

function deleteSubject(id){
    $.ajax({
        type:"POST",
        url:'http://127.0.0.1:8000/api/subjects/'+id,
        data: {_method: 'DELETE',  _token: '{!! csrf_token() !!}'}
    }).done(function(depart){
        console.log(id);
        alert("deleted successfully");
        location.reload();

    });
}
});

    </script>
@endsection
   
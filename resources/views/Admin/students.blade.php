@extends('Admin.header')
@section('title', 'Students')
@section('subtitle', 'Students')
 
@section('content')
<table class="table">
  <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Code</th>
              
              <th scope="col">Level</th>
              <th scope="col">Department</th>
            </tr>
          </thead>
          <tbody id="std">
            {{-- @foreach ($student as $st)
            <tr>
              <th scope="row">{{$st->id}}</th>
              <td>{{$st->name}}</td>
              <td>{{$st->AcademicCode}}</td>
             
              <td>{{$st->level}}</td>
              <td>{{$st->depart}}</td>
              <td class="edit1"><a href="#" class="btn btn-primary">edit</a></td>
              <td class="delete1"><a href="#" class="btn btn-danger">delete</a></td>
         </tr>
         @endforeach --}}
          </tbody>
        </table>
         
     </div>
     {{-- <div class="add ">
         <form id="add_student">
             <div><h4>Add new student</h4></div>
             <div>
                 <input type="text" name="name" placeholder="Name"><br>
                 <input type="text" name="code" placeholder="Code"><br>
                 <input type="text" name="pass" placeholder="Password"><br>
                 <input type="text" name="level" placeholder="Level"><br>
                 <input type="text" name="depart" placeholder="Department"><br>
                 <input type="submit" class="btn btn-primary" value="Add">
             </div>
         </form>
     </div> --}}
     
    @endsection

    @section('jq')
    <script >
$(document).ready(function(){
getStudents();

// function to add department
// $("#add_student").on("submit", function(e){
//     e.preventDefault();
//     let name = $("#name").val();
//     let code = $("#code").val();
//     let pass = $("#pass").val();
//     let level = $("#level").val();
//     let depart = $("#depart").val();
//     // alert(depart_name);
//     // alert(headId);
//     addStudent(name, code, pass, level, depart);

// });

// function addStudent(name, code, pass, level, depart){
//     $.ajax({
//         method:"POST",
//         url:'http://127.0.0.1:8000/api/departs',
//         data: name : name, code: code,  _token: '{!! csrf_token() !!}'}
//     }).done(function(depart){
//         alert("depart # " + depart.id + " added");
//         location.reload();

//     });
// }

// function to get all departments
function getStudents(){
    $.ajax({
        url:'http://127.0.0.1:8000/api/students'
    }).done(function(students){
let output = '';
$.each(students, function(key, student){
        output += `
        <tr><td> ${student.id}</td>
        <td>${student.name}</td>
        <td>${student.AcademicCode}</td>
        <td>${student.level}</td>
        <td>${student.depart}</td>
        </tr>
        `;
        // <td><a href="#" class="btn btn-danger deleteStudent" data-id=${student.id}>
        // delete</a></td>
        // <td><a href="{{ url('api/students/ ${student.id}/edit')}}" class="btn btn-primary" data-id=${student.id}>
        // edit</a></td>
    //alert(key + ":" + depart.depart_name)
    });
$('#std').append(output);
    });
}

// function to delete department
$('body').on('click', '.deleteStudent', function(e){
    e.preventDefault();
    let id = $(this).data('id');
    //console.log(id);
    deleteStudent(id);
});

function deleteStudent(id){
    $.ajax({
        type:"POST",
        url:'http://127.0.0.1:8000/api/students/'+id,
        data: {_method: 'DELETE',  _token: '{!! csrf_token() !!}'}
    }).done(function(std){
        alert("deleted successfully");
        location.reload();

    });
}
});

    </script>
@endsection
   
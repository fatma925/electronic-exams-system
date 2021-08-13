@extends('Admin.header')
@section('title', 'Professors')
@section('subtitle', 'Professors')
 
@section('content')
     {{-- <div class="middle"> --}}
         <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">email</th>
              <th scope="col">position</th>
            </tr>
          </thead>
          <tbody id="prof">
           
          </tbody>
        </table>
         
     {{-- </div> --}}
     {{-- <div class="add">
         <form>
             <div><h4>Add new professor</h4></div>
             <div>
                 <input type="text" name="name" placeholder="Name"><br>
                 <input type="text" name="pass" placeholder="Password"><br>
                 <input type="text" name="priv" placeholder="Priviledge"><br>
                 <input type="submit" class="btn btn-primary" value="Add">
             </div>
         </form>
    </div> --}}
    @endsection

    @section('jq')
    <script >
$(document).ready(function(){
getProfs();

// function to add department
// $("#add_depart").on("submit", function(e){
//     e.preventDefault();
//     let headId = $("#headId").val();
//     let depart_name = $("#title").val();
//     // alert(depart_name);
//     // alert(headId);
//     addDepart(depart_name, headId);

// });

// function addDepart(depart_name, headId){
//     $.ajax({
//         method:"POST",
//         url:'http://127.0.0.1:8000/api/departs',
//         data: {depart_name : depart_name, headId: headId,  _token: '{!! csrf_token() !!}'}
//     }).done(function(depart){
//         alert("depart # " + depart.id + " added");
//         location.reload();

//     });
// }

// function to get all departments
function getProfs(){
    $.ajax({
        url:'http://127.0.0.1:8000/api/professors'
    }).done(function(professors){
let output = '';
$.each(professors, function(key, prof){
        output += `
        <tr>
        <td> ${prof.id}</td>
        <td>${prof.prof_name}</td>
        <td>${prof.email}</td>
        <td>${prof.priviledge}</td>
        </tr>
        `;
        // <td><a href="#" class="btn btn-danger deleteDepart" data-id=${depart.id}>
        // delete</a></td>
        // <td><a href="{{ url('api/departs/ ${depart.id}/edit')}}" class="btn btn-primary" data-id=${depart.id}>
        // edit</a></td>
    //alert(key + ":" + depart.depart_name)
    });
$('#prof').append(output);
    });
}

// function to delete department
// $('body').on('click', '.deleteDepart', function(e){
//     e.preventDefault();
//     let id = $(this).data('id');
//     //console.log(id);
//     deleteDepart(id);
// });

// function deleteDepart(id){
//     $.ajax({
//         type:"POST",
//         url:'http://127.0.0.1:8000/api/departs/'+id,
//         data: {_method: 'DELETE',  _token: '{!! csrf_token() !!}'}
//     }).done(function(depart){
//         alert("deleted successfully");
//         location.reload();

//     });
// }
});

    </script>
@endsection
   
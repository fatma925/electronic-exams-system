@extends('professors.header')
@section('title', 'chapters')
@section('subtitle', 'chapters')

@section('content')
<header style="width: 80%">add new chapter</header>
<div class="middle ">
    
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">title</th>
      <th scope="col">subject Id</th>
    </tr>
  </thead>
  <tbody id="chap">
   
    
  </tbody>
</table>
</div>

<div class="add small">
  <form id="add_chapter">
      @csrf
  <h4>Add new chapter</h4><br>
  <input type="text" id="title" placeholder="chapter title" class="form-control">
  
  <input type="number" id="subId" placeholder="subject id" class="form-control">
  <input type="submit" class="btn btn-primary" value="Submit" id="btn">
  
  </form>
  </div>
@endsection

@section('jq')
  <script>
    $(document).ready(function(){
getchapters();

// function to add department
$("#add_chapter").on("submit", function(e){
    e.preventDefault();
    let subId = $("#subId").val();
    let chapter_name = $("#title").val();
    let chTitle = "jj";
    addChapter(chapter_name, subId, chTitle);

});

function addChapter(chapter_name, subId, chTitle){
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/chapters',
        data: {title : chapter_name, subId: subId,chTitle: chTitle,  _token: '{!! csrf_token() !!}'}
    }).done(function(chapter){
        alert("chapter # " + chapter.id + " added");
        location.reload();

    });
}

// function to get all departments
function getchapters(){
    $.ajax({
        url:'http://127.0.0.1:8000/api/chapters'
    }).done(function(chapters){
let output = '';
$.each(chapters, function(key, chapter){
        output += `
        <tr><td> ${chapter.id}</td>
        <td>${chapter.title}</td>
        <td>${chapter.subId}</td>
        <td><a href="#" class="btn btn-danger deleteChapter" data-id=${chapter.id}>
        delete</a></td>
        <td><a href="{{ url('api/departs/ ${chapter.id}/edit')}}" class="btn btn-primary" data-id=${chapter.id}>
        edit</a></td>
        </tr>
        `;
    });
$('#chap').append(output);
    });
  
}

// function to delete department
$('body').on('click', '.deleteChapter', function(e){
    e.preventDefault();
    let id = $(this).data('id');
    //console.log(id);
    deleteChapter(id);
});

function deleteChapter(id){
    $.ajax({
        type:"POST",
        url:'http://127.0.0.1:8000/api/chapters/'+id,
        data: {_method: 'DELETE',  _token: '{!! csrf_token() !!}'}
    }).done(function(chapter){
        alert("deleted successfully");
        location.reload();

    });
}

$('body').on('click', '.sub', function(e){
    e.preventDefault();
    let sub = $("#sub").val();
    //console.log(id);
    getChap(sub);
});

function deleteChap(id){
    $.ajax({
        type:"GET",
        url:'http://127.0.0.1:8000/api/chapters/'+id,
        data: {_method: 'DELETE',  _token: '{!! csrf_token() !!}'}
    }).done(function(chapter){
        alert("deleted successfully");
        location.reload();

    });
}
});

  </script>
@endsection
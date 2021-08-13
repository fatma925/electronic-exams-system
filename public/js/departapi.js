
$(document).ready(function(){
getdeparts();

// function to add department
$("#add_depart").on("submit", function(e){
    e.preventDefault();
    let headId = $("#headId").val();
    let depart_name = $("#title").val();
    // alert(depart_name);
    // alert(headId);
    addDepart(depart_name, headId);

});

function addDepart(depart_name, headId){
    
    $.ajax({
        method:"POST",
        url:'http://127.0.0.1:8000/api/departs',
        data: {depart_name : depart_name, headId: headId,  _token: '{!! csrf_token() !!}'}
        
    }).done(function(depart){
        alert("depart # " + depart.id + " added");
        location.reload();

    });
}

// function to get all departments
function getdeparts(){
    $.ajax({
        url:'http://127.0.0.1:8000/api/departs'
    }).done(function(departs){
let output = '';
$.each(departs, function(key, depart){
        output += `
        <tr><td> ${depart.id}</td>
        <td>${depart.depart_name}</td>
    
        <td><a href="#" class="btn btn-danger deleteDepart" data-id=${depart.id}>
        delete</a></td>
        <td><a href="{{ url('api/departs/ ${depart.id}/edit')}}" class="btn btn-primary" data-id=${depart.id}>
        edit</a></td>
        </tr>
        `;
    //alert(key + ":" + depart.depart_name)
    });
$('#dep').append(output);
    });
}

// function to delete department
$('body').on('click', '.deleteDepart', function(e){
    e.preventDefault();
    let id = $(this).data('id');
    //console.log(id);
    deleteDepart(id);
});

function deleteDepart(id){
    $.ajax({
        type:"POST",
        url:'http://127.0.0.1:8000/api/departs/'+id,
        data: {_method: 'DELETE',  _token: '{!! csrf_token() !!}'}
    }).done(function(depart){
        alert("deleted successfully");
        location.reload();

    });
}
});



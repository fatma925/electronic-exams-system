@extends('Admin.header')
@section('title', 'Professors')
@section('subtitle', 'Professors')
 
@section('content')
     <div class="middle">
         <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
            
              <th scope="col">Priviledge</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($prof as $prof)
            <tr>
              <th scope="row">{{$prof->id}}</th>
              <td>{{$prof->name}}</td>
              
              <td>{{$prof->priviledge}}</td>
              <td class="edit1"><a href="#" class="btn btn-primary">edit</a></td>
              <td class="delete1"><a href="#" class="btn btn-danger">delete</a></td>
         </tr>
            @endforeach
          </tbody>
        </table>
         
     </div>
     <div class="add">
         <form>
             <div><h4>Add new professor</h4></div>
             <div>
                 <input type="text" name="name" placeholder="Name"><br>
                 <input type="text" name="pass" placeholder="Password"><br>
                 <input type="text" name="priv" placeholder="Priviledge"><br>
                 <input type="submit" class="btn btn-primary" value="Add">
             </div>
         </form>
    </div>
    @endsection
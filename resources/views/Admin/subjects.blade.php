@extends('Admin.header')
@section('title', 'Subjects')
@section('subtitle', 'Subjects')
 
@section('content')
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">SubCode</th>
              <th scope="col">Level</th>
              <th scope="col">Department</th>
              <th scope="col">Professor</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($subject as $sub)
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
            @endforeach
            
          </tbody>
        </table>
     </div>
     <div class="add">
         <form>
             <div><h4>Add new subject</h4></div>
             <div>
                 <input type="text" name="name" placeholder="Name"><br>
                 <input type="text" name="code" placeholder="Subcode"><br>
                 <input type="text" name="level" placeholder="Level"><br>
                 <input type="text" name="depart" placeholder="Department"><br>
                 <input type="text" name="prof" placeholder="Professor"><br>
                 <input type="submit" class="btn btn-primary" value="Add">
             </div>
         </form>
    </div>
     
    @endsection
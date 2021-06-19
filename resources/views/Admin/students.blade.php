@extends('Admin.header')
@section('title', 'Students')
@section('subtitle', 'Students')
 
@section('content')

            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Code</th>
              
              <th scope="col">Level</th>
              <th scope="col">Department</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($student as $st)
            <tr>
              <th scope="row">{{$st->id}}</th>
              <td>{{$st->name}}</td>
              <td>{{$st->AcademicCode}}</td>
             
              <td>{{$st->level}}</td>
              <td>{{$st->depart}}</td>
              <td class="edit1"><a href="#" class="btn btn-primary">edit</a></td>
              <td class="delete1"><a href="#" class="btn btn-danger">delete</a></td>
         </tr>
         @endforeach
          </tbody>
        </table>
         
     </div>
     <div class="add ">
         <form>
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
     </div>
     
    @endsection
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
            <tr>
                 <th scope="row">1</th>
                 <td>Design pattern</td>
                 <td>SE-U55</td>
                 <td> semester three</td>
                 <td>general</td>
                 <td>Software Engineering</td>
                 <td><a href="#" class="btn btn-primary">edit</a></td>
                 <td><a href="#" class="btn btn-danger">delete</a></td>
            </tr>
            <tr>
                 <th scope="row">1</th>
                 <td>Design pattern</td>
                 <td>SE-U55</td>
                 <td> semester three</td>
                 <td>general</td>
                 <td>Software Engineering</td>
                 <td><a href="#" class="btn btn-primary">edit</a></td>
                 <td><a href="#" class="btn btn-danger">delete</a></td>
            </tr>
            
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
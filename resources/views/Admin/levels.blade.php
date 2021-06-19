@extends('Admin.header')
@section('title', 'Levels')
@section('subtitle', 'Levels')
 
@section('content')
                 <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Name</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($level as $level)
                 <tr>
                    <td>{{$level->id}}</td>
                    <td>{{$level->level_name}}</td>
                    <td><a href="#" class="btn btn-primary">edit</a></td>
                    <td><a href="#" class="btn btn-danger">delete</a></td>
                
                </tr>
                 @endforeach
                 
               
             </tbody>  
         </table> 
         
     </div>
     <div class="add small">
             <form>
                 <h4>Add new level </h4>
                 <input type="text" name="depart">
                 <input type="submit" class="btn btn-primary" value="Add">
             </form>
         </div>
         @endsection
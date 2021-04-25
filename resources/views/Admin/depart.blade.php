@extends('Admin.header')
@section('title', 'Departments')
@section('subtitle', 'Departments')
 
@section('content')
   
<tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>Software Engineering</td>
    <td><a href="#" class="btn btn-primary">edit</a></td>
    <td><a href="#" class="btn btn-danger">delete</a></td>

</tr>
<tr>
    <td scope="row">2</td>
    <td>CS</td>
    <td><a href="#" class="btn btn-primary">edit</a></td>
    <td><a href="#" class="btn btn-danger">delete</a></td>

</tr>
<tr>
    <td scope="row"> 3</td>
    <td>Bio</td>
    <td><a href="#" class="btn btn-primary">edit</a></td>
    <td><a href="#" class="btn btn-danger">delete</a></td>

</tr>
</tbody>  
</table>  
</div>
<div class="add small">
<form>
<h4>Add new depart<span>ment</span></h4>
<input type="text" name="depart">
<input type="submit" class="btn btn-primary" value="Add">
</form>
</div>

@endsection
                
     
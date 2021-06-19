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
    @foreach ($depart as $depart)
    <tr>
        <td>{{$depart->id}}</td>
        <td>{{$depart->depart_name}}</td>
        <td><a href="{{ url('api/editDepart')}}" class="btn btn-primary">edit</a></td>
        <td>
        <button><a href="{{ url('api/departs/' . $depart->id ) }}" class="btn btn-danger">delete</a></button></td>
    
    </tr>
    @endforeach

</tbody>  
</table>  
</div>
<div class="add small">
<form action="{{url('api/departs')}}" action="post">
    @csrf
<h4>Add new depart<span>ment</span></h4>
<input type="text" name="depart">
<input type="submit" class="btn btn-primary" value="Add">
</form>
</div>

@endsection
                
     
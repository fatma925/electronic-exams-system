@extends('professors.header')
@section('title', 'chapters')
@section('subtitle', 'chapters')

@section('content')
    
<div class="middle ">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Question No</th>
    </tr>
  </thead>
  <tbody>
    <tr>
          <th scope="row">1</th>
          <td>Requrement Analysis</td>
          <td>20</td>
          <td class="edit1"><a href="#" class="btn btn-primary">edit</a></td>
          <td class="delete1"><a href="#" class="btn btn-danger">delete</a></td>
    </tr>
    <tr>
          <th scope="row">2</th>
          <td>Software Engineering</td>
          <td>10</td>
          <td class="edit1"><a href="#" class="btn btn-primary">edit</a></td>
          <td class="delete1"><a href="#" class="btn btn-danger">delete</a></td>
    </tr>
      <tr>
          <th scope="row">3</th>
          <td>Software Construction</td>
          <td>15</td>
          <td class="edit1"><a href="#" class="btn btn-primary">edit</a></td>
          <td class="delete1"><a href="#" class="btn btn-danger">delete</a></td>
    </tr>
  </tbody>
</table>
</div>

@endsection
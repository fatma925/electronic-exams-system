@extends('professors.header')
@section('title', 'questions')
@section('subtitle', 'questions')

@section('content')
<header style="width: 80%">add new question</header>
<div class="middle ">

<table class="table">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Question</th>
    <th scope="col">Type</th>
    <th scope="col">Category</th>
    <th scope="col">Time</th>
    <th scope="col">Degree</th>
    <th scope="col">Chapter</th>
    <th scope="col">CorrectA</th>
    <th scope="col">WrongA1</th>
    <th scope="col">WrongA2</th>
    <th scope="col">WrongA3</th>
</tr>
</thead>
<tbody>
<tr>
    <th scope="row">1</th>
    <td></td>
    <td>mcq</td>
    <td>A</td>
    <td>1 min</td>
    <td>2</td>
    <td>OOP Fundamental</td>
    <td>B</td>
    <td>A</td>
    <td>C</td>
    <td>D</td>
    <td class="edit1"><a href="#" class="btn btn-primary">edit</a></td>
    <td class="delete1"><a href="#" class="btn btn-danger">delete</a></td>
</tr>
<tr>
    <th scope="row">1</th>
    <td></td>
    <td>mcq</td>
    <td>A</td>
    <td>1 min</td>
    <td>2</td>
    <td>OOP Fundamental</td>
    <td>B</td>
    <td>A</td>
    <td>C</td>
    <td>D</td>
    <td class="edit1"><a href="#" class="btn btn-primary">edit</a></td>
    <td class="delete1"><a href="#" class="btn btn-danger">delete</a></td>
</tr>
</tbody>
</table>   
</div>
<div class="add">
<h4>Add New Question</h4>
<input type="text" name="quest" placeholder="add your question" class="f-input"><br><br>
<span>
    <input type="text" name="type" placeholder="Type">
    <input type="text" name="cat" placeholder="Category">
    <input type="text" name="chap" placeholder="Chapter">
    <input type="text" name="correct" placeholder="CorrectA">
    <input type="text" name="correct" placeholder="WrongA1">
    <input type="text" name="correct" placeholder="WrongA2">
    <input type="text" name="correct" placeholder="WrongA3">
</span><br>
    <button class="btn btn-primary">Add Question</button>
</div>
@endsection
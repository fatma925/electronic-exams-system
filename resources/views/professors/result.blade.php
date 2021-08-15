@extends('professors.header')
@section('title', 'result')
@section('subtitle', 'result')

@section('content')
<header style="width: 80%">your results</header>
<div class="middle ">
    <table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Student</th>
        <th scope="col">Result</th>
        <th scope="col">Grade</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Ahmed Alaa Ebrahem</td>
        <td>60</td>
        <td>A+</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Asmaa mohamed Elshahat</td>
        <td>58</td>
        <td>A+</td>
    </tr>
        <tr>
        <th scope="row">3</th>
        <td>Basem Mohamed Elsalhey</td>
        <td>48</td>
        <td>B</td>
    </tr>
    </tbody>
</table>
</div>
@endsection
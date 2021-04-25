@extends('students.header')
@section('title', 'result')

@section('content')
     <header>Students' Results</header>
     <div class="middle ">
         <table class="table">
          <thead>
            <tr>
                <th scope="col">Subject</th>
                <th scope="col">Result</th>
                <th scope="col">Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                 <td>SE</td>
                 <td>100</td>
                 <td>A+</td>
            </tr>
            <tr>
                 <td>Ethics</td>
                 <td>85</td>
                 <td>A</td>
            </tr>
              <tr>
                 <td>Math3</td>
                 <td>90</td>
                 <td>A+</td>
            </tr>
          </tbody>
        </table>
     </div>
     <div class="rank">Your Rank : 2</div>
    @endsection
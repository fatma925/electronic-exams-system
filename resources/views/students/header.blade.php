<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">  
 </head>
 <body>
     <nav>
          <span class="logo">GetYourExam</span>
          <div class="left">
              <select>
                  <option>software construction</option>
                  <option>Math1</option>
                  <option>Math2</option>
                  <option>Statistics</option>
              </select>
             <div class="dropdown">
                  <span data-toggle="dropdown" class="dropdown-toggle l-menu"> 
                      lang<span class="drop">uage</span>
                  </span>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Arabic</a>
                    <a class="dropdown-item" href="#">English</a>
                  </div>
            </div>
            <a href="#" class="not">Not<span class="drop">ification</span></a>
            <a href="#" class="logout">Logout</a>
        </div>
         <hr>
         <span class="links">
            <a href="question_bank">question bank</a>
            <a href="training_exam">training exam</a>
            <a href="student_exam">exams</a>
            <a href="result">result</a>
            <a href="student_login" class="logout2">Logout</a>
        </span>
     </nav>

@yield('content')


     <footer><p>all rights reserved<br>&copy;2020 copyright</p> </footer>
  
   <script src="../scripts/jquery.min.js"></script> 
   <script src="../scripts/propper.js"></script> 
   <script src="../scripts/bootstrap.min.js"></script>
    <script src="../scripts/script.js"></script>
 </body>
</html>
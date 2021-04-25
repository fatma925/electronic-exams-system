<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">  
 </head>
 <body>
     <nav>
         <span>GetYourExam</span>
         <div class="dropdown ">
         <a href="#" class="logout2">logout</a>
              <span data-toggle="dropdown" class="dropdown-toggle l-menu"></span>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profs">professors</a>
                <a class="dropdown-item" href="students">students</a>
                <a class="dropdown-item" href="departs">departments</a> 
                <a class="dropdown-item" href="levels">levels</a>
                <a class="dropdown-item" href="subjects">subjects</a>
              </div>
         </div>
         <span class="links">
             <a href="profs">professors</a>
             <a href="students">students</a>
             <a href="departs">departments</a>
             <a href="levels">levels</a>
             <a href="subjects">subjects</a>
             <a href="#">requests</a>
             <a href="#">logout</a>
         </span>
     </nav>
     <header class="small">@yield('subtitle')</header>
     <div class="middle small">
         <table class="table">
             <thead>

            @yield('content')


            <footer class="login-footer">
                <p>all rights reserved<br>&copy;2020 copyright</p> 
            </footer>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        </body>
       </html>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
             <a href={{url("professors")}}>professors</a>
             <a href={{url("students")}}>students</a>
             <a href={{url("departs")}}>departments</a>
             <a href={{url("levels")}}>levels</a>
             <a href={{url("subjects")}}>subjects</a>
             <a href="#">requests</a>
             <a href="#">logout</a>
         </span>
     </nav>
     <header class="small">@yield('subtitle')</header>
     <div class="middle small">
         

            @yield('content')


            
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
           <script src="https://code.jquery.com/jquery-1.12.4.js" 
            integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous">
            </script>
            @yield('jq')
        </body>
       </html>
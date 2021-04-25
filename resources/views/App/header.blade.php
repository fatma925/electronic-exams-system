<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
 </head>
 <body>
     <nav>
         <span>GetYourExam</span>
         <span class="links">
             <a href="home">Home</a>
             <a href="about_us">About Us</a>
             <a href="faq">FAQ</a>
             <div class="dropdown">
              <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
              </span>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Arabic</a>
                <a class="dropdown-item" href="#">English</a>
              </div>
            </div>
             <div class="dropdown">
                  <span class="dropdown-toggle l-menu" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                  </span>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a href="home" class="dropdown-item">Home</a>
                      <a href="about_us" class="dropdown-item">About Us</a>
                      <a href="faq" class="dropdown-item">FAQ</a>
                  </div>
            </div>
         </span>
    </nav>
    <div class="login">
         <nav>@yield('subtitle')</nav> 

         @yield('content')

         <footer class="login-footer">
            <p>all rights reserved<br>
                &copy;2020 copyright</p> 
        </footer>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
   </html>
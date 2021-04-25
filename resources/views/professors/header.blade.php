<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">  
 </head>
 <body>
     <nav>
          <span class="logo">GetYourExam</span>
          <div class="left">
              <select>
                  <option value="0">Subject</option>
                  <option value="1">Math1</option>
                  <option value="2">Math1</option>
                  <option value="3">Math1</option>
              </select>
             <div class="dropdown">
                  <span data-toggle="dropdown" class="dropdown-toggle l-menu"> 
                      language
                  </span>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Arabic</a>
                    <a class="dropdown-item" href="#">English</a>
                  </div>
            </div>
             <a href="#" class="logout">Logout</a>
        </div>
        <hr>
        <span class="links">
             <a href="chapters">chapters</a>
             <a href="questions">questions</a>
             <a href="exam">exams</a>
             <a href="results">results</a>
            <a href="#" class="logout2">Logout</a>
        </span>
     </nav>
     <header>@yield('subtitle')</header>
     

@yield('content')


            <footer>
                <p>all rights reserved<br>&copy;2020 copyright</p> 
            </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        </body>
       </html>
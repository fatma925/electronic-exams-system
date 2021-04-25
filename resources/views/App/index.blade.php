<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        body{
            background: url('images/home2.PNG');
            background-size: cover;
            background-attachment: fixed;
            font-family: Comic Sans MS;
            overflow: hidden;
          }
        nav{color: #fff;border-bottom: 0}
        nav .links>a{color: #ddd}
        nav .links>a:hover{color: #fff;}
        .dropdown-toggle{color: #ddd;}
        .dropdown-toggle:hover{color: #fff;}
        .dropdown-menu{margin-right: 0;}
        footer{
            position: absolute;
            bottom: 0;
            left: 0;
        }
    </style>
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
         <div class="mission" class="text-center">
             <h1>GetYourExam</h1>
             <p>our mission is to help you be stressed-off as possible..<br>
             to be ready and arrangeyourthoughts<br>
             to get the bestresult..</p>
             <button class="btn-first">
                 <a href="prof_login">Professor</a>
             </button>
             <button class="btn-second">
                 <a href="student_login">Student</a>
             </button>
         </div>
         <footer>
             <a href="#">Facebook</a>|
             <a href="#">Twitter</a>|
             <a href="#">Youtube</a>
         </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </body>
</html>
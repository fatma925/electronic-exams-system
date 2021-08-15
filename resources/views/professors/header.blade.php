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
              <select class="sub">
                  
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
     {{-- <header>@yield('subtitle')</header> --}}
     

@yield('content')
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js" 
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous">
    </script>
    <script>
$(document).ready(function(){
    //alert("hello");
    getSubjects();
    function getSubjects(){
    $.ajax({
        url:'http://127.0.0.1:8000/api/subjects'
    }).done(function(subjects){
let output = '';
$.each(subjects, function(key, sub){
        output += `
        <option>${sub.subTitle}</option>
        `;
    //alert(key + ":" + depart.depart_name)
    });
$('.sub').append(output);
    });
}
});
</script>
@yield('jq');
</body>
</html>
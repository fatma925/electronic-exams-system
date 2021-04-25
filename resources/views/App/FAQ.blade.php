<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
    
 </head>
 <body>
    <nav class="faq-nav">
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
    <div class="faq">
        <h2>Frequent Asked Question</h2>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">
               <span>
                    here is what  you would mostly think about ,If you are confused with how to use this site in the right way to get your exam and results please , read these following FAQ ..
                </span>
            </div>
            <div class="col-lg-4 col-md-5 col-12">
                <img src="{{asset('images/faq.jpg')}}">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-5 col-12 hidden-sm">
                <img src="{{asset('images/faq2.jpg')}}" class="s-img">
            </div>
            <div class="col-md-6 col-12 offset-md-1">
                <h2>How Can I Get My Exam?</h2>
                <span>
                    all you have to to is to sign in or sign up if you are new with the data needed , go into your account and select the the subject you will have an exam on , or Q bank to be tuned you will get your result as soon as you finish the exam ..
                </span>
            </div>  
        </div>
        <br><br>
        <h2>How The Exam Will Be Organized?</h2>
        <div class="row">
            <div class="col-lg-6 col-md-7 col-12">
                <span>
                    Structure of the exam will be organized by the professor who teaches the subject ,every question has a specific time to be finished in , if you didn't finish it at its time , the next question would start ,and the question you don't answer would be out .. try your best 🙂
                </span>
            </div> 
            <div class="col-lg-5 offset-lg-1 col-md-5 col-12">
                <img src="{{asset('images/faq3.jpg')}}" class="l-img">
            </div>
        </div>
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
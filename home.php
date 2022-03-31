<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>online chess game</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">

</head>
<body>

    <!--navigation bar-->
     <!--navigation bar-->
     <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container fluid">
            <a class="navbar-brand" href="#"><img src="img/blackKing.png "></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Play</a>
                        <div class="dropdown-menu">
                        <a href="play.html" class="dropdown-item">play with a friend</a>
                        <a href="#" class="dropdown-item">play with a computer</a>
                        <a href="#" class="dropdown-item">articles</a>
                        </div>
                     </div>
                    </li> 
                    
                    <li class="nav-item">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">learn</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Game tactics</a>
                                <a href="#" class="dropdown-item">Game rules</a>
                                <a href="#" class="dropdown-item">articles</a>
                                <a href="#" class="dropdown-item">video</a>
                               
                            </div>
                        </div>
                    </li> <li class="nav-item">
                        <a class="nav-link" href="connect.html">Connect</a>
                    </li> <li class="nav-item">
                        <a class="nav-link" href="tournament.html">Tournaments</a>
                    </li> <li class="nav-item">
                        <a class="nav-link" href="signin.php">Sign In</a>
                    </li>
                </ul>
             </div>
            </div>
            </nav>
            <!--- Welcome Section -->
<div class="container-fluid padding">
</div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">WELCOME TO CHESS GAME</h1>
        </div>
        <hr>
        <div clas="col-12">
            <p class="lead">Enjoy chess game </p>
        </div>


<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
   <div class="carousel-item active">
     <img src="img/pexel.jpg">
      <div class="carousel-caption">
          <h1 class="display-2">Play game</h1>
          <h3>play chess in emchess.c</h3>
            <button type="button" class="btn btn-outline-light btn-lg">View demo</button>
         <a href="signup.php"> <button type="button" class="btn btn-primary btn-lg">Get started</button></a>
      </div>
    </div>
       
<div class="carousel-item">
         <img src="img/view.jpg">
</div>
 <div class="carousel-item">
         <img src="img/conny.jpg">
             </div>
       </div>
</div>
<!--- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-x5-12 col-5m-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">
                With over 70 million members and more than nine million games played per day,
                 <br>Chess.com gives you the opportunity to play someone at your skill level at any time.
                 <br>If you are looking to find a game quickly at your favorite time control, you can find the most opponents at Chess.com.
            </p>
        </div>
        <div class="col-x5-12 col-5m-12 col-md-3 col-lg-3 ccol-xl-2">
            <a href="about us.html"><button type="button" class="btn btn-outline-secondary btn-lg">get to know more about us</button></a>
        </div>
    </div>
</div>
</div>
</nav>
<!--- Meet the team -->
<div class=" container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Meet The Team</h1>
        </div>
        <hr>
    </div>
</div>


<!--- Three Column Section -->


<!--- Two Column Section -->


<!--- Fixed background -->


<!--- Emoji Section -->


<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img lass="card-img-top" src="img/coonnyy.jpeg">
                <div class="card-body">
                    <h3 class="card-title">Em-conny</h3>
                    <p class ="card-text">
                    The CEO of the em.chess.com,having a master in software engineering
                from  CA 9412 street,USA</p>
                         <a href="view1.html" class="btn btn-outline-secondary">view profile</a>
                </div>
            </div>
        </div>
 <div class="col-md-4">
        <div class="card">
            <img lass="card-img-top" src="img/pexel.jpg">
            <div class="card-body">
                <h3 class="card-title">Pascal Ewaat</h3>
                <p class ="card-text">A web designer CEO, both having experience in UI/UX from mauritius </p>
                     <a href="view2.html" class="btn btn-outline-secondary">view profile</a>
            </div>
    </div>
</div>
<div class="col-md-4">
   <div class="card">
    <img lass="card-img-top" src="img/download.jpg">
       <div class="card-body">
        <h3 class="card--title">Mario Aur</h3>
        <p class ="card-text">A software developer ,with the best Gui experience  
             from germany,ACA,324,aliei street.</p>
             <a href="view3.html" class="btn btn-outline-secondary">view profile</a>
               </div>
          </div>
        </div>
    </div>
</div>
<!--- Two Column Section -->

<!--- Connect -->
<div class="Container padding">
    <div class="row text-center padding">
    
        <div class="col-4">
        </div>
        <div class="col-12 social padding">
                 <h1>Connect</h1>
            <a href="Https://WWW.instagram.com"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
           <a href="Https://WWW.gmail.com"><i class="fas fa-envelope"></i></a>
           <a href="Https://WWW.twitter.com"><i class="fab fa-twitter"></i></a>
        </div>
        </div>
    </div>
<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
               
                <hr class="light">
                <p>corneliusekai72@gmail.com</p>
                <p>+254 796 7654 30</p>
                <p>190-streets</p>
                <p>nairobi city</p>
                <p>city,state,00000</p>
            </div>
            <div class="col-4">
                <hr class="light">
                <h5>find more news at</h5>
               <hr class="light">
        
          <p><a href="
https://chessbase.in/news/The-Chess-Drum-Keeps-the-Beat-Daaim-Shabazz">chessdrum</a></p>
                <p><a href="https://www.chessbase.com">chessbase</a></p>
                <p><a href="https://www.chess.com/blogs/all.com">chessblog</a></p>
                <p><a href="https://www.newinchess.com">new in chess</a></p>
                <p><a href="https://twitter.com/chesscom?">twitter chess</a></p>
            </div>
            <div class="col-4">
                <hr class="light">
                <h6>more</h6>
               <hr class="light">
               <h5><a href="about.php">about us</a></h5>
               <h5><a href="contact.php">contact us</a></h5>
               <h5><a href="register.php">register tournament</a></h5>
               <h5><a href="#">social media handle emchess.c</a></h5>
               <p>
            
         </p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h7> <p>&copy;2022 all reseverd &trade;chess game</p></h7>
               
               
        </div>
    </div>
</footer>

</body>
</html>
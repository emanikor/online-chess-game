<?php
session_start();
require 'connect.php';
// require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
    header('Location: play.php');
    exit;
}
?>

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
    <link rel="stylesheet" href="css/sign in.css">
	

</head>
    <script src="https://kit.fontawesome.com/dd06602d3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <style>
        body {
          background-image: url('img/conny.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
                
                <form action="saveSignin.php" method="post">
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email"  id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password"  name="password"  id="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Password</label>
                </div>
  
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">sign in</button>
  
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="Https://WWW.twitter.com"><i class="fab fa-twitter fa-lg mx-4 px"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
      
              </div>
  
              <div>
                <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a></p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <scipt src="sign in.js"></scipt>
   </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sign up Form - PHP/MySQL Demo Code</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="css/sign up.css">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">

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


  <section class="vh-100 bg-image " style="background-image: url('.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card " style="border-radius:15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                <?php include_once 'feedback.php'; ?>
  
                <form method="post" action="saveSignUp.php">
  
                  <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form3Example1cg" required>Your Name</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form3Example3cg" required>Your Email</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="number" id="id_no" name="id_no" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example3cg" required>id no</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example4cg" required>Password</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg"  required/>
                    <label class="form-label" for="confirm_password" required>confirm your password</label>
                  </div>
                 
                 
  
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>
  
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="signin.php" class="fw-bold text-body">sign in</a></p>
  
                </form>
  
              </div>
              <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="./sign up.js"></script>
  


</body>
</html>
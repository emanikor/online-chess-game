<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css" class="">
    <title>Document</title>
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

                
                   
<form class="form" action="save.php" method="post">
  <h2>CONTACT US</h2>
  <?php
        session_start();
         if(isset($_SESSION['success'])){
             echo '<p class="success">'.$_SESSION['success'].'</p>';
             unset($_SESSION['success']);
         }
            if(isset($_SESSION['error'])){
                echo '<p class="error">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
            }

        ?>
  <p type="Name:"><input type="text" name="name" id="name" placeholder="Write your name here.." required></input></p>
  <p type="Email:"><input type="email" name="email" id="email" placeholder="Let us know how to contact you back.." required></input></p>
  <p type="Message:"><input  name="message" id="message" placeholder="What would you like to tell us.." required></input></p>
  <button type="submit" class="btn btn-primary">Send message</button>
  <div>
    <span class="fa fa-phone"></span>+254 796 765 430 
    <span class="fa fa-envelope-o"></span> em.chess@gmail.com
  </div>
 
  
</form>
</body>
</html>
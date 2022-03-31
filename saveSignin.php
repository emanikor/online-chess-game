
 <!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
        require_once 'connect.php';
        session_start();
       
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
           
           try {
           $stmt = $db->query("SELECT * FROM `users` WHERE email='$email' AND password='$password'");
            $users = $stmt->fetchAll();
        
            if (count($users) == 0){
                header('Location: signin.php');
            } else {
                header('Location: play.html');
            };
           $_SESSION['success'] = 'Message sent successfully';
           } catch (PDOException $e) {
            echo $e;
               $_SESSION['error'] = $e->getMessage();
           }
        }
       
        
  ?>
 
    </center>
</body>
  
</html>

        <?php
    require_once 'connect.php';
  session_start();
 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $id_no = $_POST['id_no'];
      $password = $_POST['password'];
      $confirm_password= $_POST['confirm_password'];
      
     try {
         if ($password != $confirm_password) {
            header('Location: signup.php');
         } else {
            $stmt = $db->query("SELECT * FROM `users` WHERE email='$email' OR id_no='$id_no'");
            $users = $stmt->fetchAll();
        // if the user doesn't exist o
            if (count($users) == 0){
                $stmt = $db->prepare("INSERT INTO users (name, email, password,id_no) VALUES (?,?,?,?)");
         $stmt->execute([$name, $email, $password,$id_no]);
         $_SESSION['success'] = 'Message sent successfully';
                header('Location: play.html');
            } else {
                $_SESSION['error'] = 'User already exists';
                header('Location: signup.php');
            };
        }
            
        
     } catch (PDOException $e) {
         $_SESSION['error'] = $e->getMessage();
     }
  }
 
  ?>
 
        ?>
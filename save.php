<?php
 require_once 'connect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     
    try {
     $stmt = $db->prepare("INSERT INTO feedback (name, email, message) VALUES (?,?,?)");
    $stmt->execute([$name, $email, $message]);
    $_SESSION['success'] = 'Message sent successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }


 header('Location: contact.php');
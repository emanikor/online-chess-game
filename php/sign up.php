<?php
  // define variables and set to empty values
  $nameErr = $emailErr "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"]);

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $error =' invalid email formart';
    }
    if (!filter_var($name,FILTER_VALIDATE_EMAIL)) {
        $nameErr = "Name is required";
}
} else {
    $email = test_input($_POST["email"]);
    $error =' invalid email formart';
  }
  
  
<?php
  session_start();

  if(isset($_POST["submit"])){

    $to = "email@gmail.com";
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $flag = true;

    // Email validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $flag = false;
      $_SESSION["emailError"] = "Enter valid email";
    }
    if($flag && empty($email)){
      $flag = false;
      $_SESSION["emailError"] = "Enter email";
    }


    // Subject validation
    if($flag && !preg_match("/^[a-zA-Z\s]+$/", $subject)){
      $flag = false;
      $_SESSION["subjectError"] = "Subject must be letters and spaces only";
    }


    // Message validation
    if($flag && empty($message)){
      $flag = false;
      $_SESSION["messageError"] = "Enter message";
    }


    if($flag){
      $header = "From: {$email}";
      mail($to, $subject, $message, $header);
      $_SESSION['sent'] = "Your message has been sent successfully";

      unset($_SESSION["emailError"]);
      unset($_SESSION["subjectError"]);
      unset($_SESSION["messageError"]);
    }
  } else header("Location:index.php#contact");

  header("Location:index.php#contact");

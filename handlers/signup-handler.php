<?php
   $firstName = $lastName = $email = $password = $securityQuestion= $securityAnswer = $gender = $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       $firstName = sanitizeInput($_POST["firstName"]);
       $lastName = sanitizeInput($_POST["lastName"]);
       $email = sanitizeInput($_POST["email"]);
       $password = sanitizeInput($_POST["password"]);
       $securityQuestion = sanitizeInput($_POST["securityQuestion"]);
       $securityAnswer = sanitizeInput($_POST["securityAnswer"]);
       $gender = sanitizeInput($_POST["gender"]);


       if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($securityQuestion) || empty($securityAnswer)){
           $error = "Please fill in all the required fields.";
           header("Location: ../pages/signup.php"); // redirect back to signup page if validation fails

           exit();
       }

       header("Location: ../pages/login.php");
       exit();
   }

   function sanitizeInput($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }



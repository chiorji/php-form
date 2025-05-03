<?php
$email = $password = $error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = sanitizeInput($_POST["email"]);
    $password = sanitizeInput($_POST["password"]);


    if(empty($email) || empty($password)){
        $error = "Please fill in all the required fields.";
        header("Location: ../pages/login.php"); // redirect back to login page if validation fails
        exit();
    }

    $_SESSION['is_logged_in'] = true;
    $_SESSION['username'] = $email;
    $_SESSION['user_id'] = 1;

    header("Location: ../pages/dashboard.php");
    exit();
}

function sanitizeInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

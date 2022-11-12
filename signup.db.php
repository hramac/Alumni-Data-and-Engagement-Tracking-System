<?php
#if (isset($_POST[signup-submit])){
    require 'dbc.signup.php';

    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $repeatpassword = $_POST['pwd-repeat'];

    if($password !== $repeatpassword){
        header("Location: signup.php?error=checkpassword");
        exit();
    }

    else{
        $hashedpwd =password_hash($password, PASSWORD_DEFAULT);
        $sql ="INSERT INTO users (username, email , userpassword) VALUES ('$username', '$email', '$hashedpwd');";
        mysqli_query($conn, $sql);
        header("Location: signup.php?signup=success");
    }

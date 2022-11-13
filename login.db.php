<?php
 require 'dbc.signup.php';
 $uid = $_POST['uid'];
 $password = $_POST['pwd'];

 $sql = "SELECT * FROM users WHERE username = '$uid' limit 1;";
 $result = mysqli_query($conn, $sql);
 #$pwdcheck = password_verify($password, $row['userpassword']);

 if($result)
 {
   $userdata =mysqli_fetch_assoc($result);
   $pwdcheck = password_verify($password, $userdata['userpassword']);

   if ($pwdcheck == false)
   
   {
          
      header("Location: login.php?error=wrongcredentials");
      
      exit();
   }
  
   if($pwdcheck == true)
   {
      
      header("Location: ../New/index.php");
      exit();
   }
 }
 
<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You are logged out';
   header('Refresh: 2; URL=userlogin.html');
?>


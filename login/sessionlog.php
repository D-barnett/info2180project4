<?php
session_start();
 
if (isset($_POST['login'])) {
    //create connection
     $conn = mysqli_connect($servername,$username, $password, $dbname);
     $sql="SELECT * FROM user WHERE username= '$_POST['username']' AND password = '$_POST['password']";
     $result = mysql_query($conn, $sql);
     $count  = mysql_num_rows($result);
     if($count==0) {
        echo "Invalid Username or Password!";
     } else {
        // Set session variable
         $_SESSION['loggedin'] = 1;
          
         // Redirect to a homescreen
         header("Location: mainscreen.html");
         exit;
     }
}
?>
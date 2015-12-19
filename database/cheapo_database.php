<?php
    $servername = "localhost";
    $username = "administrator";
    $password = "password";
    $dbname = "cheapoDB";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Checks connection to MySQL
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo 'Connected successfully';

    // SQL to create tables
    $sql1 = "CREATE TABLE User (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(16) NOT NULL,
    Lastname VARCHAR(16) NOT NULL,
    Password VARCHAR(16),
    Username VARCHAR(16),
    PRIMARY key(ID)
    )";
    
    $sql2 = "CREATE TABLE Message (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    body VARCHAR(255) NOT NULL,
    subject VARCHAR(32) NOT NULL,
    user_id INT(6),
    recipient_ids INT(6),
    PRIMARY key(ID)
    )";
    
    $sql3 = "CREATE TABLE Message_read (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    message_id VARCHAR(32) NOT NULL,
    reader_id VARCHAR(32) NOT NULL,
    date_ Date,
    PRIMARY key(ID)
    )";

    //Adding tables
    $testcon1=mysqli_query($conn, $sql1);
    $testcon2=mysqli_query($conn, $sql2);
    $testcon3=mysqli_query($conn, $sql3);
    
    //verification of table creation
    if ($testcon1) {
        echo "Table User created successfully";
    
        if ($testcon2){
        	 echo "Table Message created successfully";
    
        	 if ($testcon3){
        	 	 echo "Table Message_read created successfully";
        	 }
        }
    }
    else {
        echo "Error creating tables: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?> 
<?php include 'cheapo_database.php';?>

<?php
//if javascript validates true the following will execute

if (isset($_POST['submit'])){
	
	function validate_data ($data){
  	 $data = trim($data);
     $data = stripslashes($data);
     $data = strip_tags($data);
     $data = htmlspecialchars($data);
     $data = mysqli_real_escape_string($data);
     return $data; 
  }
  $fname = validate_data( $_POST['firstname'] );
  $lname= validate_data( $_POST['lastname'] );
  $usename = validate_data( $_POST['username'] );
  $password = validate_data( $_POST['password'] );
  
  $servername = "localhost";
  $username = "administrator";
  $password = "password";

// Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  mysql_select_db('cheapoDB');

  $insertdata="INSERT INTO User (firstname,lastname,password,username) VALUES ('$firstname', $lastname', '$username', '$password')";

//execute query
  mysql_query($conn,$insertdata);

  if (mysqli_query($conn, $sql)) {
    echo "New user added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  
}

?>
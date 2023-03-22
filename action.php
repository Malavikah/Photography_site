<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="studio";
$con =mysqli_connect("localhost", "root", "" ,"studio");

// get the post records
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

// database insert SQL code
$sql = "INSERT INTO contact (Id,Name,Email,Message) VALUES ('0','$Name','$Email','$Message')";

// insert in database 
if ($con->query($sql) === TRUE) {
	echo  ' <script>alert("record inserted")</script>';
  
} else {
	echo "Error: " . $sql . "<br>" . $con->error;
  }

?>

<?php
ob_start();
$fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $gender = $_POST['gender'];
 $ProfImage = $_POST['image'];
 $role = "U";


 
 //Database connection

 $conn = new mysqli("localhost","root",'',"users");
 if ($conn->connect_error) {
  die("connection failed: ".$conn->connect_error);
 }else{
  
  
  $sql = "INSERT INTO info (Firstname, Lastname, Email,Password,gender,role) VALUES ('$fname', '$lname', '$email','$pass','$gender','$role')";

if ($conn->query($sql) === TRUE) {
 echo '<script>alert("You have been registered successfully")</script>';
  header('Location: login.html');

} else {
  
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
ob_end_flush();
?>
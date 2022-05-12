<?php
ob_start();
include('DBconnection.php');
session_start();
$_SESSION['username'] = '';
    $_SESSION['password'] = '';
    $_SESSION['Firstname'] ='';
    $_SESSION['Lastname'] = '';
    $_SESSION['Email'] = '' ;
    $_SESSION['gender'] ='' ;
    $ID = $_SESSION['id'];
    $_SESSION['id'] = '';
    $_SESSION['role'] = '';
    $_SESSION['logged'] = '' ;
    $_SESSION['Loggedout'] = '';


$sql = "DELETE  from Security WHERE id = '$ID'";  
$result = mysqli_query($conn, $sql);
session_destroy();

header("Location: index.php");
echo('<script>alert("Logged out successfully")</script>');

ob_end_flush();
?>
<?php
include('DBconnection.php');
$ID = $_POST['USERID'];
echo $ID;
$sql = "DELETE  from info WHERE id = '$ID'";  
$result = mysqli_query($conn, $sql);

// header("Location: Admin.php");  


?>
<?php
    session_start();
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'U') {
      header("Location: User.php");
      
}elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'A') {
    header("Location: Admin.php");
}else{
    header("Location: login.html");
}
    
?>
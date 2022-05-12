<?php      
ob_start();

    include('DBconnection.php');  
    session_start();
   
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
        
      //user logon
        $sql = "select * from info where Email = '$username' AND Password = '$password' ";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['Firstname'] = $row['Firstname'] ;
    $_SESSION['Lastname'] = $row['Lastname'] ;
    $_SESSION['Email'] = $row['Email'] ;
    $_SESSION['gender'] = $row['gender'] ;
    $_SESSION['id'] = $row['id'] ;
    $_SESSION['role'] = $row['role'] ;
    $email = $row['Email'] ;
    $id= $row['id'] ;
    $role= $row['role'] ; 
    $sql2 ="INSERT INTO Security (ID,Email,Logged,Loggedout,role) VALUES ('$id','$email','1','0','$role')";
        $result2 = mysqli_query($conn, $sql2);  
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
        $count2 = mysqli_num_rows($result2);
        $_SESSION['logged'] = $row2['Logged'] ;
        $_SESSION['Loggedout'] = $row2['Loggedout'] ;

//-----------------security messuers------------------//

        if($count >= 1){
        if ($row['role']=="A") {
            
             header("Location: Admin.php");
          } else{
             header("Location: User.php?username='$username'&password='$password'");

              
         } 
          
        }  
        else{
            
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

        ob_end_flush();
?>  




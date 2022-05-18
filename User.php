<?php
ob_start();
include("DBconnection.php");


session_start();
if (!isset($_SESSION['role']) && $_SESSION['role'] != 'U') {
    while (TRUE) {
      // code...
      echo "<div id = 'logerr' align = 'center'></div>";
      echo "<script>var Email=prompt('Enter your Email First !');
            var pass=prompt('Enter your Password !');

             var x = document.createElement('FORM');
              x.setAttribute('id', 'myForm');
              x.setAttribute('action', 'login.php');
              x.setAttribute('method', 'POST');
              var img = document.createElement('IMG');
              img.src = 'imges/logo.jpg';
              img.setAttribute('width','400');
              img.setAttribute('height','250');
              var warn = document.createElement('IMG');
              warn.src = 'imges/warn.png';
              warn.setAttribute('width','700');
              warn.setAttribute('height','500');
              var z = document.createElement('INPUT');
              z.setAttribute('type', 'text');
              z.setAttribute('value', Email);
              var c = document.createElement('INPUT');
              c.setAttribute('value', pass);
              c.setAttribute('type', 'text');
              document.body.appendChild(x);
              var y = document.createElement('INPUT');
              y.setAttribute('type', 'submit');
              y.setAttribute('value', 'submit');
              document.getElementById('myForm').appendChild(y);
              var br = document.createElement('br');
              x.appendChild(c);
              x.appendChild(z);
              x.appendChild(br);
              x.appendChild(img);
              x.appendChild(warn);
              var s = document.getElementById('logerr');
              s.appendChild(x);

      </script>";

      
      
      exit();
    
    }
  }
$cookie_name = "user";
$cookie_value = $_SESSION['Firstname'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$cookie_name = "usrid";
$cookie_value = $_SESSION['id'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$username =$_SESSION['username'];
$password=$_SESSION['password'];
$sql = "select id,Firstname,Lastname,Email,role,gender from info where Email = '$username' and Password='$password'";  
$result = mysqli_query($conn, $sql);  
$ii = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);
$row = $ii;
$_SESSION['Firstname'] = $row['Firstname'] ;
$_SESSION['Lastname'] = $row['Lastname'] ;
$_SESSION['Email'] = $row['Email'] ;
$_SESSION['gender'] = $row['gender'] ;
$_SESSION['id'] = $row['id'] ;
$_SESSION['role'] = $row['role'] ;

    ?>


<html> 
<head>
    <link rel="stylesheet" type="text/css" href="falcon home.css">
    <script type="text/javascript" src="Java.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "icon" href = "imges/logo.jpg" type = "image/x-icon">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>hello <?php echo $_SESSION['Firstname']?></title>
</head>
 
 <body>

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="imges/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#UP"><h6 id="UP">HOME|</h6></a>
         
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT US|</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#valuse">OUR VALUSE|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#products">OUR PRODUCTS|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT US|</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Jobs.html">JOPs|</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="beans.html">Coffee Beans|</a>
        

      </li>
      <li>
        <a class="nav-link" href=""><?php echo "Logged in ". $_SESSION['Firstname']?></a>
      </li>
      
    </ul>
    
  </div>
</nav>
</section>
<div id="slider">
    <div id="header slider" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imges/er.jpg" class="d-block img-fluid">
      <div class="carousel-caption">
        <h3> let's make your day</h3>

    </div>
    </div>
    
    
  </div>
  
</div>
</div>
 <h1>User information</h1>

 
 <h1>
     <?php

   echo "name"." : ".$_SESSION['Firstname'];

 ?>
 
 </h1><br><hr>

 <h1>
     <?php
echo "Last name "." : ".$_SESSION['Lastname'];
     ?>
 </h1><br><hr>
 <h1>
     <?php
     echo "Email "." : ".$_SESSION['Email'];
     ?>
 </h1><br><hr>
  <h1>
     <?php
     echo "ID"." : ".$_SESSION['id'];
     ?>
 </h1><br><hr>
 <h1>
     <?php
     if ($_SESSION['role'] == "A") {
       echo "role"." : ADMIN";
     }else{
      echo "role"." : User";
     }
     
     ?>
 </h1><br><hr>
 <h1>
     <?php
     echo "Gender"." : ".$_SESSION['gender'];
     ?>
 </h1><br><br>

     <a href="Support.php"><button type="button" class="btn btn-primary" style="height: 10%;  id="BBB">Support</button></a><br>
<form action="logout.php" method="POST">
        <button type="submit" class="btn btn-primary" style="height: 10%; " >Log out</button><br><br><br>
 </form>

 </body>
 </html>

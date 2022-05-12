<?php
ob_start();
include("DBconnection.php");
session_start();
if (!isset($_SESSION['Logged']) && $_SESSION['role'] != 'A' && $_SESSION['Logged'] != '1') {
  echo "<strong>You are not allowed to request this page !</strong> <br><hr>";
  
  header('Location: index.php');
}

$cookie_name = "adminuser";
$cookie_value = $_SESSION['Firstname'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
$cookie_name = "adminid";
$cookie_value = $_SESSION['id'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

ob_end_flush();

class users {

  public $username;
  public $userID;
  public $userEmail;
  public $userLastname;


  public function __construct($username, $userLastname,$userID, $userEmail){
    $this->username = $username;
    $this->userID = $userID;
    $this->userEmail = $userEmail;
    $this->userLastname = $userLastname;
  }

  public function getfname(){
    return $this->username;
  }
  public function getlname(){
    return $this->userLastname;
  }
  public function getID(){
    return $this->userID;
  }
  public function getEmail(){
    return $this->userEmail;
  }
  
  
}

$sql = "select * from info WHERE role='U'";  
$result = mysqli_query($conn, $sql);  

$count = mysqli_num_rows($result);
$UsersArray = array();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

array_push($UsersArray, new users($row['Firstname'],$row['Lastname'],$row['id'],$row['Email']));


}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="Admin.css">
  <link rel = "icon" href = "imges/logo.jpg" type = "image/x-icon">
  <link rel="stylesheet" type="text/css" href="Admin.css">
  <script type="text/javascript" src="Java.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="js/jquery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="../dist/jspdf.debug.js"></script>
    <script type="text/javascript" src="js/basic.js"></script>
  <title>Admin</title>
</head>
<body>


<section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="imges/logo.jpg"></a>
    
  </button>
  <div class="navbar navbar-expand-lg navbar-light" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <form action="logout.php" method="POST">
        <button type="submit" class="BBB" style="height: 10%; " >Log out</button><br><br><br>
 </form>
     
      </li>
      <li>
        <title>hello <?php echo $_SESSION['Firstname']?></title>
      </li>
      
    </ul>
    
  </div>
</nav>
</section>

<script>
      function GenReportinside() {
      
         var  usersInfo = ( "<?php $sql = "select * from info WHERE role='U'";  
$result2 = mysqli_query($conn, $sql);  

$count = mysqli_num_rows($result2);
$ID=0;

while($info = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
  echo "Name: ".$info['Firstname']." ";
  echo "ID: ".$info['id']." ";
  echo "Email: ".$info['Email']." ";
} 
  ?>");


var users = usersInfo.split(" ");

var lMargin=15;
var rMargin=15; 
var pdfInMM=210;  
var doc = new jsPDF();
doc.setFont("helvetica");
doc.setFontType("bold");
doc.setFontSize(9);
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var img = new Image();
img.src = 'imges/logo.jpeg';
doc.addImage(img, 'png', 50,0);
doc.text(20, 50, 'Falcon Cafe');
doc.text(20, 60, 'System users Report');
doc.text(20, 70, date);
doc.text(50, 70, time);
doc.text(20, 80, '------------------------------------------------------------------------------------------------------------------------------------------------------------');
doc.text(10,95,'_____________________________________________________________________________________________');
line = 100;
pagec=0;
vert = 20;
var line_break=1;
for (var i = 0; i < users.length; i++) {
var lines =doc.splitTextToSize(users[i], (pdfInMM-lMargin-rMargin));
doc.text(vert,line,lines);
if (i%2!=0) {
  line+=10;
  vert = 20;
}else{
  vert = 40;

}


pagec+=1;
if (pagec == 30) {
  doc.addPage();
  
  line = 20;
  
pagec=0;
}
line_break+=1;
if (line_break == 6) {
    
  
    doc.text(10,line-1,'|');
    doc.text(10,line-2,'|');
    doc.text(10,line-3,'|');
    doc.text(10,line-4,'|');
    doc.text(10,line-5,'|');
    doc.text(10,line-6,'|');
    doc.text(10,line-7,'|');
    doc.text(10,line-8,'|');
    doc.text(10,line-9,'|');
    doc.text(10,line-10,'|');
    doc.text(10,line-11,'|');
    doc.text(10,line-12,'|');
    doc.text(10,line-13,'|');
    doc.text(10,line-14,'|');
    doc.text(10,line-15,'|');
    doc.text(10,line-16,'|');
    doc.text(10,line-17,'|');
    doc.text(10,line-18,'|');
    doc.text(10,line-19,'|');
    doc.text(10,line-20,'|');
    doc.text(10,line-21,'|');
    doc.text(10,line-22,'|');
    doc.text(10,line-23,'|');
    doc.text(10,line-24,'|');
    doc.text(10,line-25,'|');
    doc.text(10,line-26,'|');
    doc.text(10,line-27,'|');
    doc.text(10,line-28,'|');
    doc.text(10,line-29,'|');
    doc.text(10,line-30,'|');
    
    doc.text(10,line+5,'_____________________________________________________________________________________________');
    line_break=0;
}

}

doc.addPage();
img.src = 'imges/logo.jpeg';
doc.addImage(img, 'png', 50,0);
doc.text(20, 50, 'Falcon Cafe');
doc.text(20, 60, 'System users Report');
doc.text(20, 70, date);
doc.text(50, 70, time);
doc.text(20, 80, '-----------------------------------------------------------------------------------------------');
doc.text(20,90,"Total users: "+"<?php echo $count ?>");
doc.save('Falcon Report.pdf');


    }

    </script>

<button type="button" class="BBB" style="height: 100px; " onclick="GenReportinside()" >Generate a Report</button><br><br><br>
  
<div align="center">
  <div>

    
    <h3>
      <?php
      echo "Admin : ".$_SESSION['Firstname'];
      ?>
    </h3>
    <h3>
      <?php
      echo "Email : ".$_SESSION['Email'];
      ?>
    </h3>
    <hr>
  </div>
</div>
<div class="container">
      <h2  align="center">Operations</h2><hr>
    </div>
    <br>



  
  
    <div class="row valuse">

    <div class="col-md-3 text-center">
    <form action="remove.php" method="GET">
    <h1 class = "DEL" id = "DEL">Delete a User</h1>
    <input type="number" class="form" placeholder="User ID" required=""  id="USERID" name = "USERID"><br><br>
    <button type="submit" class="BBB" id="BBB">Submit</button><br>
          
        </form>
        </div>
        <div class="col-md-3 text-center">
            

            
            <h1>Search for a user</h1>
             <div class="form-group">
            <form action="" method="POST">
            <input type="text" placeholder="User ID or First name"required="" id="SearchUser" name = "SearchUser"><br><br>
            <input type="submit" class="BBB" ></button><br>
            </form><br><br>
             
          </div>
        </div>
        <div class="col-md-3 text-center">
            <img src="https://www.seekpng.com/png/detail/10-105423_under-construction-warning-sign-png-clipart-under-construction.png" width="100" height="100">
        </div>
        <div class="col-md-3 text-center">
            <img src="https://www.seekpng.com/png/detail/10-105423_under-construction-warning-sign-png-clipart-under-construction.png" width="100" height="100">
        </div>
      </div>
      
      <br><br>
</section>
<br><br>
        <?php
            if(isset($_POST['SearchUser'])){
                
                $found=false;
                $userID=$_POST['SearchUser'];
                $sql = "select * from info WHERE id='$userID' OR Firstname='$userID'";  
                $result = mysqli_query($conn, $sql);  
                
                $count = mysqli_num_rows($result);
                $UsersSearch = array();
                if($count == 0){
                    $found=false;
                }else{
                    $found = true;
                }
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                array_push($UsersSearch, new users($row['Firstname'],$row['Lastname'],$row['id'],$row['Email']));


            }
            $counter=0 ;
            ?>
            <h3 align="center">Search Results</h3><br><hr>
            <?php
while (count($UsersSearch) > $counter) {
    ?>
   
   <div class="row valuse">
    <div class="col-md-3 text-center">
    <div style="display: inline-block; float: left;">
    <div align="center"  id ='users' >
    <ul class="cards" id = "CARD" >
  <li>
    <a href="" class="card">
      <img src="imges/logo.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="imges/logo.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><?php 



echo $UsersSearch[$counter]->getfname()." ".$UsersSearch[$counter]->getlname();
?></h3>            
            <span class="card__status">User</span>
          </div>
        </div>

        <p class="card__description" style="color: navy;"><?php
echo "Email : ".$UsersSearch[$counter]->getEmail()."<br> ID : ".$UsersSearch[$counter]->getID();
      
      ?></p>
<form action='remove.php' method='POST'>
  
      <input type="hidden" class="form-control" placeholder="User ID"id="USERID" name = "USERID" value="<?php echo $UsersSearch[$counter]->getID()?>">
      <button type="submit" class="BBB">Delete</button>
      
      
</form>
      
      </div>
    </a>

  </li>
</ul>

</div >
</div>
</div>
</div>
<br><br>
    <?php
    $counter++;

  }
  
  if($found == false){
      echo "<h2 align='center' style='color : red'>no users found !</h2>";
  }
?>
<form method="POST">
<?php
echo "<button type='submit' name='clear' class='BBB' style='align: center;'>Close</button>";
?>
</form>
<?php
}
if(array_key_exists('clear', $_POST)) {
            clear();
        }

        function clear() {
    
    unset($_POST); //unsetting $_POST Array
    
        }

?>


 <h1 align="center">Falcon Cafe Users</h1>
</form><hr>
<a href="Support.php"><button type="submit" class="BBB" id="BBB">Support</button></a><br>
<ul class="cards"  >

  <?php

$ID=0;
$counter=0 ;
while (count($UsersArray) > $counter) {
    ?>
   
    <div style="display: inline-block; float: left;">
    <div align="center"  id ='users' >
    <ul class="cards" id = "CARD" >
  <li>
    <a href="" class="card">
      <img src="imges/logo.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="imges/logo.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><?php 



echo $UsersArray[$counter]->getfname()." ".$UsersArray[$counter]->getlname();
?></h3>            
            <span class="card__status">User</span>
          </div>
        </div>

        <p class="card__description" style="color: navy;"><?php
echo "Email : ".$UsersArray[$counter]->getEmail()."<br> ID : ".$UsersArray[$counter]->getID();
      
      ?></p>
<form action='remove.php' method='POST'>
  
      <input type="hidden" class="form-control" placeholder="User ID"id="USERID" name = "USERID" value="<?php echo $UsersArray[$counter]->getID()?>">
      <button type="submit" class="BBB">Delete</button>
      
      
</form>
      
      </div>
    </a>

  </li>
</ul>

</div >
</div>
    <?php
    $counter++;
  }
  
  ?>

<br><br><hr>


    
 <br><br><hr>
 


</body>

</html>


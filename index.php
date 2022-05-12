<?php
ob_start();
include("DBconnection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>FALCON CAFE</title>
	<link rel = "icon" href = "imges/logo.jpg" type = "image/x-icon">
	<link rel="stylesheet" type="text/css" href="falcon home.css">
	<script type="text/javascript" src="Java.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta name="description" content="Falcon Cafe, is a saudi coffee, with a good taste.">
    <meta name="keywords" content="falcon, coffee, cafe, saudi coffee, saudi arabia">
    <script data-ad-client="ca-pub-3495891821115809" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="Admin.css">
  <link rel="stylesheet" type="text/css" href="Admin.css">
  <script type="text/javascript" src="Java.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>


<body>

<!--- Navigation bar start---->

<section id="nav-bar" algin="center">
	<nav class="navbar navbar-expand navbar-light">
  <a class="navbar-brand" href="#"><img src="imges/logo.jpg"></a>
  

  <div class="collapse navbar-collapse">
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
        <a class="nav-link" href="Jobs.php">JOPs|</a>
      </li>

      <li class="nav-item">
      	<a class="nav-link" href="beans.php">Coffee Beans|</a>
        

      </li>
      <li>
      	<form action="loginPortal.php" method="POST">
        <button type="submit" class="Logout" style="height: 50px; width: 100px; color: white; background-color: blue; font-size: 20px; " >Log in</button><br><br><br>
 </form>
      	
      </li>
      
    </ul>
    
  </div>
</nav>
</section>

<!--- Navigation bar end---->

            
            <datalist id="products">
                <option>Latte</option>
                <option>Spinach Latte</option>
                <option>Dark roust</option>
                <option>Black coffee</option>
            </datalist>
             <div class="form-group">
                 
            <form action="" method="GET">
            <label align ="left">Search for a product</label>
            <input type="text" placeholder="product ID or name"required="" id="SearchProduct" name = "SearchProduct" list="products"><br><br>
            <input type="submit" class="btn btn-primary" align="center"></button><br>
            </form><br><br>
             
           <?php
            if(isset($_GET['SearchProduct'])){
                
                $found=false;
                $ProID=$_GET['SearchProduct'];
                $sql = "select * from Products WHERE Firstname='$ProID'";  
                $result = mysqli_query($conn, $sql);  
                
                $count = mysqli_num_rows($result);
                if($count>=1){
                    $found=true;
                }
                
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
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



echo $$row['Firstname']." ".$row['Lastname'];
?></h3>            
            <span class="card__status">Product</span>
          </div>
        </div>

        <p class="card__description" style="color: navy;"><?php
echo "Cost : ".$row['Email']."<br> ID : ".$row['id'];
      
      ?></p>
      
      </div>
    </a>

  </li>
</ul>

</div >
</div>
    <?php
    $counter++;
  }
  
            }
  
  
  ?>
 <?php
 
 if($found == true){
     
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

          </div>
          </div><br><br><br>
          
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


<!--- slider end---->


<!--- ABOUT US start---->

<section id="about">
	<div class="container">

		<div class="row">
			
			  <div class="col-md-6">
			  	 <h5>ABOUT US</h5>
			  	<div class="about-content">
			  		We've been watching our Dad f o r our whole lives -- over three decades. I'm 19, and i grow to watch them more closely. With more appreciation. For the last 40 years, they've dedicated their lives to serving  the people of dammam. By their example, in word and in deed, we've learned that our purpose in life is to serve. To serve people. To love people. To be there for people.

In April 2016, we transformed our bookstore into a cafe & shop concept, called FALCON CAFE. The purpose was to meet the needs of our congregation and community both physically and spiritually. Our congregation fell in love with the product and service. We knew we were on to something.
			  	</div>
			  	
			  </div>
			  <div class="col-md-6 skills-bar">
			  	<p> coffee Quality</p>
			  	<div class="progress">
			  		<div class="progress-bar" style="width: 100%;">100%</div>
			  	</div>
			  	
			  	<p> coffee taste</p>
			  	<div class="progress">
			  		<div class="progress-bar" style="width: 100%;">100%</div>
			  	</div>
			  	<p> coffee strongness</p>
			  	<div class="progress">
			  		<div class="progress-bar" style="width: 50%;">50%</div>
			  	</div>
			  	<p> Happy customers</p>
			  	<div class="progress">
			  		<div class="progress-bar" style="width: 100%;">100%</div>
			  	</div>


			  </div>
		</div>
		
	</div>

</section>

<!--- ABOUT US end---->

<!--- OUR VALUSE start---->
<section id="valuse">
	<div class="container">
		
		<h1> OUR VALUSE</h1>
	</div>
   <div class="row valuse">
   	
   	        <div class="col-md-3 text-center">
   		
   		         
   		         <h3> High Quality</h3>
   		         <p> we always care about our <br> products quality for our customers</p>
          	</div>

          	 <div class="col-md-3 text-center">
   		
   		         
   		         <h3> Fantastic Taste</h3>
   		         <p> we always care about our <br> products taste for our customers</p>
          	</div>

          	 <div class="col-md-3 text-center">
   		
   		         
   		         <h3> Performance</h3>
   		         <p> the performance is the most essintial part in our policy  </p>
          	</div>

          	<div class="col-md-3 text-center">
   		
   		         <div class="icon">
                 <i class="fas fa-mug-hot"></i>
   		         </div>
   		         <h3> customers advice</h3>
   		         <p> we always welcoming the advices <br> from our customers</p>
          	</div>

   </div>

</section>


<!--- OUR VALUSE end---->
<!--- OUR PRODUCTS start---->


<section id="products">
	
	<div id="container">
		
		<h1> OUR PRODUCTS</h1>
		<div class="row">
			
			
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/late.jpg" class="img-responsive">

				</div>
                 <h2> the famos LATE<br> RS 19</h2>
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/cara.jpg" class="img-responsive">
				</div>
                 <h2> caramel<br> RS 19</h2>
			</div>
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/m.jpg" class="img-responsive">

				</div>
                 <h2> spanish Late<br> RS 19</h2>

			</div>
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/moca.jpg" class="img-responsive">

				</div>
                 <h2> Moca<br> RS 19</h2>
			</div>
			
		</div>

		
	</div>

	
</section>



<!--- OUR PRODUCTS end---->

<!--- contact start---->

<section id="contact">
	<form action="mail.php" method="POST">
	
	<div class="container">
		
		<h1> get in touch</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form">
					
					<div class="form-group">
						<input type="email" class="form-control" placeholder="E-mail" required="" name = "FROM" id = "FROM">
					</div>

					<div class="form-group">
						<textarea  class="form-control" rows="5" placeholder="FeedBack" name = "MSG" id = "MSG"></textarea>
					</div>
					<input type="submit" class="btn-primary" style="height: 10%; width:20em; height:50px" ><br><br><br>
					
				</form>
			</div>
			<div class="col-md-6">
				
			</div>
		</div>
	</div>
	</form>
</section>

<!--- contact end---->

<!--- footer start---->

<section id="footer">
	
	<div class="container text-center">
		
	<ul class="copyright">
	<a href="https://www.iau.edu.sa/ar"> all rights&copy; belongs to imam abdulrahman bin faisal university 2022</a>
</ul>
     <br>
       
	</div>
</section>




<!--- footer end---->

</body> 
</html>
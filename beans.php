<?php 
session_start();

if($_POST){
// Avoid CSRF Attack !!
if(isset($_POST['token'])){
if($_SESSION['token'] == $_POST['token']){
     $from = $_POST['FROM'];
     $msg = $_POST['MSG'];
     header("Location: mail.php?from=$from&msg=$msg");
    //  header("Location: ../index.php?error=" . $result);
}
else{
    echo $_SESSION['token'];
    echo " ,, ";
    echo $_POST['token'];
    echo " ,, ";
    die("Invalid Token ... Rejecting");
}

}
}

$_SESSION['token'] = md5(uniqid(mt_rand(),true));

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="falcon home.css">
	<script type="text/javascript" src="Java.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

</head>
<body>

<section id="nav-bar">
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="imges/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><h6 id="UP">HOME|</h6></a>
         
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
        <a class="nav-link" href="Jobs.php">JOBs|</a>
      </li>

      <li class="nav-item">
      	<a class="nav-link" href="beans.php">Coffee Beans|</a>
        

      </li>
      <li>
      	<a class="nav-link" href=""><?php session_start(); if(isset($_SESSION['Firstname'])){
            echo "Logged in ". $_SESSION['Firstname'];
        }else{
            echo "<form action='loginPortal.php' method='POST'>
        <button type='submit' class='Logout' style='height: 50px; width: 100px; color: white; background-color: blue; font-size: 20px; ' >Log in</button><br><br><br>
 </form>";
        }
        ?></a>
      </li>
      
    </ul>
    
  </div>
</nav>
</section>


<div id="slider">
	<div id="header slider" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imges/12.jpg" class="d-block img-fluid">
      <div class="carousel-caption">
    	<h3 style="color:white;"> Its will makes a diffrent</h3>

    </div>
    </div>
    
    
  </div>
  
</div>
</div>


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
		
	</div>

</section>

		<hr>
		
<section id="products">
	
	<div id="container">
		
		<h1> OUR Beans</h1>
		<div class="row">
			
			
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/pro1.jpg" class="img-responsive">

				</div>
                 <h2>  Decaf Dark roast<br> RS 39</h2>
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/pro2.jpg" class="img-responsive">
				</div>
                 <h2> Med-high Roast<br> RS 39</h2>
			</div>
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/pro3.jpg" class="img-responsive">

				</div>
                 <h2> Decaf Light roast<br> RS 39</h2>

			</div>
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/pro4.jpg" class="img-responsive">

				</div>
                 <h2> Whole bean<br> RS 39</h2>
			</div>
			
		</div>

		
	</div>

	
</section>

	<form>
             		
             	<table align="center" bgcolor="#323030" border="3px solid" width="100%" height="25%" style="color: #fff; border-color: white;">

			       <tr><th>name</th> <br> <th>cal</th><br> <th>protein</th> </tr>
			        <tr><td>LATE</td> <br> <td>210 cal</td><br> <td>39 gram</td> </tr>
			         <tr><td>caramel</td> <br> <td>360cal</td><br> <td>27 gram</td> </tr>
			          <tr><td>spanish late</td> <br> <td>330cal</td><br> <td>33 gram</td> </tr>
			           <tr><td>moca</td> <br> <td>440cal</td><br> <td>20 gram</td> </tr>
			       
			   </table>
			</form>

	
</section>


<section id="contact">
	<form role="form" method="POST">
	
	<div class="container">
		<h1> Get in touch with us through email</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form">
					
					<div class="form-group">
						<input type="email" class="form-control" placeholder="E-mail" required="" name = "FROM" id = "FROM">
					</div>

					<div class="form-group">
						<textarea  class="form-control" rows="5" placeholder="FeedBack" name = "MSG" id = "MSG"></textarea>
					</div>
					<input type="submit" value="Write us an email !"class="btn-primary" style="height: 10%; width:20em; height:50px" ><br><br><br>
					<h3>session Token (Aviod CSRF)</h3><input type="text" readonly="readonly" class="form-control" name ="token" value="<?php echo $_SESSION['token']?>" id = "FROM">

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

</body>
</html>
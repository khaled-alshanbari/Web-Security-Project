<!DOCTYPE html>
<html>
<head>
	<title>FALCON CAFE</title>
	<link rel = "icon" href = "imges/logo.jpg" type = "image/x-icon">
	<link rel="stylesheet" type="text/css" href="falcon home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width , initial-scale=1.0">

</head>


<body>

<!--- Navigation bar start---->

<section id="nav-bar">
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="imges/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><h6 id="UP">HOME|</h6></a>
         
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#about">ABOUT US|</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php#valuse">OUR VALUSE|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#products">OUR PRODUCTS|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contact">CONTACT US|</a>
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

<!--- Navigation bar end---->

<!--- slider start---->


<div id="slider">
	<div id="header slider" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imges/cashh.jpg" class="d-block img-fluid">
      <div class="carousel-caption">
    	<h3> Join US !</h3>

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
In April 2016, we transformed our bookstore into a cafe & shop concept, called FALCON CAFE. The purpose was to meet the needs of our congregation and community both physically and spiritually. Our congregation fell in love with the product and service. We knew we were on to something.
To give back to our community we strive to keep our employees to be Saudi. We also buy or products from Saudi manufacturers to make sure our carbon footprint on the environment is as minimal as possible.
			  	</div>
			  	
			  </div>
			  <div class="col-md-6 skills-bar">
			  	<p> Saudization</p>
			  	<div class="progress">
			  		<div class="progress-bar" style="width: 100%;">100%</div>
			  	</div>
			  	
			  	<p> Emplyee's happiness</p>
			  	<div class="progress">
			  		<div class="progress-bar" style="width: 100%;">100%</div>
			  	</div>
			  	<p> Vacant Positions</p>
			  	<div class="progress">
			  		<div class="progress-bar" style="width: 70%;">70%</div>
			  	</div>
			  	<p> Insurance Coverage</p>
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
		
		<h1> OUR DUTIES</h1>
	</div>
   <div class="row valuse">
   	
   	        <div class="col-md-3 text-center">
   		
   		         
   		         <h3> Smile</h3>
   		         <p> we always welcome our <br> customers with a big smile</p>
          	</div>

          	 <div class="col-md-3 text-center">
   		
   		         
   		         <h3> Team Work</h3>
   		         <p> we always take care of our <br> colleagues for a better work environment</p>
          	</div>

          	 <div class="col-md-3 text-center">
   		
   		         
   		         <h3> Performance</h3>
   		         <p> the performance is the most essintial part in our policy  </p>
          	</div>

          	<div class="col-md-3 text-center">
   		
   		         <div class="icon">
                 <i class="fas fa-mug-hot"></i>
   		         </div>
   		         <h3> Critiques</h3>
   		         <p> we always welcoming the critics <br> so that we can improve</p>
          	</div>

   </div>

</section>


<!--- OUR VALUSE end---->
<!--- OUR PRODUCTS start---->


<section id="jobs">
	
	<div id="container">
		
		<h1> Our Job Positions</h1>
		<div class="row">
			
			
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/manager.jpeg" class="img-responsive">

				</div>
                 <h2> Store Manager</h2>
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/barista.jpg" class="img-responsive">
				</div>
                 <h2> Barista</h2>
			</div>
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/waiter.png" class="img-responsive">

				</div>
                 <h2> Coffee Server</h2>

			</div>
			<div class="col-md-3 profile-pic text-center">
				
				<div class="img-box">
					
				<img src="imges/cash.jpg" class="img-responsive">

				</div>
                 <h2> Cahsier</h2>
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
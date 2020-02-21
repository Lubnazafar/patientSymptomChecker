<?php
session_start();
if(!isset($_SESSION['username'])){
	$_SESSION['username'] = "";
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patient symptom checker</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="img/logoT.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    
   <style>
.dropbtn {
    background-color: white ;
    color: black;
    padding: 10px 26px;
	font-size: 17px;
  font-weight: 600;
    border: none;
    
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: white}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: white;
}
</style>


  </head>
  <body>

  

    <!-- Header Start -->
  <header>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
			 
              <div class="navbar-header">
               
               
                 <img src="img/logo.png" alt="Logo">
                </a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="checkup.php">Start Checkup</a></li>
                    <li><a href="doctors.php">Find a doctor</a></li>
                    
					   <div class="dropdown">
                      <button class="dropbtn">Sign In</button>
                     <div class="dropdown-content">
                     <a href="signIn.php">User Sign IN</a>
                     <a href="signup.php">Sign Up</a>
                       <a href="admin/login.php">Admin Sign In</a>
                      </div>
                        </div>
					
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
        
    <!-- Slider Start -->
    <section id="slider">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="block">
              <h1 class="animated fadeInUp">Concerned about your health? <br> Start your online checkup now!</h1>
              <p class="animated fadeInUp">Helping you undersatnd your symptoms better. </br>
			  <br>
			  <a href="checkup.php" title="Get a free Online Checkup" id="start-button" class="btn btn-success">
          Start checkup now
        </a></p>
		
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Wrapper Start -->
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>About Us</h2>
                <p>Patient sysmptom Checker provides valuable health information, tools for managing your health and support to those who seek medical information.</p>
              </div>
              <p>The PSC contains hundreds of symptoms which you can search and find relevent diseases.It provides authentic information on a wide range of medical and health topics.Access medical information and find directories of doctors.Our mission is to bring you objective, trustworthy, and timely health information. </p>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="img/wrapper-img.gif" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>
  
    <!-- Service Start -->
    <section id="service">
      <div class="container">
        <div class="row ">
          <div class="col-sm-6 col-md-4">
            <div class="service-item">
			<img src="img/pic1.png">
              <h4>Smart & Convienent</h4>
              <p>Patient Symptom Checker<br> 
			is based on interactive interface & <br>
		very easy to use.It is smart, convienent<br>
			  and completely free. </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
			<img src="img/pic2.png">
              <h4>Online Checkup</h4>
              <p>Patient Symptom Checker<br>
			is developed to bring you a safe<br>
			and effective way to evaluate<br>
			  your health problems. </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-5">
            <div class="service-item">
			<img src="img/pic3.png">
              <h4>Hundreds of symptoms</h4>
              <p>PSC contains hundreds of  <br>
		symptoms and conditions so you can  <br>
		     easily find the answers to your<br>
			 health concerns.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   



    
    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                <li><a href="index.php">About Us</a></li>
                <li><a href="doctors.php">Find a doctor</a></li>
                <li><a href="checkup.php">How it works</a></li>
                <li><a href="signIn.php">Sign In</a></li>
                
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
            
            
            
    
    </body>
</html>
<?php
session_start();
if(!isset($_SESSION['username'])){
	$_SESSION['username'] = "";
    header('location:profile.php');
}
?>
<!DOCTYPE html>
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
.intro{
	   background-color: #F5F5F5;	
	   padding-top: 10px;
	   padding-bottom: 10px;
}
.body {
 background-color: white;
    width: 1090px;
	height: 600px;
    padding: 25px;
    margin-left: 90px;
	margin-top: 0.1px;
	}
	
	.body1 {
 background-color: white;
    width: 200px;
	height: 500px;
    padding: 25px;
	margin-top: 0.1px;
	}
	
</style>
</head>
<body>


 <header>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
			 
              <div class="navbar-header">
               
                <a class="navbar-brand" href="index.html">
                 <img src="img/logo.png" alt="Logo">
                </a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="A-Z.html">Diseases A-Z</a></li>
                    <li><a href="doctors.html">Find a doctor</a></li>
                    <li><a href="signIn.php">sign In</a></li>
					 <li><a href="logout.php">Contact us</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
        
		
		<div class="intro">
		<div class="body">
		  <h3>Welcome <?php echo $_SESSION['username']; ?></h3>
		<div class="body1">
		My account
		<br>
		<a href="logout.php">Logout</a>
		</div>
		<br>
		<br>
		</div>
		</div>
		
		


    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Find a doctor</a></li>
                <li><a href="#">How it works</a></li>
                <li><a href="#">Sign In</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
            <p>Copyright &copy; Crafted by <a href="https://dcrazed.com/">Dcrazed</a>.</p>
          </div>
        </div>
      </div>
    </footer>

</body>
</html>
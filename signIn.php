<?php
session_start();
include_once('dbcon.php');

$error = false;
if(isset($_POST['btn-login'])){
    $email = trim($_POST['email']);
    $email = htmlspecialchars(strip_tags($email));

    $password = trim($_POST['password']);
    $password = htmlspecialchars(strip_tags($password));

    if(empty($email)){
        $error = true;
        $errorEmail = 'Please input email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = 'Please enter a valid email address';
    }

    if(empty($password)){
        $error = true;
        $errorPassword = 'Please enter password';
    }elseif(strlen($password)< 6){
        $error = true;
        $errorPassword = 'Password at least 6 character';
    }

    if(!$error){
        $password = md5($password);
		//echo $password;
        $sql = "select * from signup where email='$email' ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if($count==1 && $row['password'] == $password){
            $_SESSION['username'] = $row['username'];
            header('location: profile.php');
        }else{
            $errorMsg = 'Invalid Username or Password';
        }
    }
}

?>


<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patient Symptom Checker</title>
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

.fixed-bg {
    background: url("../img/slider-bg.jpg") no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-position: 10% 0%;
  padding: 200px 0 280px 0;
  position: relative;
}
h2 { 
   position: absolute; 
   top: 200px; 
   left: 0; 
   width: 100%; 
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
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo">
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                             <li><a href="index.php">Home</a></li>
                             <li><a href="checkup.php">start checkup</a></li>
                             <li><a href="doctors.php">Find a doctor</a></li>
                         
							   <div class="dropdown">
                              <button class="dropbtn">Sign In</button>
                             <div class="dropdown-content">
                              <a href="signIn.php">User Sign IN</a>
                             <a href="signup.php">Sign Up</a>
                           <a href="admin/login.php">Admin Sign In</a>
                       </div>
                        </div>
                            
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
          </div>
        </div>
        </header><!-- header close -->
        
   
        <!-- contact form start -->
	<div class="image">
  <img src="img/slider-bg.jpg" >
 <h2><form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">     
      <h4 class="form-signin-heading">Please login</h4>
	  <?php
                    if(isset($errorMsg)){
                        ?>
                        <div class="alert alert-danger">
                            
                            <h6><?php echo $errorMsg; ?></h5>
                        </div>
                        <?php
                    }
                ?>
				
				
      <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" autocomplete="off" />
	  <span class="text-danger"><h6><?php if(isset($errorPassword)) echo $errorPassword; ?></h6></span>
      <input type="password" class="form-control" name="password" placeholder="Password" required="" autocomplete="off" />    
      <span class="text-danger"><h6><?php if(isset($errorPassword)) echo $errorPassword; ?></h6></span>	  
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-login">Login</button>
	  
	  <h4><a href="signup.php">SIGN UP</a></h4></form>
   </h2>
	</div>
	
        

       
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
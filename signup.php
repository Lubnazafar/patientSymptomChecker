<?php
include_once('dbcon.php');

$error = false;
if(isset($_POST['btn-register'])){
    //clean user input to prevent sql injection
    $username = $_POST['username'];
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $email = $_POST['email'];
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $password = $_POST['password'];
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    //validate
    if(empty($username)){
        $error = true;
        $errorUsername = 'Please input username';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = 'Please a valid input email';
    }

    if(empty($password)){
        $error = true;
        $errorPassword = 'Please password';
    }elseif(strlen($password) < 6){
        $error = true;
        $errorPassword = 'Password must at least 6 characters';
    }

    //encrypt password with md5
    $password = md5($password);
	
    //insert data if no error
    if(!$error){
        $sql = "insert into signup(username, email ,password)
                values('$username', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
            $successMsg = 'Register successfully. <a href="signIn.php">click here to login</a>';
        }else{
            echo 'Error '.mysqli_error($conn);
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
#image {
    background-image: url(".../img/slider-bg.jpg");
    min-height: 500px;
	width: 800px;
    
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
                    <li><a href="checkup.php">Start Checkup </a></li>
                    <li><a href="doctors.php">Find a Doctor</a></li>
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
              
                <?php
                    if(isset($successMsg)){
                 ?>
                        <div class="alert alert-success">
                            
                           <h5> <?php echo $successMsg; ?></h5>
                        </div>
                <?php
                    }
                ?>  
      <h4 class="form-signin-heading">Create your account!</h4>
	  <input type="text" class="form-control" name="username" placeholder="UserName" required="" autofocus="" />
       <span class="text-danger"><?php if(isset($errorusername)) echo $errorusername; ?></span>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
	  <span class="text-danger"><?php if(isset($erroremail)) echo $erroremail; ?></span>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
      <span class="text-danger"><h6><?php if(isset($errorPassword)) echo $errorPassword; ?></h6></span>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-register">Get Started</button> 
	  <h4><a href="signIn.php">Login</a></h4>
    </form></h2>
     
   </div>
  
        <!-- Call to action Start -->
        <section id="call-to-action">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h2>We design delightful digital experiences.</h2>
                  <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
                  <a class="btn btn-default btn-call-to-action" href="#" >Tell Us Your Story</a>
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
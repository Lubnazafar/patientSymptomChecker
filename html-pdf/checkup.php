<?php
include_once('dbcon.php');

$error = false;
if(isset($_POST['submit'])){
   $gender= (isset($_POST['gender']) ? $_POST['gender'] : null);
    $gender = strip_tags($gender);
    $gender = htmlspecialchars($gender);
	
	  if(empty($gender)){
        $error = true;
        $errorgender = 'Please choose gender';
    }
   
   
   $age = (isset($_POST['age']) ? $_POST['age'] : null);
   $age = strip_tags($age);
    $age = htmlspecialchars($age);
	
	  if(empty($age)){
        $error = true;
        $errorage = 'Please select age';
    }
   
    $email = (isset($_POST['email']) ? $_POST['email'] : null);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
	
	 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $erroremail = 'Please enter a valid input email';
    }
   
   
   $sql = "INSERT INTO patient(gender, age, email) values('$gender', '$age', '$email')";
   
     $errormsg = 'duplicate entry';
   $result = mysql_query($sql);
   
if (mysqli_query($conn, $sql)) {
    $successMsg = ' <a href="result.php">Click here to go to next step</a>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Space template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
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
.intro{
   background-color: #F5F5F5;	
  padding-top: 20px;
  padding-bottom: 00px;
}
.body {
 background-color: white;
    width: 1050px;
	height: 1000px;
    padding: 25px;
    margin-left: 100px;
	margin-top: 0.1px;
	}
h3{
	font-family: Georgia, serif;
	   font-size: 38px;
  font-weight: 400;
  color: #8B0000;
	}
.online{
  background-color: #F5F5F5;
    width: 590px;
	height: 100px;
    padding-top: 15px;
	margin-top: 10px;
    margin-left: 10px;
	font-size: 17px;
	font-weight: 300px;
}
p{
	
	font-size: 17px;
	font-weight: 300px;
}
input {
    width: 25%;
}
.textbox {
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    background-color: #EAEAEA;
    background: -moz-linear-gradient(top, #FFF, #EAEAEA);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.0, #FFF), color-stop(1.0, #EAEAEA));
    border: 1px solid #CACACA;
    color: #444;
    font-size: 1.4em;
    padding: 5px 9px;
    width: 360px;
}
 .textbox:focus {
    background: #FFF;
    -webkit-box-shadow: 0 0 25px #CCC;
    -moz-box-shadow: 0 0 25px #ccc;
    box-shadow: 0 0 25px #CCC;
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    transform: scale(1.05);
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 55px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	margin-left: 190px;
    cursor: pointer;
	padding-left: 70px;
}

.button3 {
	border-radius: 6px;
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
                    <li><a href="A-Z.html">Diseases A-Z</a></li>
                    <li><a href="doctors.html">Find a doctor</a></li>
                    <div class="dropdown">
                      <button class="dropbtn">Sign In</button>
                     <div class="dropdown-content">
                     <a href="signIn.php">User Sign IN</a>
                     <a href="signup.php">Sign Up</a>
                       <a href="#">Admin Sign In</a>
                      </div>
                        </div>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
   <br>
	<br>
	

       
	<div class="intro">
<div class="body">
     <h3>Symptom Checker</h3>
	 <br>
	<p> welcome to PSC's online checkup, the smart way to find the care you may need.</p><br>
	 
	 <img src="img/pic8.png" width="230" height="400" align="right">
	 <div class="online"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Online checkups are for informational and educational purposes only and
	 should not be treated as a doctor's advice, a medical consultation, or a 
	 diagnosis.</div><br>
	 <br>
	 
	  
            
                
           <p> please fill in some basic information about yourself to personalize your online 
		   <br>checkup results.</p>
			<br>
			<form  action="checkup.php" method="POST" action = "<?php $_PHP_SELF ?>">
			
<p>What is your gender?</p>
<input type="radio" name="gender" value="female" required autofocus>female
<input type="radio" name="gender" value="male"> male
 <span class="text-danger"><?php if(isset($errorgender)) echo $errorgender; ?></span>


<br>
<p>What is your age?</p>
<input type="radio" name="age" value="18-30"  required autofocus> 18-30
<input type="radio" name="age" value="31-45"> 31-45<br>
<input type="radio" name="age" value="46-60"> 46-60 
<input type="radio" name="age" value="60+"> 60+
 <span class="text-danger"><?php if(isset($errorage)) echo $errorage; ?></span>


<br>
<br>
<br>
  <p>Your Email Address &nbsp &nbsp &nbsp
  <input type="email"  name="email"  placeholder="Enter your email" required autofocus>
	<br>
  	 <br>

<button class="button button3" type="submit" name="submit" >submit</button>

         <?php
                    if(isset($successMsg)){
                 ?>
                        <div class="alert alert-success">
                            
                           <h5> <?php echo $successMsg; ?></h5>
                        </div>
                <?php
                    }
                ?>  

</form>

  </p>      
</div>
</div>

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

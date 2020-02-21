<?php

     include_once('dbcon.php');

$error = false;

mysql_select_db( "project" ) or die( 'Error'. mysql_error() );

if (isset($_GET['disease'])){
$disease=$_GET['disease'];
echo $disease;

}


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
   
   
   
   <link href="work/css/bootstrap.min.css" rel="stylesheet">
 <link href=""https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
 <link href="work/dist1/css/bootstrap-tokenfield.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script scr="work/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script scr="work/jquery.ui.min.js"></script>
 <script scr="work/dist1/bootstrap-tokenfield.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>

   


<style>
a{
	text-decoration:none;
}
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

h3{
	   font-size: 30px;
  font-weight: 400;
  font-color: blue;
	}
p{
 
  color: black;
  padding-top: 10px;
  margin: 0;
  font-size: 16px;
  line-height: 2;
  font-weight: 200;
}
#content {
    height: 900px;
    background: white;
    width: 80%;
    padding-left:20px;
	padding-top:40px;
    box-sizing: border-box;
	margin-left: 130px;
}
p{
 
  color: black;
  padding-top: 10px;
  margin: 0;
  font-size: 16px;
  line-height: 1.8;
  font-weight: 300px;
}
#content input {
    width: 70%;
    font-size:20px;
    color: #424242;
    padding-right:40px;
}
#results{
    width:80%;
    display: none;
    bordder-bottom:1px solid black;
    bordder-left:1px solid black;
    bordder-right:1px solid black;
}
#results #item {
    box-sizing: border-box;
    padding:10px;
    font-size:18px;
    width: 100%;
    background: white;
    border-bottom:1px solid #bdbdbd;
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
                <a class="navbar-brand" href="index.php">
                 <img src="img/logo.png" alt="Logo">
                </a>
              </div>
			  
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="A-Z.html">Diseases A-Z</a></li>
                    <li><a href="doctors.php">Find a doctor</a></li>
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
 
	<div class="intro">
<div id="content">
   <h3>Disease description<h3>
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

   
   </body>
</html>

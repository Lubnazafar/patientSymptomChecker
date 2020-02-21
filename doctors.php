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
    <link rel="shortcut icon" href="img/logoT.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
	<script src="jquery.js"></script>
	<script src="js/require.js"></script>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + '/project/js/livereload.js?snipver=1"></' + 'script>')</script>
   
<script>
    $(document).ready(function () {
        $("#searchbox").on('keyup',function () {
            var key = $(this).val();

            $.ajax({
                url:'work/fetch.php',
                type:'GET',
                data:'keyword='+key,
                beforeSend:function () {
                    $("#results").slideUp('fast');
                },
                success:function (data) {
                    $("#results").html(data);
                    $("#results").slideDown('fast');
                }
            });
        });
    });
</script>



   
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


#landing-wrapper {
  display: table;
  width: 100%;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/pic5.jpg');
  background-position: center top;
  height: 650px;
  color: white;
}


.my-container {
    position: relative;
    overflow: hidden;
}
.my-container h1 {
    padding: 200px;
    position: relative;
    z-index: 2;
} 
.my-container img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: auto;
    opacity: 0.6;
}
div.transbox {
  margin: 30px;
 
 
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
padding-top: 80px;
  padding-left: 190px;
  margin: 3%;
  color: white;
  font-size: 38px;
}
div.transbox h4 {
  padding-left: 290px;
  margin: 3%;
  font-weight: 2%;
  color: white;
  font-size: 20px;
}

.section{
  padding-top: 40px;
  padding-left: 150px;
  padding-right: 30px;

}
.section p{
 font-family: san-serif; 
font-weight: 2%;
  color: blue;
  font-size: 26px;
}
.table{
padding-left: 20px;
}
table {
width: 90%;
font-weight: 2%;
}
.table td{
height: 50px;
font-family: san-serif; 
font-weight: 2%;
  color: blue;
  font-size: 20px;
}
#content {
    height: 80%;
    background: #ebebeb;
    width: 80%;
    padding:20px;
	margin-left: 130px;
	margin-bottom: 50px;
    box-sizing: border-box;
}
#content input {
    width: 80%;
    font-size:20px;
    color: #424242;
    padding:10px;
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
	<!--------------doctor directory--------------->
	
</div>
<div id="landing-wrapper">
   
   
   <div class="transbox">
    <p>Welcome To Doctor's Online Directory.</p>
	  <h4>Search for doctor's in pakistan.</h4>
  </div>
   
</div>

<div class="section">
<p>Search by specialty</p>
</div>
 
	  <div id="content">

	 <br>
	 <br>
 <div><input type="search" name="keyword" placeholder="Search doctors by specialty" id="searchbox">
  <div id="results"></div>
  
  </div>
  <br>
  <br>
  <div class="table">

<table>
			 <tr>
			<td><a href="Anesthesiologist.html">Anesthesiologist</td>                   
            <td><a href="Abdominal Surgeon.html">Abdominal Surgeon</td>
			 </tr>
			 
			 <tr>
			 <td><a href="Acupunturist.html">Acupunturist</td>
			 <td><a href="Addiction Psychiatrist.html">Addiction Psychiatrist  </td> 
            </tr>

           
			 <tr>
			  <td><a href="Allergist.html">Allergist</td>
             <td><a href="Anatomic pathologist.html">Anatomic pathologist</td>
			 </tr>
			 
			 <tr>
			 <td><a href="Breast_Surgeon.html">Breast Surgeon</td>
             <td><a href="Cardiologist.html">Cardiologist</td>
			 </tr>
			 <tr>
             <td><a href="Cardiothoracic Radiologist.html">Cardiothoracic Radiologist</td>
             <td><a href="Dermatologist.html">Dermatologist</td>
			 </tr>
			 
			 <tr>
             <td><a href="Diabetologist.html">Diabetologist</td>
			 <td><a href="Endocrinologist.html">Endocrinologist</td>
			 </tr>
			 
	
			<tr>
			<td><a href="Facial Plastic Surgeon.html">Facial Plastic Surgeon</td>                   
            <td><a href="Family Physician.html">Family Physician</td>
			</tr>
			
			<tr>
            
			 <td><a href="Gastroenterologist.html">Gastroenterologist</td>  
			 <td><a href="Urologist.html">Urologist</td>
             </tr>

             <tr>			 
            <td><a href="Gynecologist.html">Gynecologist</td>
             <td><a href="Hematologist.html">Hematologist</td>
			 </tr>
			 
			
			 
			 <tr>
			 <td><a href="Immunologist.html">Immunologist</td>
             <td><a href="Neonatalogist.html">Neonatalogist</td>
			 </tr>
			 
			 <tr>
             <td><a href="Neurologist.html">Neurologist</td>		 
             <td><a href="Psychiatrist.html">Psychiatrist</td>
			 </tr>
			 
			 <tr>
             <td><a href="Orthopaedic Surgeon.html">Orthopaedic Surgeon</td>
			 <td><a href="Pediatric Gastreonterology.html">Pediatric Gastreonterology</td>
			</tr>
			
		
			 <tr>
             <td><a href="Psychologist.html">Psychologist</td>		 
             <td><a href="Transplant Surgeon.html">	Transplant Surgeon</td>
			 </tr>
			 
			 
</table>
</div>
  
  
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
                      <li><a href="signIn.php">sign In</a></li>
                      
                    </ul>
                  </div>
                  
                </div>
            </div>
        </div>
    </footer>




        
    </body>
</html>

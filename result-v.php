
<?php include('php/post_symptoms.php');?>
<?php

/* SESSION VARIABLES TESTING
if(isset($_SESSION['name'] ) && 
	isset($_SESSION['gender'] )&&
	isset($_SESSION['age'] )&&
	isset($_SESSION['email'] )
	){
	echo 
	$_SESSION['name'].
	$_SESSION['gender'] .
	$_SESSION['age'] .
	$_SESSION['email'] ;
   
}
*/
?>
<!DOCTYPE html>
<html class="no-js">
   <head>
      <meta charset="utf-8">
      <title>Patient symptom checker</title>
      <!-- CSS -->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/ionicons.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/responsive.css">
	      <link rel="shortcut icon" href="img/logoT.png" type="image/x-icon">

	   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
      	<link rel="stylesheet" href="https://rawgit.com/dbrekalo/attire/master/dist/css/build.min.css">
        <link rel="stylesheet" href="dist/fastselect.css">
		<script src="https://rawgit.com/dbrekalo/attire/master/dist/js/build.min.js"></script>
        <script src="dist/fastselect.standalone.js"></script>


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
         font-size: 18px;
         line-height: 2;
         font-weight: 300;
         }
         #content {
         min-height: 1900px;
		 height: auto;
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
			th{font-size: 20px}
	    .fstElement { font-size: 1.2em; }
	    .fstToggleBtn { min-width: 16.5em; }
	    .submitBtn { display: none; }
	    .fstMultipleMode { display: block;width: 70%!important; }
	    .fstMultipleMode .fstControls { width: 70%; }
		
		.panel-default>.panel-heading {
			color: #f1f1f1;
			background-color: #268028;
			border-color: #3c763d;
		}
		.heading{
			padding-left: 40px;
			font-size: 20px;
			font-color: #268028;
			
		}
		.sym{
			font-size: 17px;
			 width: 300px;
			min-height: 100px;
			height: auto;
			box-sizing: border-box;
			padding-left: 80px;
		}
		.disc{
			font-size: 17px;
			padding-right: 30px;
			padding-left: 80px;
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
                           <a class="navbar-brand" href="index.php">
                           <img src="img/logo.png" alt="Logo">
                           </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           <ul class="nav navbar-nav navbar-right">
                              <li><a href="index.php">Home</a></li>
                              <li><a href="checkup.html">Start Checkup</a></li>
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
                        </div>
                        <!-- /.navbar-collapse -->
                     </div>
                     <!-- /.container-fluid -->
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- header close -->
      <br>
      <br>
      <div class="intro">
         <div id="content">
            <h3>Search & Enter Symptoms</h3>
            <p> Experiencing symptoms but not sure what they mean?<br>
               Type  your symptoms. Indicate as many as you can for the most accurate results..
            </p>
			
            <br>
            <br>
            <div class="container">
	           <div class="row">
	           		<div class="col-md-12">
	           			<form method="post">
				            
							<select class="multipleSymptoms" multiple name="symptoms[]">
				            </select>
				            <br>
				           <button class="btn btn-success">Submit</button>
			       		</form>
	           		</div>
	           	</div>
				
					
				
	           	<!-- DISPLAY TABLE -->
					<div class="row">
		           		<div class="col-md-10">
		           			<h1 style="font-size: 40px; text-align: center;">Disease Details</h1>
		       				<?php if(isset($diseases)){?>
							<div class="panel-group" id="accordion">
								<?php foreach ($diseases as $key=>$value) { ?>
								
									<div class="panel panel-default">
									  <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key;?>"><strong style="color: #333; text-transform: uppercase;font-size: 17px"><?php echo $value['disease']; ?></strong></a>
										</h4>
									  </div>
									  <?php if($key == 0){?>
									  
										  <div id="collapse<?php echo $key;?>" class="panel-collapse collapse in">
											<div class="panel-body">
												
												<?php if($flag){ ?>
													
													<div class="heading"><strong>symptoms : </strong></div><div class="sym"><?php if(isset($value['symptoms'])){echo $value['symptoms'];} ?></div></div>
													<div class="heading"><strong>Description : </strong></div><div class="disc"><?php if(isset($value['discription'])){echo $value['discription'];} ?></div><br>
													<div class="heading"><strong>Treatment & Medicine: </strong></div><div class="disc"><?php if(isset($value['treatment'])){echo $value['treatment'];} ?></div><br>
													<div class="heading"><strong>Doctor : </strong></div><div class="disc"><?php if(isset($value['doctor'])){echo $value['doctor'];} ?></div><br>
													
												<?php }else{echo"<h1> NO DATA FOUND </h1>";} ?>
											</div>
										  </div>
									  
									  <?php } else{?>
									  
										  <div id="collapse<?php echo $key;?>" class="panel-collapse collapse">
											<div class="panel-body">
												
												<?php if($flag){ ?>
													 <div class="heading"><strong>Symptoms : </strong></div><div class="sym"><?php if(isset($value['symptoms'])){echo $value['symptoms'];} ?></div>
													<div class="heading"><strong>Description : </strong></div><div class="sym"><?php if(isset($value['discription'])){echo $value['discription'];} ?></div>
													<div class="heading"><strong>Treatment : </strong></div><div class="sym"><?php if(isset($value['treatment'])){echo $value['treatment'];} ?></div>
													<div class="heading"><strong>Doctor : </strong></div><div class="sym"><?php if(isset($value['doctor'])){echo $value['doctor'];} ?></div>
												   
												<?php }else{echo"<h1> NO DATA FOUND </h1>";} ?>
											</div>
										  </div>
									  
									  <?php }?>
									</div>
								
								<?php }}?>
								
								<form action="html-pdf/hello.php" method="POST">
						   <button type="submit" id="start-button" class="btn btn-success">Get Full Report</button>
						   </form>
							</div>
				       	
						
						   
						</div>
						
						
		           	</div>
	           	<!-- DISPLAY TABLE END-->
				

            </div>
         </div>
      </div>
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer-manu">
                     
                  </div>
                 
               </div>
            </div>
         </div>
      </footer>
      <script type="text/javascript">
         $(document).ready(function() {

			$.ajax({
			    url:'php/get_symptoms_list.php',
			    type:'POST',
			    dataType: 'json',
			    success: function( json ) {
			    	console.log(json);
			        $.each(json, function(i, value) {
			            $('.multipleSymptoms').append($('<option>').text(value['symptom']).attr('value', value['symptomId']));
			        });
			    }
			});

            $('.multipleSymptoms').fastselect();

         });
      </script>
   </body>
</html>


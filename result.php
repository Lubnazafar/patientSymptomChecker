
<?php

     include_once('dbcon.php');

     $error = false;

mysql_select_db( "project" ) or die( 'Error'. mysql_error() );
$string = file_get_contents("result.php");
$json = json_decode($string, true);
if(isset($_POST['sym'])){

foreach($_POST['sym'] as $val)
{
$sym[] = (int) $val;
}
$sym = join(', ', $sym);
// fetch diseases query
$query = "SELECT * FROM `tbl_diseases` left join ( tbl_rel right join tbl_symptoms on tbl_rel.symptomID = tbl_symptoms.symptomID) on tbl_diseases.diseaseID = tbl_rel.diseaseID
where tbl_symptoms.symptom IN ('$sym') group by tbl_diseases.diseaseID ";
$run= mysql_query($query) or die($query."<br/><br/>".mysql_error());


while($row=mysql_fetch_array($run)){
	$disease = $row['disease'];



?>
	<div style="background-color:green;width:300px;"><?php echo '<a href="' . $disease . '.html">' . $disease . '</a>' ?></div>

<?php }}?>



<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Patient symptom checker</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">




 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  




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
	<br>



<div class="intro">
<div id="content">
<h3>Search & Enter Symptoms</h3>
	<p> Experiencing symptoms but not sure what they mean?<br>
	 Type  your symptoms. Indicate as many as you can for the most accurate results..</p><br>
	 <br>
	 <div class="container">
	<form>


		<div class="form-group">
			<label>Add symptoms:</label><br/>
			<input type="text" name="tags" placeholder="Tags" class="typeahead tm-input form-control tm-input-info"/>
		</div>

		<div class="form-group">
			<button class="btn btn-success">Submit</button>
		</div>

	</form>
</div>
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

<script type="text/javascript">
  $(document).ready(function() {
    var tagApi = $(".tm-input").tagsManager();

    jQuery(".typeahead").typeahead({
      name: 'tags',
      displayKey: 'name',
      source: function (query, process) {
        return $.get('work/ajaxpro.php', { query: query }, function (data) {
          data = $.parseJSON(data);
          return process(data);
        });
      },
      afterSelect :function (item){
        tagApi.tagsManager("pushTag", item);
      }
    });
  });
</script>

</body>
</html>

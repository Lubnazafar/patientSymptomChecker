<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<style>
a{
	text-decoration:none;
}
</style>
</head>
<body>


 
<form method="POST" action="test.php">
     <input type="search" ng-model="name" name="sym" placeholder="serach for diseases">
	 

      <input type="submit" name="submit">	
	  
	 </form>
	 
</body>
</html>
<?php

     include_once('dbcon.php');

$error = false;

mysql_select_db( "project" ) or die( 'Error'. mysql_error() );

if(isset($_POST['sym'])){
	$sym=$_POST['sym'];
    $array=array();


$query = "SELECT * FROM `tbl_diseases` left join ( tbl_rel right join tbl_symptoms on tbl_rel.symptomID = tbl_symptoms.symptomID) on tbl_diseases.diseaseID = tbl_rel.diseaseID 
where tbl_symptoms.symptom IN ('$sym') group by tbl_diseases.diseaseID ";
$run= mysql_query($query) or die($query."<br/><br/>".mysql_error());

while($row=mysql_fetch_assoc($run)){
	$disease = $row['disease'];
	
	

	 

?>	 
	<div style="background-color:white;width:300px;"><?php echo '<a href="' . $disease . '.php">' . $disease . '</a>' ?></div>
	
<?php }}?>


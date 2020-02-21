<?php

     include_once('dbcon.php');

     $error = false;

mysql_select_db( "project" ) or die( 'Error'. mysql_error() );
$string = file_get_contents("result.php");
$json = json_decode($string, true);
if(isset($_POST['sym'])){
$sym = array();
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

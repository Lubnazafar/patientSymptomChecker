<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';


	$mysqli =  mysqli_connect($servername, $username, $password, $dbname);

	

	$sql = "SELECT symptomID, symptom FROM tbl_symptoms
			WHERE 1 
			ORDER BY symptom ASC"; 

	$result = $mysqli->query($sql);

	$json = [];
	$counter = 0;
	while($row = $result->fetch_assoc()){
	     $json[$counter]['symptom'] = $row['symptom'];
	     $json[$counter]['symptomId'] = $row['symptomID'];
	     $counter++;
	}

	echo json_encode($json);

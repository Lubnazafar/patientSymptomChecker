<?php 
//This is Database Connection file
include_once('../dbcon.php');
//Here YOu Select Database
mysql_select_db( "project" ) or die( 'Error'. mysql_error() );

//This array will Hold all the details of disease, like you show in Table
$diseases=[];


	
	$symptoms = [2];
	
	$query = "SELECT * FROM `tbl_diseases` left join ( tbl_rel right join tbl_symptoms on tbl_rel.symptomID = tbl_symptoms.symptomID) on tbl_diseases.diseaseID = tbl_rel.diseaseID 
	where tbl_symptoms.symptomID IN (".implode(',', $symptoms).") group by tbl_diseases.diseaseID ";
	
	

	$run= mysql_query($query) or die($query."<br/><br/>".mysql_error());
	$counter = 0;
	
	while($row=mysql_fetch_assoc($run)){
		
		
		
		$r= mysql_query("SELECT * FROM `tbl_dis_data` where `diseaseID`=".$row['symptomID']);
		
		$diseases[$counter]['treatment'] 		= $r['treatment'];
		$diseases[$counter]['discription'] 	    = $r['dis_discription'];
		$diseases[$counter]['doctor'] 			= $r['doctor'];
		$diseases[$counter]['diseaseID']        = $r['diseaseID'];
		
		
		$diseases[$counter]['disease'] = $row['disease'];
		$diseases[$counter]['symptom'] = $row['symptom'];
		
		$counter++;
		 
	}

print_r($diseases);die();
?>
<?php 
session_start();
//This is Database Connection file
include_once('dbcon.php');

//mysql_select_db( "project" ) or die( 'Error'. mysql_error() );

//This array will Hold all the details of disease, like in Table
$diseases=[];
$flag = false;
if(isset($_POST['symptoms']))
{

	
	$symptoms = $_POST['symptoms'];
	
	//$name = $_POST['']
	
	//
	
	
	$query = "SELECT * FROM `tbl_diseases` left join ( tbl_rel right join tbl_symptoms on tbl_rel.symptomID = tbl_symptoms.symptomID) on tbl_diseases.diseaseID = tbl_rel.diseaseID 
	where tbl_symptoms.symptomID IN (".implode(',', $symptoms).") group by tbl_diseases.diseaseID limit 8";
	
	

	$run= mysqli_query($conn, $query) or die($query."<br/><br/>".mysql_error());
	$counter = 0;

	while($row=mysqli_fetch_assoc($run)){
		
		
		
		$r= mysqli_query($conn, "SELECT * FROM `tbl_dis_data` where `diseaseID` = ".$row['diseaseID']);
		while($data=mysqli_fetch_assoc($r)){
			if(!empty($data))
			{
				$flag = true;
				
				//print_r($data['treatment']);die();
				$diseases[$counter]['symptoms']        = $data['dis_symptoms'];
				$diseases[$counter]['treatment'] 		= $data['treatment'];
				$diseases[$counter]['discription'] 	    = $data['dis_discription'];
				$diseases[$counter]['doctor'] 			= $data['doctor'];
				$diseases[$counter]['diseaseID']        = $data['diseaseID'];
				
			}else{
				
				$diseases[$counter]['treatment'] 		= '';
				$diseases[$counter]['discription'] 	    = '';
				$diseases[$counter]['doctor'] 			= '';
				$diseases[$counter]['diseaseID']        = '';
			}
		}
		
		
		
		$diseases[$counter]['disease'] = $row['disease'];
		
		
		$counter++;
		 
		
		
		
		 
	}
	
	$disease = [];
	foreach($diseases as $d)
	{
		$disease[] = $d['disease'];
		
	}
	
	$allDisease = implode(", ",$disease);
	$_SESSION['allDisease'] = $allDisease;
	
	//print_r($diseases['disease']);die('end');
}

?>
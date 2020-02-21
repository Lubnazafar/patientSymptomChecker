<?PHP
session_start();
require('WriteHTML.php');
 

$name = isset($_SESSION['name']) ? $_SESSION['name'] : ' ';
$gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : ' ';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : ' ';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : ' ';
$allDisease = isset($_SESSION['allDisease']) ? str_replace(',', '<br>',$_SESSION['allDisease']) : ' ';

 $template = "
 
 <para><h1> <u>Patient Symptom Checker Report Diagnosis </u></para><br>
 <br>
 <br>
 Please note that the online checkup report provided, which is based on the information available in our databases,is solely for informational 
 and recreational purposes and is not aqualifiedmedical opinion.The results arrive dat by Symptomate should not be considered the advice or opinion of a doctor or other
 health professional concerning your medical condition,and you should see a doctor about any symptoms you may have. 
 If you are experiencing a health emergency, call your local emergency number immediately to request emergency medical assistance. 
 <br>
 <br>
 NAME : $name  <br>
 GENDER : $gender <br>
 AGE : $age<br>
 EMAIl : $email<br>
 ALL DISEASE : <br>
 <br>$allDisease<br>


 ";
 
 $pdf=new PDF_HTML();
 
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);
 
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML($template);
 
$pdf->SetFont('Arial','B',12); 

$pdf->Output();
?>

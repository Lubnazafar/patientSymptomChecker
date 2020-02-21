<?php
 include_once('dbcon.php');

 if(isset($_POST['submit']))
 {
 // Get values from form 
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
 }

// Insert data into mysql 
$sql="INSERT INTO patient(gender, age, email)VALUES('$gender', '$age', '$email')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='result.php'>Back to main page</a>";
}

 
?>
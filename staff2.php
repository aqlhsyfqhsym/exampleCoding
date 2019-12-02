<?php
require('db.php');
session_start();
$stafficnum = $_SESSION['stafficnum']; 

// $stafficnum = $_POST['stafficnum'];
// $staffpassword = $_POST['staffpassword'];
$staffname = $_POST['staffname'];
$staffaddress = $_POST['staffaddress'];
$staffphone = $_POST['staffphone'];
$staffemail = $_POST['staffemail'];
$staffposition = $_POST['staffposition']; 
 
	
	$sql = "UPDATE staff set staffname = '$staffname' , staffaddress = '$staffaddress', staffphone = '$staffphone', staffemail = '$staffemail', staffposition = '$staffposition' 
	       WHERE stafficnum = '$stafficnum'";
	$result = mysqli_query($mysqli, $sql);
	
	
	if($result) //success  
	   {
	   	
			mysqli_commit($mysqli);
			Print '<script>alert("Your information has been updated.");</script>'; 
			Print '<script>window.location.assign("staff.php?stafficnum='.$stafficnum.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($mysqli);

			Print '<script>alert(" Update fail, try again next time.");</script>'; 
			Print '<script>window.location.assign("staff.php?stafficnum='.$stafficnum.'");</script>'; 		
		}
?>
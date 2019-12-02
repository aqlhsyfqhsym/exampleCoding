<?php 
 
 session_start(); 
 $contactid = $_GET['contactid'];
 
  include 'db.php';

  $sql = "DELETE FROM contact where contactid='$contactid'";

 $result = mysqli_query($mysqli, $sql);

 if($result)
 {
 	mysqli_commit($mysqli);
		Print '<script> alert("User has been emailed.") </script>'; 
		Print '<script>window.location.assign("staffcontactlist.php?contactid='.$contactid.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($mysqli);

			Print '<script>alert(" Failed emailed to user ");</script>'; 
			Print '<script>window.location.assign("staffcontactlist.php?contactid='.$contactid.'");</script>'; 		
		}

?>
<?php 
 
 session_start(); 
 $userName = $_GET['userName'];
 
  include 'db.php';

  $sql = "DELETE FROM fbfeedback where userName='$userName'";

 $result = mysqli_query($mysqli, $sql);

 if($result)
 {
 	mysqli_commit($mysqli);
		Print '<script> alert("Feedback has been response.") </script>'; 
		Print '<script>window.location.assign("stafffeedbacklist.php?userName='.$userName.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($mysqli);

			Print '<script>alert("Fail to delete feedback form");</script>'; 
			Print '<script>window.location.assign("stafffeedbacklist.php?userName='.$userName.'");</script>'; 		
		}

?>
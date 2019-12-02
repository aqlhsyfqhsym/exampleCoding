<?php 
 
 session_start(); 
 $username = $_GET['userName'];
 
  include 'db.php';

  $sql = "DELETE FROM user where userName='$username'";

 $result = mysqli_query($mysqli, $sql);

 if($result)
 {
 	mysqli_commit($mysqli);
		Print '<script> alert("User has been deleted.") </script>'; 
		Print '<script>window.location.assign("staffuserlist.php?username='.$username.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($mysqli);

			Print '<script>alert("Fail to delete");</script>'; 
			Print '<script>window.location.assign("staffuserlist.php?username='.$username.'");</script>'; 		
		}

?>
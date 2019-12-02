<?php 
 
 session_start(); 
 $stafficnum = $_GET['stafficnum'];
 
  include 'db.php';

  $sql = "DELETE FROM staff where stafficnum='$stafficnum'";

 $result = mysqli_query($mysqli, $sql);

 if($result)
 {
 	mysqli_commit($mysqli);
		Print '<script> alert("Staff has been deleted.") </script>'; 
		Print '<script>window.location.assign("stafflist.php?stafficnum='.$stafficnum.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($mysqli);

			Print '<script>alert("Fail to delete");</script>'; 
			Print '<script>window.location.assign("stafflist.php?stafficnum='.$stafficnum.'");</script>'; 		
		}

?>
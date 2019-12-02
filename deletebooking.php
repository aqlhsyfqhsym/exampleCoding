<?php 
 
 session_start(); 
 $bookID = $_GET['bookID'];
 
  include 'db.php';

  $sql = "DELETE FROM bookingts where bookID='$bookID'";

 $result = mysqli_query($mysqli, $sql);

 if($result)
 {
 	mysqli_commit($mysqli);
		Print '<script> alert("Customer booking has been deleted.") </script>'; 
		Print '<script>window.location.assign("staffcustomerbooking.php?bookID='.$bookID.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($mysqli);

			Print '<script>alert("Fail to delete");</script>'; 
			Print '<script>window.location.assign("staffcustomerbooking.php?bookID='.$bookID.'");</script>'; 		
		}

?>

<?php
require('db.php');

if (isset($_REQUEST['submit']))
{
        // removes backslashes
  $firstname = stripslashes($_REQUEST['firstname']);
  $firstname = mysqli_real_escape_string($mysqli,$firstname);

    $lastname = stripslashes($_REQUEST['lastname']);
  $lastname = mysqli_real_escape_string($mysqli,$lastname);

    $country = stripslashes($_REQUEST['country']);
  $country = mysqli_real_escape_string($mysqli,$country);

   $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($mysqli,$email);

    $subject = stripslashes($_REQUEST['subject']);
    $subject = mysqli_real_escape_string($mysqli,$subject);
  
$sql = "INSERT into contact VALUES ('','$firstname','$lastname','$country','$email', '$subject')";

$result = mysqli_query($mysqli,$sql);
if($result)
{
    mysqli_commit($mysqli);
    Print '<script> alert("Your contact form has been sent to our admin.\n Our staff will email to you soon.") </script>'; 
     print '<script>window.location.assign("home.html");</script>';  
    
}
      
else
    { 
      mysqli_rollback($mysqli); 
      Print '<script>alert("Fail to send, please try again later");</script>'; 
      Print '<script>window.location.assign("contact.php");</script>';   
}

}
?>
 
 




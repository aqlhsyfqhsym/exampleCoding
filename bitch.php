
<?php
// require('db.php');
session_start();

// If form submitted, insert values into the database.
if (isset($_REQUEST['submit']))
{
        // removes backslashes
//   $fname = stripslashes($_REQUEST['first_name']);
//   $fname = mysqli_real_escape_string($mysqli,$fname);
//   $lname = stripslashes($_REQUEST['last_name']);
//   $lname = mysqli_real_escape_string($mysqli,$lname);
//   $email = stripslashes($_REQUEST['email']);
//   $email = mysqli_real_escape_string($mysqli,$email);
//   $username = stripslashes($_REQUEST['username']);
//   $username = mysqli_real_escape_string($mysqli,$username); 
//   $password = stripslashes($_REQUEST['password']);
//   $password = mysqli_real_escape_string($mysqli,$password);
//   $address = stripslashes($_REQUEST['address']);
//   $address = mysqli_real_escape_string($mysqli,$address);
//   $city = stripslashes($_REQUEST['city']);
//   $city = mysqli_real_escape_string($mysqli,$city);
//   $state = stripslashes($_REQUEST['state']);
//   $state = mysqli_real_escape_string($mysqli,$state);
//   $postal = stripslashes($_REQUEST['postal']);
//   $postal = mysqli_real_escape_string($mysqli,$postal);
//   $contact = stripslashes($_REQUEST['contact']);
//   $contact = mysqli_real_escape_string($mysqli,$contact);

//   $gender = stripslashes($_REQUEST['gender']);
//   $gender = mysqli_real_escape_string($mysqli,$gender);

//   $dob = stripslashes($_REQUEST['dob']);
//   $dob = mysqli_real_escape_string($mysqli,$dob);
//   $trn_date = date("d-m-y H:i:s");

// $sql = "INSERT into user VALUES ('','$username','$password','$fname', '$lname','$address', '$city', '$state', '$postal', '$contact','$email', '$gender', '$dob', '$trn_date')";

$result = mysqli_query($mysqli,$sql);
if($result)
{
    mysqli_commit($mysqli);
    print '<script>window.location.assign("yey.php");</script>';  
    $_SESSION['username'] = $_POST['username'];
}
      

else
    { 
    // mysqli_rollback($mysqli);
    echo " Opss... the server is under maintenace, try again later ";
}

}
?>
<!-- ====================================================================================================================================================================================================================================================== ==================================================================================================================================================================== ==================================================================================================================================================================== ==================================================================================================================================================================== ==================================================================================================================================================================== -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="registrationStyle.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body>

<div class="w3-content w3-section" >
  <img class="mySlides" src="img/b4.png" style="width:100%">
   <img class="mySlides" src="img/b5.png" style="width:100%">

</div>

<script>
      var myIndex = 0;
      carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
</script>

<div class="form">
     
<h1 align="center">
    <font size="6" face="verdana" color="#0000" style="font-family: Andale Mono, monospace;" >REGISTER NEW MEMBER</font></h1><hr>
    
   <h3 align="center"><font seiz="6" face="verdana" style="font-family: Andale Mono, monospace;" color="black" > PLEASE FILL IN THIS FORM TO CREATE YOUR ACCOUNT. </font></h3>
 
  <form name="registration" action="" method="post" >

   <p align="center" style="color: black">
  <input type="text" name="first_name" placeholder=" First Name" style="width: 25%;" required   />
  <input type="text" name="last_name" placeholder=" Last Name" style="width: 25%;" required /> <br><br>
  <input type="email" name="email" placeholder=" Email" required /> <br><br>
 
  <input type="text" name="username" placeholder=" Username" style="width: 25%;" required /> 
  
  <input type="password" name="password" placeholder=" Password" style="width: 25%;" required /><br><br>
  <input type="text" name="address" placeholder=" Address"  required /> <br><br> 
  <input type="text" name="city" placeholder=" City" style="width: 16%;" required />
  <input type="text" name="state" placeholder=" State" style="width: 16%;" required />
  <input type="text" name="postal" placeholder=" Postal" style="width: 16%;" required /> <br><br> 
  <input type="contact" name="contact"  placeholder=" Contact" required /><br><br>
 <select name="gender" style="width: 50%;">
  <option  value="female"> Female</option>
  <option   value="male"> Male</option>
</select><br><br>
  <input placeholder=" Date of birth" name="dob" class="textbox-n" type="text" onfocus="(this.type='date')"  id="date"><br><br>
  <input type="submit" name="submit" value="Register" /> 
</p>
</form>
 

</div>

 
</form>
</div>
</body>
</html>






<?php
require('db.php');
session_start();

// If form submitted, insert values into the database.
if (isset($_REQUEST['submit']))
{
        // removes backslashes
  $fname = stripslashes($_REQUEST['first_name']);
  $fname = mysqli_real_escape_string($mysqli,$fname);
  $lname = stripslashes($_REQUEST['last_name']);
  $lname = mysqli_real_escape_string($mysqli,$lname);
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($mysqli,$email);
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($mysqli,$username); 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($mysqli,$password);
  $address = stripslashes($_REQUEST['address']);
  $address = mysqli_real_escape_string($mysqli,$address);
  $city = stripslashes($_REQUEST['city']);
  $city = mysqli_real_escape_string($mysqli,$city);
  $state = stripslashes($_REQUEST['state']);
  $state = mysqli_real_escape_string($mysqli,$state);
  $postal = stripslashes($_REQUEST['postal']);
  $postal = mysqli_real_escape_string($mysqli,$postal);
  $contact = stripslashes($_REQUEST['contact']);
  $contact = mysqli_real_escape_string($mysqli,$contact);

  $gender = stripslashes($_REQUEST['gender']);
  $gender = mysqli_real_escape_string($mysqli,$gender);

  $dob = stripslashes($_REQUEST['dob']);
  $dob = mysqli_real_escape_string($mysqli,$dob);
  $trn_date = date("d-m-y H:i:s");

$sql = "INSERT into user VALUES ('','$username','$password','$fname', '$lname','$address', '$city', '$state', '$postal', '$contact','$email', '$gender', '$dob', '$trn_date')";

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
<title> REGISTER NEW MEMBER </title>
<link rel="stylesheet" href="registrationStyle.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

 <style type="text/css">
  body{
  font-family: 'Open Sans', sans-serif;
  background-image: url("img/login.png");
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  float: right;
  background:white;
  width:500px;
  border-radius:6px;
  margin: 100 auto 0 auto;
  margin-right: 30%;
  margin-top:3%;
  margin-bottom:3%;
  padding:6px  0px 0px 0px;
  border: #333333 4px solid; 
  opacity: 0.8;
 
}

 

.username
{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  height: 10px;
  color:#AAAAAA;
  margin-top:5px;
  font-size:1em;
  border-radius:4px;
}

.username2
{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:270px;
  height: 33px;
  color:#AAAAAA;
  margin-top:5px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  height: 10px;
  font-size:1em;
}

.btn{
  background:#a0a29d;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #a0a29d 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:185px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#656664; 
}

#btn2{
  float:left;
  background:#a0a29d;
  width:125px;  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #a0a29d 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  margin-left:10px;
  font-weight:800;
  font-size:0.8em;
}

#btn2:hover{ 
background:#656664; 
}
</style>


<script type="text/javascript">
  function field_focus(field, usernme)
  {
    if(field.value == username)
    {
      field.value = '';
    }
  }

  function field_blur(field, username)
  {
    if(field.value == '')
    {
      field.value = username;
    }
  }

//Fade in dashboard box
$(document).ready(function(){
    $('.box').hide().fadeIn(1000);
    });

//Stop click event
$('a').click(function(event){
    event.preventDefault(); 
  });
</script>

<body>


<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

 <form method="post" action="">
  <div class="box">

    <h1> REGISTER NEW MEMBER </h1><br><hr> 

  <input type="text" name="first_name"  onFocus="field_focus(this, 'first_name');" onblur="field_blur(this, '');" placeholder="First Name" class="username" style="width: 30%;" /> 
 
   <input type="text" name="last_name"  onFocus="field_focus(this, 'last_name');" onblur="field_blur(this, '');" placeholder="Last Name" class="username"  style="width: 30%;"/><br><br>


<input type="email" name="email"  onFocus="field_focus(this, 'email');" onblur="field_blur(this, '');" placeholder="Email" class="username" style="width: 50%;" required/><br><br>

<input type="text" name="username" value="username" onFocus="field_focus(this, 'username');" onblur="field_blur(this, ' ');" class="username" style="width: 30%;" required/ >

<input type="password" name="password" value="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="password" style="width: 30%;" required/><br><br>

<input type="text" name="address" onFocus="field_focus(this, 'address');" onblur="field_blur(this, ' ');" placeholder="Address"  class="username"  "/> <br>

<input type="text" name="city" onFocus="field_focus(this, 'city');" onblur="field_blur(this, ' ');" placeholder="City" class="username" style="width: 20%;"/>

<input type="text" name="state" onFocus="field_focus(this, 'state');" onblur="field_blur(this, ' ');" placeholder="State" class="username" style="width: 20%;"/>

<input type="text" name="postal" onFocus="field_focus(this, 'postal');" onblur="field_blur(this, ' ');" placeholder="Postal" class="username" style="width: 20%;"/><br><br>

<input type="text" name="contact" onFocus="field_focus(this, 'contact');" onblur="field_blur(this, ' ');" placeholder="Contact" class="username" required/><br><br>

 <select class="username2" name="gender" placeholder="Gender">
  <option> Gender </option>
  <option  value="female"> Female</option>
  <option   value="male"> Male</option>
</select> <br><br>

<input placeholder="Date of birth" name="dob" class="username" type="text" onfocus="(this.type='date')"  id="date"><br><br>
 
  <button type="submit" name="submit" value="Register" class="btn" > Register </button>

<!--   <p align="center" style="color: black"> -->
 <!--  <input type="text" name="first_name" placeholder=" First Name" style="width: 25%;" required   /> -->


  <!-- <input type="text" name="last_name" placeholder=" Last Name" style="width: 25%;" required /> <br><br> -->
<!--   <input type="email" name="email" placeholder=" Email" required /> <br><br> -->
 
  <!-- <input type="text" name="username" placeholder=" Username" style="width: 25%;" required />  -->
<!--   
  <input type="password" name="password" placeholder=" Password" style="width: 25%;" required /><br><br> -->



<!--   <input type="text" name="address" placeholder=" Address"  required /> <br><br>  -->
<!--   <input type="text" name="city" placeholder=" City" style="width: 16%;" required />
 -->  <!-- <input type="text" name="state" placeholder=" State" style="width: 16%;" required /> -->
 <!--  <input type="text" name="postal" placeholder=" Postal" style="width: 16%;" required /> <br><br>  -->
<!--   <input type="contact" name="contact"  placeholder=" Contact" required /><br><br> -->

<!--  <select name="gender" style="width: 50%;">
  <option  value="female"> Female</option>
  <option   value="male"> Male</option>
</select><br><br>
 -->

<!--   <input placeholder=" Date of birth" name="dob" class="textbox-n" type="text" onfocus="(this.type='date')"  id="date"><br><br> -->
<!--   <input type="submit" name="submit" value="Register" />  -->
</p>
</div>
</form>
 
<!-- 
</div>

 
</form>
</div> -->
</body>
</html>





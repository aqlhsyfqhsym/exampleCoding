
<?php
require('db.php');
session_start(); 

// If form submitted, insert values into the database.
if (isset($_REQUEST['submit']))
{
        // removes backslashes

  $staffname = stripslashes($_REQUEST['staffname']);
  $staffname = mysqli_real_escape_string($mysqli,$staffname); 

  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($mysqli,$password);

  $stafficnum = stripslashes($_REQUEST['stafficnum']);
  $stafficnum = mysqli_real_escape_string($mysqli,$stafficnum);

 
  $staffaddress = stripslashes($_REQUEST['staffaddress']);
  $staffaddress = mysqli_real_escape_string($mysqli,$staffaddress); 

  $staffphone = stripslashes($_REQUEST['staffphone']);
  $staffphone = mysqli_real_escape_string($mysqli,$staffphone);

  $staffemail = stripslashes($_REQUEST['staffemail']);
  $staffemail = mysqli_real_escape_string($mysqli,$staffemail);

  $staffposition = stripslashes($_REQUEST['staffposition']);
  $staffposition = mysqli_real_escape_string($mysqli,$staffposition);

  $staffgender = stripslashes($_REQUEST['staffgender']);
  $staffgender = mysqli_real_escape_string($mysqli,$staffgender);

   
  $staffbirth = stripslashes($_REQUEST['staffbirth']);
  $staffbirth = mysqli_real_escape_string($mysqli,$staffbirth);

  $trn_date = date("d-m-y H:i:s");

$sql ="INSERT into staff VALUES('', '$password' , '$staffname' , '$stafficnum' ,'$staffaddress' , '$staffphone' , '$staffemail' , '$staffposition' , '$staffgender' , '$staffbirth' , '$trn_date' )" ;

$result = mysqli_query($mysqli,$sql);
if($result)
{
    mysqli_commit($mysqli);
    print '<script>window.location.assign("staff.php");</script>';  
    $_SESSION['staffname'] = $_POST['staffname']; 
    $_SESSION['stafficnum'] = $_POST['stafficnum']; 

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
<title> STAFF | REGISTRATION </title>
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
  height: 35px;
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

    <h1> REGISTER NEW STAFF </h1><br><hr> 

  <input type="text" name="stafficnum" id="stafficnum" onFocus="field_focus(this, 'stafficnum');" onblur="field_blur(this, '');" placeholder="IC" class="username" style="width: 28%;" required/> 

  <input type="password" name="password"  onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" placeholder="Password" class="password" style="width: 28%;" required/><br><br>

 
   <input type="text" name="staffname"  onFocus="field_focus(this, 'staffname');" onblur="field_blur(this, '');" placeholder="Full Name" class="username"  style="width: 60%;"/><br><br>


<input type="text" name="staffaddress"  onFocus="field_focus(this, 'staffaddress');" onblur="field_blur(this, '');" placeholder="Your Address" class="username" style="width: 60%;" required/><br><br>


<input type="text" name="staffphone"  onFocus="field_focus(this, 'staffphone');" onblur="field_blur(this, ' ');" placeholder ="Phone Number" class="username" style="width: 60%;" required/ ><br><br>

 

<input type="email" name="staffemail" onFocus="field_focus(this, 'staffemail');" onblur="field_blur(this, ' ');" placeholder="Staff Email" class="username" style="width: 60%;" required/> <br><br>

 

 <select class="username2" name="staffposition" placeholder="Current Position">
  <option> Position </option>
  <option  value="Analyst"> Analyst </option>
  <option   value="Designer">Designer </option>
  <option  value="Tester"> Tester </option>
  <option   value="Programmer"> Programmer </option>
</select> <br><br>

 <select class="username2" name="staffgender" placeholder="Gender">
  <option> Gender </option>
  <option  value="female"> Female</option>
  <option   value="male"> Male</option>
</select> <br><br>


<input placeholder="Date of birth" name="staffbirth" class="username" type="text" onfocus="(this.type='date')"  id="date"><br><br>
 
  <button type="submit" name="submit" value="Register" class="btn" > Register </button>

</p>
</div>
</form>
 
</body>
</html>





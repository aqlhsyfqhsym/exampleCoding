<?php
require('db.php');

session_start();
 
// $password =  $_POST['password'];
// $username =$_POST['username'];

// If form submitted, insert values into the database.
 
if (isset($_REQUEST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($mysqli,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($mysqli,$password);
  // Checking is user existing in the database or not
 
        $sql = "SELECT * FROM `user` WHERE username='$username'
and password='$password'";
  $result = mysqli_query($mysqli,$sql) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
            // Redirect user to index.php
         header("Location: main.php");
        $_SESSION['username'] = $_POST['username'];

         }
         else
         {
  echo  '<script>


  var txt;
    if (confirm("USERNAME/PASSWORD NOT FOUND \n Sign In again?"))
     {
        Location: login.php;
    }
     else
      {
        Location: home.html;
    }

    </script>';
  }
}
   
?>



<html>
<head>
<meta charset="utf-8">
<title> USER | LOGIN </title>
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
  background:white;
  width:300px;
  border-radius:6px;
  margin: 100 auto 0 auto;
  padding:50px 100px 150px 100px;
  border: #333333 4px solid; 
  opacity: 0.8;
 
}

.username{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
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
  margin-left:16px;
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

<body  >




<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

<form method="post" action="">
<div class="box">


  <img src="img/logoo.png" style="width: 100%;   padding-top:0px;" >
  <h1> </h1><br>


<input type="text" name="username" value="username" onFocus="field_focus(this, 'username');" onblur="field_blur(this, 'username');" class="username" /><br><br>
  
<input type="password" name="password" value="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="password" />
  
 
  <button type="submit" class="btn" >Sign In</button>


 <!-- End Btn -->

<a href="registration.php"><div id="btn2"><b>Sign Up</b></div></a> <!-- End Btn2 -->
  
</div> <!-- End Box -->
  
</form>

 





</body>
</html>
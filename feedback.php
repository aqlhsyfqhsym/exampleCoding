<?php
require('db.php');
session_start();

$username = $_SESSION['username']; 


// If form submitted, insert values into the database.
if (isset($_REQUEST['submit']))
{
	
        // removes backslashes

  $fullName = stripslashes($_REQUEST['name']);
  $fullName = mysqli_real_escape_string($mysqli,$fullName);

  // $username = stripslashes($_REQUEST['username']);
  // $username = mysqli_real_escape_string($mysqli,$username);

  $fbopt = stripslashes($_REQUEST['opt']);
  $fbopt = mysqli_real_escape_string($mysqli,$fbopt);

  $fbwhere = stripslashes($_REQUEST['where1']);
  $fbwhere = mysqli_real_escape_string($mysqli,$fbwhere);

  $fbHow = stripslashes($_REQUEST['how']);
  $fbHow = mysqli_real_escape_string($mysqli,$fbHow); 

  $fbOpt1 = stripslashes($_REQUEST['opt1']);
  $fbOpt1 = mysqli_real_escape_string($mysqli,$fbOpt1);

  $fbrecommend = stripslashes($_REQUEST['recommend']);
  $fbrecommend = mysqli_real_escape_string($mysqli,$fbrecommend);

  $fbRate = stripslashes($_REQUEST['rate']);
  $fbRate = mysqli_real_escape_string($mysqli,$fbRate);

  $fbComment = stripslashes($_REQUEST['comment']);
  $fbComment = mysqli_real_escape_string($mysqli,$fbComment);
  $trn_date = date("d-m-y H:i:s");
 

    $sql = "INSERT into fbfeedback  VALUES (' ','$username' , '$fullName','$fbopt','$fbwhere', '$fbHow','$fbOpt1', '$fbrecommend', '$fbRate', '$fbComment','$trn_date')";

	$result = mysqli_query($mysqli,$sql);
		if($result)
		{
		    mysqli_commit($mysqli);
		    print '<script>
        <script type="text/javascript">
            function doneSubmit();{
              var ask = window.confirm(" FEEDBACK SUBMITTED \n Thank you for your feedback "<?php echo $username ?>" ");
              if (ask) {
       
                     window.location.href = "main.php";

              }</script>';  
		}


		else
		    { 
		    mysqli_rollback($mysqli);
		    echo " Opss... the server is under maintenace, try again later ";
		}

}

?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="feedbackStyle.css" />
	 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- tab header -->
 <meta name="viewport" content="width=device-width, initial-scale=1"> 

 <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="wsidth=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!-- ===================================NAV BAR========================= -->
<div id="navbar"> 
   <a><span  style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> </a>
    <a href="main.php" style="text-align: center;"> <b> GATEAWAY</b> Travel Agency</a>
    <button class="button1 button6" >BUY A TICKET</button>
</div>

<div class="header" >
	<img src="head0.png" style="width: 100%;"></div>

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
 
  <a href="main.php#aboutus">About Us</a>
  <a href="main.php#buyticket">FAQ</a>
  <a href="logout.php">Logout</a> 
  </div>
 
<script>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
   
<!--  ==========================NABVAR====================================== -->


<body>

	<center>
	<div class="bg-img">
		  <form action=" " class="container" id="feedbackForm">

<!-- =============================INSIDE FORM============================== -->
  
  	<h1 align="center"><font  face="verdana" color="#0000" style="font-family: Andale Mono, monospace;" ><b>GATEAWAY</b> Travel Feedback</font></h1><hr>

<font style="font-family:Andale Mono, monospace;" >
    <input type="text" name="username" placeholder="<?php echo $username ?>"disabled >

    <input type="text" placeholder="Full Name" name="name" required>

     <div class="radioLeft">

  			<p>1. Have you ever heard about <b>GATEAWAY</b> Travel Agency's Website?<br></p>
		      <input type="radio" name="opt" value="yes"> Yes<br>
			  <input type="radio" name="opt" value="no"> No<br> 

			 <p>2. Where do you heard about <b>GATEAWAY</b> Travel Agency's Website?<br></p>
		      <input type="checkbox" name="where1" value="Twitter"> Twitter<br>
			  <input type="checkbox" name="where1" value="Facebook"> Facebook<br> 
			  <input type="checkbox" name="where1"  value="Ads"> Ads<br>
			  <input type="checkbox" name="where1"  value="Friends/family"> Friends/Family<br> 

			  <p>3. How often do you visit our website? </p>
		     	 <select name="how" >
					  <option value="daily">Daily</option>
					  <option value="often">Often</option> 
					  <option value="never">Never</option> 
				 </select><br><br>

			   <p>4. Does our website useful and helpful in your travel ? <br></p>
		         <input type="radio" name="opt1" value="Yes"> Yes 
             <input type="radio" name="opt1" value="No"> No <br>  
			    <br>

			  <p>5.How likely would you be to recommend <b>GATEAWAY</b> Travel Agency's Website?<br></p>
		       <select name="recommend" >
					  <option value="unlikely"> Unlikely</option>
					  <option value="neutral">  Neutral</option> 
					  <option value="likely"> Likely </option> 
				</select><br><br>

				<p>6. how would you rate your satisfaction about <b>GATEAWAY</b> Travel Agency's Website?<br></p>
			        <input type="radio" name="rate" value="1"> 1 
				  	 <input type="radio" name="rate" value="2"> 2 
				  	 <input type="radio" name="rate" value="3"> 3
				  	 <input type="radio" name="rate" value="4"> 4
				  	 <input type="radio" name="rate" value="5"> 5 <br> <br> 

               <p>7. Comment about our website <br></p>
		     		 <textarea rows="4" cols="50" name="comment" form="feedbackForm" style="width: 50%;" placeholder="Comment...">
					 </textarea> <br><br>
				</div>
 </font>
 

    <button type="submit" name="submit" class="btn" onclick="doneSubmit();">Send Feedback</button>


<!--===============================INSIDE FORM============================== -->

  </form>
</div>

</center> 

<div class="column6">
<div class="row3">
  <div class="column3" style="background-image: url(spanBackground.png)" >  

   <!--  <p align="left" style="padding-left: 30px;"><font size="6"><h1><b>G A T E A W A Y</b> TravelAgency</h1><br><br></p> -->
    <p align="left" > <font size="6" style="color: black;"><b>GATEAWAY</b> Travel Agency </font><br><br></p>
 <!--  SITEMAP & LOCATION -->
 
    <table align="left">
      <tr >
        <td><p><font size="5px" ><b>SITEMAP</b></font>

      <br> Home    
      <br> Destination
      <br> Attraction 
      <br> Feedback
      <br> About      
      <br> FAQ  
      <br>
    </p> 
       </td>
      </tr>

      <tr>
        <td><p><font size="5px" ><b><br>SOCIAL</b></font>


      <br> Twitter  
      <br> Facebook
      <br> Instagram 
       <br><br><br>
    </p> 
       </td></tr>
    </table> 
<!-- SOCIAL -->
   <table align="left">
      <tr>
        <td style="padding-left: 30px;"><p><font size="5px"  ><b>LOCATION</b></font>

        <br> N019.
      <br> Jalan February    
      <br> 1998/02 
      <br> Cyberjaya  
      <br> Kuala Lumpur
    </p> 
       </td>
      </tr>
    </table>
<!-- make reservation -->
<table align="left">
      <tr>
        <td style="padding-left: 30px;"><p><font size="5px"  ><b>&nbsp;&nbsp;BUY A TICKET</b></font>
        <br>
      &nbsp;<button class="button button5">BUY A TICKET</button></p><br>&nbsp;&nbsp;&nbsp;Tel : 0199845611<br><br><br>
       </p>
       </td>
      </tr>
    </table>
</td>
 
  </div>
  <div class="column4" style="background-color:#262525;">
   <p align="left" > <font size="6" style="color: white; "><b>T R A V E L - M O R E  </b> </font>
<font size="5"  style="font-family: DejaVu Sans Mono, monospace; color: black;">
      <br> 
      <br> <a href="http://cuticuti-malaysia.com/">CUTI-CUTI MALAYSIA </a>
      <br> <a href="http://www.wonderfulmalaysia.com/malaysia-general-country-information.htm">WONDERFUL MALAYSIA </a>
      <br> <a href="http://www.malaysia.travel/en/my">TOURISM MALAYSIA</a>
       <br> <a href="https://www.studymalaysia.com/international/why-study-in-malaysia/about-malaysia">STUDY MALAYSIA</a>
        <br> <a href="https://www.lonelyplanet.com/malaysia">LONELY PLANET</a>
          <br> <a href="home.html">GATEAWAY AGENCY</a>
       <br> <br>
       <br><br>  
       </font></p>
    </div>
  </div>
</div>

  <footer><b>GATEAWAY</b>Travel Agency 2018. All rights reserved</footer>
   <footer style="background-color: #333333 "><font color="black">Copyright <b>G A T E A W A Y </b>Travel Agency</font></footer>
</body>




</html>
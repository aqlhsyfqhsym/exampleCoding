 <?php
require('db.php'); 
session_start();

$staffname = $_SESSION['staffname'];    
$stafficnum = $_SESSION['stafficnum']; 


     $sql = "SELECT * FROM `staff` WHERE `stafficnum`='$stafficnum'";
     $result = mysqli_query($mysqli, $sql);
     $row = mysqli_fetch_assoc($result);
?>


<html>
<head> 
 <title>| STAFF | UPDATE INFORMATION  </title>
<link href='staffstyle.css' rel="stylesheet">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
</head>


<style type="text/css">
	
 .design
 {
  width: 300px;
  margin-top: 5%;
  border-radius: 5px;
 }

table
{
	border-radius: 10px;
	background-color: white;
	 }

th, td
{
	 border: 1px solid #ddd;
	border-radius: 5px; 
	font-family: OCR A Std, monospace; 
}


td
{
	text-align: right;
}

h1
{
	font-family:Palatino, URW Palladio L, serif;
	background-color: #fbf8f8;
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
  float:center;
  
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#656664; 
} 

</style>
<!-- ==================START===================== -->

<div id="navbar"> 
   <a><span  style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> </a>
    <a href="staff.php" style="text-align: center;"> <b> GATEAWAY</b> Travel Agency | Administrator Page</a>
    
</div>

<div class="header" >
<!-- 	<img src="head0.png" style="width: 100%; margin-top:5% "></div> -->

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
   
<a href="staffuserlist.php">User List</a>
  <a href="stafflist.php">Staff List</a> 
  <a href="stafffeedbacklist.php">Feedback List</a>
  <a href="staffcontactlist.php">Contact User</a>
  <a href="staffcustomerbooking.php">Customer Booking</a>
  <a href="staffinfo.php">Update your information</a>
  <br><br>
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

<body background="img/login2.png">
<div class="box">
<br><br> <hr></h1><br>
 <center>
<!-- ================FORM=================== -->
<form action="staff2.php" method="POST">
	
<table border=2 cellpadding=10 >

<tr>
	<th colspan="2" align="center"> Your Details </th>
</tr>


<tr>
	 <td width="30%"> Staff IC </td> 
	 <td> <input type="text" name="stafficnum" class="design" id="stafficnum" value='<?=$row['stafficnum'];?>'  readonly> <br> <br> </td>
</tr>

<tr> 
 <td> Name  </td> 
 <td> <input type="text"  name="staffname" class="design" id="staffname" placeholder='<?=$row['staffname'];?>' required> <br><br> </td>
</tr>

<tr>
 <td> Address  </td> 
 <td> <textarea type="text"  name="staffaddress" class="design" id="staffaddress" placeholder='<?=$row['staffaddress'];?>' required></textarea><br><br> </td>
</tr>

<tr>
<td> Phone Number  </td> 
<td> <input type="text"  name="staffphone" class="design" id="staffphone" placeholder='<?=$row['staffphone'];?>' required> <br><br> </td>
</tr>

<tr>

<td> Email  </td> 
<td> <input type="text"  name="staffemail" class="design" id="staffemail" placeholder='<?=$row['staffemail'];?>' required> <br><br> </td>
</tr>

<tr>

<td> Position </td>
<td> <select type="text" name="staffposition" id="staffposition" class="design" placeholder="'<?=$row['staffposition'];?>'" >
	  <option  placeholder="Analyst"> Analyst </option>
	  <option   placeholder="Designer" >Designer </option>
	  <option  placeholder="Tester"> Tester </option>
	  <option   placeholder="Programmer"> Programmer </option>
</select><br><br> </td>
</tr>

<tr> <th colspan="2">
<!--  <button type="submit" class="button" name="submit" > UPDATE </a> -->
<!-- </button>  -->

<a href="staff2.php?stafficnum ='.$row['stafficnum'].'" ><button type="submit" class="btn btn-danger" role="button" name=submit>UPDATE</button></a>
</th>
</tr>
	 </table>
	
</form>
</center>

<!--  ============================end feedback======================= -->
</div>




</body>
</html>

 <?php
require('db.php');
session_start();
$staffname = $_SESSION['staffname']; 
?> 

<html>
<head> 
 <title> STAFF FEEDBACK LIST </title>
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

<style type="text/css">
  
  table
{
  border-radius: 10px;
  margin-right: 10px;
  margin-left: 10px;
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

tr:nth-child(even) {
    background-color: #f2f2f2
}

h1, sub
{
  font-family:Palatino, URW Palladio L, serif;
  background-color: #fbf8f8;
  text-align: center;
}

.column2 {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row2 {margin: 50 -5px;}

/* Clear floats after the columns */
.row2:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column2 {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #3b3b3b;
  color: white;
  font-family: URW Chancery L, cursive;
  border-radius: 25px;
}

.fa {font-size:50px;}

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


<body background="img/login2.png">
<div class="box">

 

<!-- ========================================end user======================= -->
	<div id="stafflist">
        
        <h1> <br><br>&nbsp;&nbsp;USERS FEEDBACK <br><sub> &nbsp;&nbsp;&nbsp;&nbsp;FEEDBACKS LIST FROM USERS</sub> </h1>

<?php

$sql = "SELECT * FROM fbfeedback ";
  $result = mysqli_query($mysqli, $sql);
     $row = mysqli_fetch_assoc($result);


if ($result->num_rows >  0) 
{
    echo "<table border=2 cellpadding=5 cellspacing=2 align=center>
         <tr>
           <th> ID</th>
           <th>Username</th>
           <th>Name</th>
           <th>Heard GATEAWAY? </th>
           <th>Where</th>
           <th>How Often?</th>
           <th>Is it useful?</th>
                <th>Would Recommend?</th>
                <th>Rate <br> 1-5</th> 
                 <th>Comment </th> 
                <th>Feedback Date</th> 
                <th> Action </th> 
               
        </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print '<tr>
                 <td>' . $row["fbID"]. '</td>
                 <td>' . $row["userName"]. '</td>
                 <td>' . $row["fbName"]. '</td>
                 <td>' . $row["fbOpt"]. '</td>
                 <td>' . $row["fbWhere"]. '</td>
                 <td>' . $row["fbHow"]. '</td>
                 <td>' . $row["fbOpt1"]. '</td>
                 <td>' . $row["fbRecommend"]. '</td>
                 <td>' . $row["fbRate"]. '</td>
                 <td>' . $row["fbComment"]. '</td>
                 <td>' . $row["fbDate"]. '</td>
                  <td><a href="deletefeedback.php?userName='.$row['userName'].'" ><button type="submit" class="btn btn-danger" role="button" name=submit>DELETE</button></a> </td>
              
             </tr>';
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

	</div>
	<hr>

<div class="footer">

  <div class="row2">
  <div class="column2">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>4</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column2">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>33+</h3>
      <p>Projects</p>
    </div>
  </div>
  
  <div class="column2">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>100+</h3>
      <p>Feedback</p>
    </div>
  </div>
  
  <div class="column2">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>100+</h3>
      <p>Meetings</p>
    </div>
  </div>
</div>
</div>
<!-- ========================================end staff======================= -->

 
<!--  ============================end feedback======================= -->
</div>
</body>
</html>
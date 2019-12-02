 <?php
require('db.php'); 
session_start();
$staffname = $_SESSION['staffname'];    
$stafficnum = $_GET['stafficnum']; 

     // $sql = "SELECT * FROM `staff` WHERE `stafficnum`='$stafficnum'";
     // $result = mysqli_query($mysqli, $sql);
     // $row = mysqli_fetch_assoc($result);
?>


<html>
<head> 
 <title>STAFF | HOME</title>
 <meta charset="utf-8">
 <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
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
	* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
/*  background-image: url("img/login.png"); */
  background-repeat: no repeat;
  background-color: #efefef;
  opacity: 7.0;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
 

 body {
  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #0000;
  color: black;
}

/* Style the header */
.header1 {
  background-color: #3b3b3b;
  padding: 30px 40px;
  color: white;
  font-size: 2px;
  text-align: left;
}

/* Clear floats after the header */
.header1:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: #bbb;
}

.timer {
  text-align: center;
  font-size: 20px;
  margin-top: 0px;
}

h1, h3, h2
{
	font-family: FreeMono, monospace;
}
 


* {
  box-sizing: border-box;
}


/* Float four columns side by side */
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

/* Thick red border */
hr.new4 {
  border: 1px solid black;
}

hr.new3 {
  border-top: 1px dotted black;
}

hr.new5 {
  border: 1px solid #cecece;
}
.card12 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
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

<body background="img/login.png">
<div class="box">
<br><br><h1 align="left" style="font-family:'Sofia';font-size:  "><br>
&nbsp;&nbsp;Welcome  <?php echo $staffname ?> ,<hr class="new5"></h1><br>
  
<!-- =========================LEFT SIDE==================== -->
  <div class="row">
  <div class="column side">
  	<hr class="new3">
 <h3>Meeting Countdown</h3>
<p class="timer" id="demo"></p>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 14, 2018 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<hr class="new3">

  </div>


<!--   =========================MIDDLE SIDE========================== -->
  <div class="column middle">
    <h2> </h2>
    <p> </p>
    <p> <i class="fa fa-map ">  Our Location </i> <br><br> No19, Jalan February 1998/02 Cyberjaya Kuala Lumpur, Malaysia <br> <br>
      <i class="fa fa-mobile" aria-hidden="true">  Contact</i> <br><br>-Office : 0255624152 <br> -Fax :03555562</p> </p>
  </div>
  

<!--   ============================RIGHT SIDE============================ -->
  <div class="column side">
    <div id="myDIV" class="header1">
  <h2 style="margin:2px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="to-do-list">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">
  <li>Update information</li>
  <li class="checked">Update hotel info.</li>
  <li>Meeting with leader</li>
  
</ul>

<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>
 

  </div>

 <br><br><br><br>
</div><hr class="new5">
<!-- =============================================== -->
 <h3 align="center" style=" font-family: 'Aclonica';font-size: 50px"> OUR TEAMWORK </h3>
<table align="center" > <tr>

<td >
 <br><br><br>
<div class="card12">
  <img src="img/qila1.png" alt="John" style="width:100%">
  <h2> 'Aqilah Syafiqah bt Shamsudin</h2>
  <p class="title">Student ID : 2016485722 <br> NRIC : 980219-10-5760 <br> Program Code : CS110 <br> Program Name : Computer Science and Mathematical</p>
  <p>Group : M3CS1105C <br> nuraqilah.syafiqah@yahoo.com </p>
  <div style="margin: 24px 0;">
    <a href="https://www.instagram.com/aqlhsyfqhsym/"><i class="fa fa-instagram" style="color: black; font-size: 22px;"></i></a> 
    <a href="https://twitter.com/xxxaqxlxhxxx"><i class="fa fa-twitter" style="color: black; font-size: 22px;"></i></a>  <br><br><br> 
  </div>
 
</div>
</td>
<td>
<br><br><br>
<div class="card12">
  <img src="img/mai1.png" alt="John" style="width:100%">
   <h2>Humaira bt <br> Amran</h2>
  <p class="title">Student ID : 2016699236 <br> NRIC : 981207-04-5398 <br> Program Code : CS110 <br> Program Name : Computer Science and Mathematical</p>
  <p>Group : M3CS1105C <br> mairamran38@gmail.com </p>
  <div style="margin: 24px 0;">
    <a href="https://www.instagram.com/humairaamran_/"><i class="fa fa-instagram" style="color: black; font-size: 22px;"></i></a> 
    <a href="https://twitter.com/HumairaAmran"><i class="fa fa-twitter" style="color: black; font-size: 22px;"></i></a>   <br><br><br> 
  </div>
   
</div>
</td>
<td>
<br><br><br>
<div class="card12">
  <img src="img/syaf1.png" alt="John" style="width:100%">
    <h2>Muhammad Syafiq bin Jammaludin</h2>
  <p class="title">Student ID : 2016696568 <br> NRIC : 981023-04-5385 <br> Program Code : CS110 <br> Program Name : Computer Science and Mathematical</p>
  <p>Group : M3CS1105C <br> arci91434@gmail.com</p>
  <div style="margin: 24px 0;">
    <a href="https://www.instagram.com/syaf9823/"><i class="fa fa-instagram" style="color: black; font-size: 22px;"></i></a> 
    <a href="https://twitter.com/Syaf_75"><i class="fa fa-twitter" style="color: black; font-size: 22px;"></i></a> <br><br><br> 
  </div>
 
</div>
</td>
<td>
<br><br><br>
<div class="card12">
  <img src="img/pika1.png" alt="John" style="width:100%">
   <h2>Nur Syafiqah bt Hasmidan</h2>
  <p class="title">Student ID : 2016483076 <br> NRIC : 981029-04-5482 <br> Program Code : CS110 <br> Program Name : Computer Science and Mathematical</p>
  <p>Group : M3CS1105C <br> nsfqhsmd29@gmail.com </p>
  <div style="margin: 24px 0;">
    <a href="https://www.instagram.com/nsfqhsmd/"><i class="fa fa-instagram" style="color: black; font-size: 22px;"></i></a> 
    <a href="https://twitter.com/nsfqh"><i class="fa fa-twitter" style="color: black; font-size: 22px;"></i></a>  <br><br><br> 
  </div> 
</div>
</td>
</tr>
</table>


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



</body>
</html>
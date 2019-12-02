
<?php
session_start();
$username = $_SESSION['username'];
 
 // print "   <h1><p> WELCOME <u>" .$username. ",</u> <br> </p></h1></body> ";
   
?>
<html>
 <head>
  <meta charset="utf-8">
<link rel="stylesheet" href="registrationStyle.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-image: url(img/login.png);">

<!-- <div class="w3-content w3-section" >
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
 -->

 <style type="text/css">
   .btn{
  background:#a0a29d;
  width:50%;
  padding-top:10px;
  padding-bottom:10px;
  color:white;
  border-radius:4px;
  border: #333333 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:25%;
   margin-right:30%;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#656664; 
}


.box{
  float: right;
  background:white;
  width:100%;
  border-radius:6px;
  margin: 50 auto 0 auto;
  
  margin-top:15%;
  margin-bottom:3%;
  padding:6px  0px 0px 0px;
  border: #d1b0aa 4px solid; 
  opacity: 0.8;
 
}


 </style>


<div class="box">
     
<h1 align="center">
    <font size="10" face="verdana" color="#0000" style="font-family: Andale Mono, monospace;" >HELLO <?php echo $username ?>, <br>YOU'RE NEW MEMBER  NOW!</font></h1><hr>
    <center> 
<!--   <a href="main.php"> <button class="button button5"><h3 align="center"><font seiz="6" face="verdana" style="font-family: Andale Mono, monospace;" color="black" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENTER GATEAWAY TRAVEL AGENCY WEBSITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h3></button></a> -->

    <a href="main.php"><button  class="btn" >ENTER GATEAWAY TRAVEL AGENCY WEBSITE</button></a>
 </center>
  
 

</div>

 
</form>
</div>
</body>

</html>
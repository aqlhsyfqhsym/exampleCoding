<html>
<head> 
 <title>SUNWAY LAGOON| Buy Tickets </title>
  <head> <meta charset="UTF-8">
 
 <!--  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="js/formcalculations.js"></script>
<link href="styles/cakeform.css" rel="stylesheet" type="text/css" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- tab header -->
 <meta name="viewport" content="width=device-width, initial-scale=1"> 

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<link href='style.css' rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="wsidth=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 </head>

<div id="navbar"> 
   <a><span  style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> </a>
    <a href="main.php" style="text-align: center;"> <b> GATEAWAY</b> Travel Agency</a>
     <a href=" " style="text-align: center;"> <b> SUNWAY LAGOON</a>

</div>

<div class="header" >
  <br><br><br> 
  <div class="w3-content w3-section"> 
    <img class="mySlides5" src="img/sunway.png" style="width:100%">
      <img class="mySlides5" src="img/sunway1.png" style="width:100%">
    </div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides5");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

 <!--  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
   <form action="/action_page.php">
      <input type="text1" placeholder="Search your destination" name="search">
        </form>  
  <a href="#">Feedback</a>
  <a href="#">Services</a>
  <a href="#">About Us</a>
  <a href="#">FAQ</a>
  </div> -->
 
<script>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>`

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

  <script type="text/javascript">
function confirmTotalUp() {
    var ask = window.confirm("Are you sure want to book ticket to Sunway Lagoon ? ");
    if (ask) {
        window.alert("Please print your receipt");

        window.location.href = "confirmationbooking.php";

    }
}
</script>

<style type="text/css">
   .columnForm33 {
    display: inline-block;
    float: left;
    text-align: justify;
    width: 50%;
  padding-right: 3%;
  padding-left: 3%; 
    padding-top: 3%;
    padding-bottom: 11.7%;
    height: auto;
}

  .columnForm34 {
    display: inline-block;
    float: right;
    text-align: justify;
    width: 50%;
  padding-right: 3%;
  padding-left: 3%; 
    padding-top: 5%;
     padding-bottom: 13%;
    height: auto;
}


  .box{
  float: left;
  background:white;
  width:80%; 
  padding: 2%;
  margin: 0 auto 0 auto;
  margin-right: 100%;
  margin-top:2%;
  margin-bottom:3%; 
  border: #333333 4px solid; 
}
 
input[type=text]
{
 background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:300px;
  height: 30px;
  color:#AAAAAA;
  margin-top:5px;
  font-size:1em;
  border-radius:4px;
}

.collapsibleC {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 90%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active, .collapsibleC:hover {
    background-color: #555;
}

.contentC {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
}





</style>

   <body background="img/sunwaypyramid.png"> 
 
<!-- ------------------START CARD 1---------------- -->
<div class="row1s">
  <div class="columnForm33" style="background-color:#ffff;">  
<!-- 
 ====================================================
 ======================PHP===========================
  ==================================================== -->
<?php
  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $noPhoneErr = $nationalErr = $icErr = "";
  $name = $email = $gender = $comment = $noPhone = $national = $ic = "";
  $cal = $quantity1 = $quantity2 = $quantity3 = $quantity4 =  " "; 
 


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed"; 
      }
    }
    
    
     if (empty($_POST["icNum"])) {
      $icErr = "Ic number is required";
    } else {
      $ic = test_input($_POST["icNum"]);
    }


    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
      }
    }

     if (empty($_POST["noPhone"])) {
      $noPhoneErr = "Phone Number is required";
    } else {
      $noPhone = test_input($_POST["noPhone"]);
    }
  
      

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  

   if (empty($_POST["national"])) {
      $nationalErr = "Nationality is required";
    } else {
      $nationalErr = test_input($_POST["national"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  ?>
 
 <html>
 <head> 

  <meta charset="UTF-8"> </head>

<br><br>
<form method="post" action="confirmationbooking.php" style="text-align: left"> 
 <div class="box">
  <p><h3>BUY TICKET</h3><br><span class="error">*required field</span></p>

    
        Name: <input type="text" name="name" value="<?php echo $name;?>" >
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        IC No. : <input type="text" name="icNum" value="<?php echo $ic;?>">
        <span class="error">* <?php echo $icErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Phone: <input type="text" name="noPhone" value="<?php echo $noPhone;?>">
        <span class="error">* <?php echo $noPhoneErr;?></span>
        <br><br>

     Attraction : <select name="park"> 
        <option value=" " disabled> Times Square </option>
        <option value="Sunway Lagoon" > Sunway Lagoon </option>
        <option value=" " disabled> A'Famosa Waterpark  </option>
        <option value=" " disabled> Kidzania</option>
        <option value=" " disabled> Legoland </option>
        <option value=" " disabled> Maps World </option>
        <option value=" " disabled> Zoo Negara </option> 
      </select>
      <br><br>


     
      Gender:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other  
      <span class="error">* <?php echo $genderErr;?></span>
      <br><br>
     Booking Date :  
     <input type="date" name="aDate" data-date-inline-picker="false" data-date-open-on-focus="true" /><br><br>

      <input type="radio"> All 6 Park Pass  </h2><br>
     <button class="collapsibleC"><input name="national" type="checkbox" value="Malaysian" onclick="none" /> MALAYSIAN </button>
    <div class="contentC">
        <input name="choice[]" type="checkbox" value="1" /> ADULT (Age 13 & Above) : <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM110.00 <del><sub>RM130.00 </sub></del> &nbsp;&nbsp;


         <input for="choice[]" type="number" name="quantity1" size="6"  min="1" max="100" value="0" /><br/><br/>


        <input name="choice[]" type="checkbox" value="2" /> CHILD (Age 12 & Below) : <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM90.00 <del><sub>RM106.00 </sub></del> &nbsp;&nbsp;
         <input for="choice[]" name="quantity2" type="number" name="quantity1" size="6"  min="1" max="100" value="0" /><br /><br />
    </div>
   
  <button class="collapsibleC"><input name="national" type="checkbox" value="Non-Malaysian"/> NON-MALAYSIAN </button>
    <div class="contentC">
        <input name="choice[]" type="checkbox" value="3" /> ADULT (Age 13 & Above) : <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM162.00 <del><sub>RM190.00 </sub></del> &nbsp;&nbsp;
        <input for="choice[]" name="quantity3" type="number" value="0" /><br /><br />

        <input name="choice[]" type="checkbox" value="4" /> CHILD (Age 12 & Below) : <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM136.00 <del><sub>RM160.00 </sub></del> &nbsp;&nbsp;
         <input for="choice[]" name="quantity4" type="number" value="0"/><br /><br />
     </div>
     <br><br>



   <!--   =================================NOT AVAILABLE=================== -->
           <input type="radio" disabled=""><del>Quack Xpress + Sunway All Park</del><font color="red"><sub> SOLD OUT</sub>!!</font> </h2><br>

       <button input="button" class="collapsibleC" disabled="" ><input   type="checkbox" value="Malaysian" onclick="none" disabled="" /> MALAYSIAN </button>
      <div class="contentC">
          <input   type="checkbox" value="1" /> ADULT (Age 13 & Above) : <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM35.00 <del><sub>RM45.00 </sub></del> &nbsp;&nbsp;
           <input for="choice[]"   type="number" value="0" /><br/><br/>

          <input  type="checkbox" value="2" /> CHILD (Age 12 & Below) : <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM25.00 <del><sub>RM28.00 </sub></del> &nbsp;&nbsp;
           <input for="choice[]"   type="number" value="0" /><br /><br />
      </div>
     
    <button input="button" class="collapsibleC" disabled=""><input  type="checkbox" value="Non-Malaysian" disabled=""/> NON-MALAYSIAN </button>
      <div class="contentC">
        <input   type="checkbox" value="3" /> ADULT (Age 13 & Above) : <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM45.00 <del><sub>RM57.00 </sub></del> &nbsp;&nbsp;
         
        <input   type="checkbox" value="4" /> CHILD (Age 12 & Below) : <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM35.00 <del><sub>RM45.00 </sub></del> &nbsp;&nbsp; 
     </div>
          <br><br>
<!--   =================================NOT AVAILABLE=================== -->
     Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
          <br><br>

          <input type="submit" name="submit" value="TOTAL UP"/ onclick="confirmTotalUp()">
         
      
       
        <br>
 </div>
</form>
<!-- ===============================FORM====================== -->
   
        
     <p> <i class="fa fa-clock"> AVAILABLE NOW</i><br><br>
       <i class="fa fa-print"> PRINT NOW</i><br><br>
        <i class="fa fa-user"> 2.9K+ BOOKED</i></p>
        </div> 
   



<!--  //column 01 -->
  <!-- -------------------------CLOSED CHECKBOX----------------------------- -->


   <script>
  var coll = document.getElementsByClassName("collapsibleC");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var contentC = this.nextElementSibling;
      if (contentC.style.display === "block") {
        contentC.style.display = "none";
      } else {
        contentC.style.display = "block";
      }
    });
  }
  </script>
  </div>



    <!-- --------------------end card 1--------------------- -->
   <div class="columnForm34" style="background-color:#f5f1ef; float: right"><br> 
    <p>
         <h3>LARGEST WATER RIDE</h3>
       <div class="timesSquare">
        
          <i class="fa fa-map "><a href="https://www.google.com/maps/dir//sunway+lagoon+address/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x31cc4c88dded3125:0xdb654cc77af0cdbc?ved=2ahUKEwirpvrI-4LfAhWvgUsFHclfBckQ9RcwFnoECAoQEw"> Map </a></i><br><br>
          <i class="fa fa-bolt"> Get Your E-Ticket Immediately</i><br><br>
          <i class="fa fa-calendar"> Fixed Date Ticket</i><br><br>
          <hr>
          <h3><b>Introduction of Attraction</b></h3><br>
            <i class="fa fa-thumbtack" aria-hidden="true"></i> One-stop destination for fun and excitement with over 90 attractions spread across an 88 acres land.<br>
            <i class="fa fa-thumbtack" aria-hidden="true"></i> The ultimate themepark with 6 Adventure Zones:  Water Park, Amusement Park, Wildlife Park, Extreme Park, Scream Park & Nickelodeon Lost Lagoon – Asia’s 1st Nickelodeon Themed Land.  <br>
            <i class="fa fa-thumbtack" aria-hidden="true"></i> Suitable for all ages, get your Sunway Lagoon tickets from Wonderfly to receive ultimate value! <br>
            <i class="fa fa-thumbtack" aria-hidden="true"></i> Skip the long queue by adding Quack Express on top of your admission pass to save time and skip the line. <br>
             <hr>

            <h3><b>What to Expect</b></h3><br>
            <i class="fa fa-thumbs-up" aria-hidden="true"></i> Have fun at several or all of the park's exciting rides and visit interesting theme zones<br>
             <i class="fa fa-thumbs-up" aria-hidden="true"></i> Thrill-seekers will truly enjoy the rides like the Waterplexx 5D (Water Park), FlowRider, Pirate’s Revenge (Amusement Park) and more!<br>
             <hr>

            <h3><b> Product Information</b></h3><br>
            <i class="fa fa-bookmark" aria-hidden="true"><b> Validity</b>
            </i><br>
           -Fixed Date Ticket: only valid on the selected visiting date.
           <br> 
         </i>
           -Please present the E-Ticket via Mobile along with IC / Passport at the ticketing counter to exchange for admission wristband(s). 
         <br>
           </i>
           -All guests participating the attraction must present their IC / Passport during the exchange of admission wristband(s). Entry will be rejected should any participating guest fail to present their IC / Passport.
         <br><br>

            <i class="fa fa-clock" aria-hidden="true"><b> Operating Hours</b></i><br>
            10:00 AM - 6:00 PM (daily)<br><br>

            <i class="fa fa-map-marker" aria-hidden="true"><b> Address</b></i><br>
            No. 3, Jalan PJS 11/11, Bandar Sunway, 47500 Selangor Darul Ehsan, Malaysia. (click here for Map)<br><br>
           <hr>

           <h3>How to Use</h3><br>
            <i class="fa fa-mouse-pointer" aria-hidden="true"></i> Receive e-ticket instantly by email OR login to your Wonderfly account, click , then to download and print your e-ticket.<br>
            <i class="fa fa-mouse-pointer" aria-hidden="true"></i> Kindly PRINT the e-ticket  from GATEAWAY.

        
       </div>
     
      </div>
</div> 
 


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
<!-- <table align="left">
      <tr>
        <td style="padding-left: 30px;"><p><font size="5px"  ><b>&nbsp;&nbsp;BUY A TICKET</b></font>
        <br>
      &nbsp;<button class="button button5">BUY A TICKET</button></p><br>&nbsp;&nbsp;&nbsp;Tel : 0199845611<br><br><br>
       </p>
       </td>
      </tr>
    </table> -->
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
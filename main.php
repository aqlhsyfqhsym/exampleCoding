 <?php
require('db.php');
session_start();
 
?>


<html>
<head> 
 <title> Welcome to home page </title>
 <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- tab header -->
 <meta name="viewport" content="width=device-width, initial-scale=1"> 

 <meta name="viewport" content="width=device-width, initial-scale=1">

<link href='style.css' rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="wsidth=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
 </head>

 
<div id="navbar"> 
   <a><span  style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> </a>
    <a href="main.php" style="text-align: center;"> <b> GATEAWAY</b> Travel Agency</a>
    
</div>

<div class="header" >
	<img src="head0.png" style="width: 100%; margin-top:5% "></div>

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
   
  
  <a href="feedback.php">Feedback</a>
  <a href="#aboutus">About Us</a>
  <a href="FAQ">FAQ</a> 
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
   
   

<!-- <div class= "slide" >
  <img class="mySlides" src="head0.png" style="width:80%">
  <img class="mySlides" src="head1.png" style="width:80%">
  <img class="mySlides" src="head2.png" style="width:80%">
  <img class="mySlides" src="head3.png" style="width:80%">
  <img class="mySlides" src="head5.png" style="width:80%">
  <img class="mySlides" src="head6.png" style="width:80%">
</div> 
</center>

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
</script> -->


<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
 
<div>
<body> 

  <style type="text/css">
    .tablink
    {
      color: white;
      font-family: 'Aclonica';font-size:
    }

    .tablink:hover {
    background-color: #484848;
    color: black;
     
}

  </style>

<button class="tablink" onclick="openPage('Home', this, '#f2fbfb')" >Home</button>
<button class="tablink" onclick="openPage('Destination', this, '#ffff')"  >Guide</button>
<button class="tablink" onclick="openPage('Attraction', this, '#ebeaea')" >Attraction</button>
<button class="tablink" onclick="openPage('BuyTicket', this, '#ebeaea')" >About Us</button> 

<div id="Home" class="tabcontent">
 <div class="container1">
 	<div class="container">  
 		<h2 align="center" style=" font-family: 'Aclonica';font-size: 70px"> Home </h2><hr>
 		<p align="center"><font size=4 face="arial" >&nbsp;&nbsp; <b>	    
    	"Malaysia, Truly Asia" captures and defines the essence of the country's unique diversity.<br> It sums up the distinctiveness and allure of Malaysia that make it an exceptional tourist destination.</b>
        <div class="text-block" align="justify" >
    	<br> 
    	<br>Malaysia is a beautiful and diverse country with many highlights. The many different regions, each with their own characteristic features, make this country the perfect destination for tourists. However, Malaysia does not entirely depend on tourism. This country's economy has been going strong for years. On the contrary to what some people (still) believe, Malaysia is not a third world country. The country has developed itself enormously in the past 50 years and this is clearly noticeable when visiting it. Especially in Malaysia's capital, Kuala Lumpur, you will see many modern buildings, a modern light rail transit system, many luxurious shopping malls and countless expensive cars on the roads. Life outside of the capital is often less developed; but even there the times of people only being able to afford a motorcycle are long gone.<br><br><br>
    </font></p>
 </div><br></div>
</div>
<br> 
<br><br><br><br>

 <span>
<div class="slide11">
<button class="collapsible">Where is Malaysia located?</button>
<div class="content">
	<br><br>
   Located in the continent of Asia, Malaysia covers 328,657 square kilometers of land and 1,190 square kilometers of water, making it the 67th largest nation in the world with a total area of 329,847 square kilometers.

	Malaysia became an independent state in 1957, after gaining its sovereignty from The United Kingdom. The population of Malaysia is 29,179,952 (2012) and the nation has a density of 89 people per square kilometer.

	The currency of Malaysia is the Malaysian Ringgit (MYR). As well, the people of Malaysia are refered to as Malaysian.

	The dialing code for the country is 60 and the top level internet domain for Malaysian sites is .my.

	Malaysia shares land borders with 3 countries: Thailand, Brunei Darussalam, Indonesia.<br><br>
	  <img src="map1.png">
	  <br>
	  <br>
	  <h2><b><u>States of Malaysia </u></b></h2> 
	  Check out the maps of all states of Malaysia: Johor, Kelantan, Melaka, Negeri & Sembilan, Pahang, <br> Penang, Perak, Perlis & Kedah, Sabah, Sarawak, Selangor and Terengganu.<br><br>
	  <img src="states.png" style="width:70%"><br>
	  <br>
	  <br><br>
	  <h2><b> <u>Cities of Malaysia</u> </b></h2> 
	  Below the map with all major cities of Malaysia. The cities mentioned are all worth a visit.<br><br>
	  <img src="cities.png" style="width:70%"><br>
	  <br>
	  <br><br>
	  <h2><b> <u>Island of Malaysia</u></b></h2> 
	  Below you can see a map of Malaysia with the most beautiful (and popular) islands. <br><br>
	   <img src="island.png" style="width:70%"><br>
	  <br>
	  <br><br>
	  <h2><b> <u>Highlights of Malaysia</u></b></h2> 
	  Below the map with all highlights of Malaysia. Of course there are many more attractions to visit or <br> to do in Malaysia, but on this map the most popular highlights are mentioned.<br><br>
	  <img src="highlight.png" style="width:70%"><br>
	  <br>
	  <br><br>
</div>

<button class="collapsible">Tourism in Malaysia</button>
<div class="content">

  <p><img src="tourism4.png"><br>The last few years Malaysia has become ever more popular for tourists. This is partly due to positive PR (by the government and by websites like this one), but also because flying to the other side of the world is becoming more and more affordable. Malaysia is a perfect country to visit for all types of tourists. It is a great destination for backpackers, for groups, couples and families with children. Every now and then new attractions are discovered in Malaysia; existing attractions are upgraded or renovated regularly. Accommodation in Malaysia is often very affordable compared to neighboring countries; though prices shave risen the last few years it is still reasonably cheap.<br><br>
  In 2007 Malaysia celebrated '50 years of independence'. A huge PR campaign called 'Visit Malaysia 2007' was launched in order to attract more tourists than ever before to the country. During 2007 Malaysia organized many festivities and events, mainly in the capital city of Kuala Lumpur. During Visit Malaysia 2007 a total of 20.9 million tourists visited the country, an increase of 3.4 million visitors compared to the total amount in 2006. These 20.9 million tourists spent roughly 50 million ringgit total during their stay in Malaysia in 2007. Numbers have risen ever since; almost 25 million tourists visited Malaysia in 2010. Below a screenshot of visitor arrivals over the years and the corresponding billions of ringgits that were spend by those tourists.</p>


</div>
<button class="collapsible">Travel Guide to the beautiful country of Malaysia</button>
<div class="content">
  <p>This website describes many aspects that may come in handy while planning a trip to Malaysia, it is the ultimate travel guide to Malaysia. You will find a wide range of tips and personal experiences about traveling to and within this beautiful holiday destination. The website also provides information about transport, shopping and attractions. The many fabulous pictures and videos will give you a good impression of your coming visit to Malaysia!<br><br>

	Malaysia is one of the most pleasant holiday countries in the world. Many tourists who have visited this country will wholeheartedly agree. There are few tourist places where you can take part in so many different activities. It is a safe and well-organized country; this makes Malaysia suitable as a holiday destination for each type of tourist (even for children). You can go backpacking, but you can also easily stay in a 5 star hotel or resort. You can visit multiple paradise-like islands during one holiday, or you can visit the old and authentic jungle. This can be done in the Peninsular Malaysia, but also on Borneo.<br><br>

	Do you like huge cities; then Kuala Lumpur is an absolute must-visit. Aside from Kuala Lumpur you can visit many other interesting cities throughout Malaysia. Staying in Malaysia is very affordable. The major travel costs will be the airplane tickets and hotel stays. Within the country, you can get around for a few dollars or euros per day. However, those that fancy luxury will also discover Malaysia is a great country to visit. You have ultra-luxury hotels and many modern shopping malls.<br><br> </p>
</div> </span>
<!-- script for Collapsibles -->
	<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
  		coll[i].addEventListener("click", function() {
    	this.classList.toggle("active");
    	var content = this.nextElementSibling;
    	if (content.style.display === "block") {
     	 content.style.display = "none";
    		} else {
     		 content.style.display = "block";
    		}
  		});
		}
	</script>
	<br> 


  <div class="row"  >  
 <div class="column" style="background-color:#f3f3f3;">
          <table >
      <tr>
    <td class="boxed" style="background-color:#dcdbd9;"  align="center">Beautiful Place</td>
      </tr>  
      <tr>
        <td  align="center"><a href="langkawi.html" ><br>LANGKAWI<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="penang.html"> PENANG<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="sabah.html"> SABAH<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="terengganu.html#perhentian"> PERHENTIAN<hr></a></td>
      </tr>  
</div>
</table>
  </div>
  <div class="column" style="background-color:#f3f3f3;">
    <table >
      <tr>
  <td class="boxed" style="background-color:#dcdbd9" align="center">Popular Highlights </td>
      </tr>   
      <tr>
        <td  align="center"><br><a href="pahang.html"> CAMERON HIGHLAND<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="sabah.html#kina"> KINABATANGAN RIVER CRUISE<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="sabah.html#mount"> A 4095 METER TALL MOUNTAIN<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="malacca.html"> A'FAMOSA MALACCA<hr></a></td>
      </tr>    
</table>
  </div>

  <div class="column" style="background-color:#f3f3f3;">
      <table >
      <tr>
    <td class="boxed" style="background-color:#dcdbd9" align="center">Traditional Foods</td>
      </tr>  
        <tr>
        <td  align="center"><a href="food.html#nasilemak"> <br>NASI LEMAK<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="food.html#nasikerabu">NASI KERABU<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="food.html#assamlaksa">ASSAM LAKSA<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href="food.html#roticanai">ROTI CANAI<hr></a></td>
      </tr> 
</table> 
  </div> 
  <div class="column" style="background-color:#f3f3f3;">
      <table >
      <tr>
    <td class="boxed" style="background-color:#dcdbd9" align="center">Attractions</td>
      </tr>   
        <tr>
        <td  align="center"><a href=timesSquare.php><br>COSMO WORLD, KUALA LUMPUR<hr> </a></td>
      </tr>  
      <tr>
        <td align="center"><a href=sunwayLagoon.php>SUNWAY LAGOON, SUBANG JAYA<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href=kidzania.php>KIDZANIA<hr></a></td>
      </tr>  
      <tr>
        <td align="center"><a href=legoland.php>LEGOLAND,JOHOR BAHRU<hr></a></td>
      </tr>   
</table>
  </div> 
</div> </div>
</div>

<!-- <div class="w3-content w3-display-container">
  <img class="mySlides2" src="new1.png" style="width:90%"> 
  <img class="mySlides2" src="new2.png" style="width:90%">
  <img class="mySlides2" src="new3.png" style="width:90%">
  <img class="mySlides2" src="new4.png" style="width:90%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
  showDivs(slideIndex += n);
	}

	function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
	}
</script>
</div> -->
 
 

<!--  <img src="aboutMal.png"> -->
<div id="Destination" class="tabcontent"> 
  <h2 style=" font-family: 'Aclonica';font-size: 60px" align="center"> Guide </h2>
 <!-- ---------------LIST OF DESTINATION----------------- -->
   <div class="row0">
  <div class="column0" style="background-color:#ffff;">  
    <h2>DESTINATION</h2>
    <p>Knowing the formalities of entry into a country is imperative. Whether or not a visa is required, the complexity of the visa and the time it takes to obtain it, its cost and the time granted by the government to stay on their territory could make you choose one destination over another.</p><br>
    <br> <button class="button4 button6" ><a href="http://cuticuti-malaysia.com/">READ MORE</a></button><br><br><br><br><br><br><br>
  </div>

  <div class="column01" >
      <img src="det2.png" style="width: 100%">
  </div>
</div>
 <!-- ---------------LIST OF DESTINATION----------------- -->
 <div class="row0">
 
  <div class="column01" >
      <img src="det3.png" style="width: 100%">
  </div>

   <div class="column0" style="background-color:#ffff;"><br><br><br>
    <h2>TRANSPORTATION</h2>
    <p>Flying time also discourages more than one traveler. Some people are unable to make more than 6 hours in a row to get to a destination. So I suggest you look at flight-specific information. The time of each of them, the number of stopovers.<br> Find out the best transportation website </p><br>
    <br> <button class="button4 button6" ><a href="https://www.airasia.com"> READ MORE</a></button><br><br><br><br><br><br><br><br>
  </div>
</div>
 <!-- ---------------LIST OF DESTINATION----------------- -->
   <div class="row0">
  <div class="column0" style="background-color:#ffff;"><br><br><br>
    <h2>ACCOMMODATION</h2>
    <p>As it’s mentioned regularly, it is not necessary to be rich to travel. Some types of travel and several holiday destinations can be tailored to your budget. For instance, you can take a look at our guides on the cheapest destinations to travel to for your next holiday.</p> <br> Find out the chepest hotel around Malaysia<br>
    <br> <button class="button4 button6" > <a href="https://www.tripadvisor.com.my/SmartDeals-g293951-Malaysia-Hotel-Deals.html"> READ MORE</a></button><br><br><br><br><br><br><br>
  </div>

  <div class="column01" >
      <img src="det4.png" style="width: 100%">
  </div>
</div>
<!-- ---------------LIST OF DESTINATION----------------- -->
 <div class="row0">
 
  <div class="column01" >
      <img src="det5.png" style="width: 100%">
  </div>

   <div class="column0" style="background-color:#ffff;"><br> 
    <h2>ATTRACTION PLACE</h2>
    <p>For me, travel is more than checking things off my list. Sure it’s nice to get that photo of yourself in front of the Grand Canyon and post it on Facebook bragging to your friends, but is there something deeper you want to fulfill?
I don’t travel for the sake of traveling, especially now with two young kids because it’s certainly not always relaxing, often the complete opposite.
But travel has a deeper meaning for me and my WHY is big enough. In fact, the “y” part of yTravel Blog is all about our why for wanting to travel, and mostly that is because we believe in accumulating memories, not just possessions.</p><br>
    <br> <button class="button4 button6" > <a href="https://www.inspirock.com//malaysia-trip-planner?ad_acc=iphk&gclid=Cj0KCQiArqPgBRCRARIsAPwlHoUwvg8Ex80thz-uYI2eDtzGBkW8AaPoG_2ce9rJoAoYIK0GZ81ko-YaAgOFEALw_wcB">READ MORE</a></button><br><br> 
  </div>
</div>
   <!-- list of destination  -->  
 
<!-- <font size="10" style="font-family:Brush Script MT, Brush Script Std, cursive"> <p align="center">Destination</p></font> -->
<br><br><br><br>
 <p align="center"><img src="dest.png"></p> 
<ul id="rig"  >
  
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="ganu1.png">
            <span class="rig-overlay"></span>
           <span class="rig-text"><u>TERENGGANU</u><br>DARUL IMAN<br>
           <button class="button3 button6" onclick="alert('Welcome to Terengganu');window.location.href='terengganu.html';">  READ MORE </button>
            
            <br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="johor1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>JOHOR</u><br>DARUL TA'ZIM<br>
                    <button class="button3 button6" onclick="alert('Welcome to Johor');window.location.href='johor.html';">  READ MORE </button>
              <br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="kuching1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>SARAWAK</u><br>BUMI KENYALANG<br>        <button class="button3 button6" onclick="alert('Welcome to Sarawak');window.location.href='sarawak.html';">  READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="melaka1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>MELAKA</u><br>BANDARAYA BERSEJARAH<br>        <button class="button3 button6" onclick="alert('Welcome to Malacca');window.location.href='malacca.html';">  READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="selangor1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>SELANGOR</u><br>DARUL EHSAN<br>       
             <button class="button3 button6" onclick="alert('Welcome to Selangor');window.location.href='selangor.html';"> READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="kedah1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>KEDAH</u><br>DARUL AMAN<br>       <button class="button3 button6" onclick="alert('Welcome to Kedah');window.location.href='langkawi.html';">  READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="perlis11.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>PERLIS</u><br>INDERA KAYANGAN<br>       <button class="button3 button6" onclick="alert('Welcome to Perlis');window.location.href='perlis.html';">  READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="kk1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>SABAH</u><br>NEGERI DIBAWAH BAYU<br>       <button class="button3 button6" onclick="alert('Welcome to Sabah');window.location.href='sabah.html';">  READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="perak1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>PERAK</u><br>DARUL RIDZUAN<br>       <button class="button3 button6" onclick="alert('Welcome to Perak');window.location.href='perak.html';">  READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="pp1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>PULAU PINANG</u><br>PULAU MUTIARA<br>       <button class="button3 button6" onclick="alert('Welcome to Pulai Pinang');window.location.href='penang.html';">  READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="kl1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>KUALA LUMPUR</u><br>FEDERAL TERRITORY<br>       <button class="button3 button6" onclick="alert('Welcome to Kuala Lumpur');window.location.href='kl.html';">  READ MORE </button><br><br> </span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="langkawi1.png">
            <span class="rig-overlay"></span>
            <span class="rig-text"><u>LANGKAWI</u><br>MAIN ISLAND<br>        <button class="button3 button6" onclick="alert('Welcome to Langkawi');window.location.href='langkawi.html';">  READ MORE </button><br><br> </span> 
        </a>
    </li>
 </ul> 
<br>
<br>



</div>



</div>
 

<div class="tabcontent" id="Attraction">
 <h2 style=" font-family: 'Aclonica';font-size: 60px" align="center"> Attraction </h2>
  
<!-- ---------------LEGOLAND------------- -->
<div class="row0" >
 
  <div class="column01" >
      <img src="det5.png" style="width: 100%">
  </div>

   <div class="column0" style="background-color:#ffff;"><br> 
    <h2>ATTRACTION PLACE</h2>
    <p>For me, travel is more than checking things off my list. Sure it’s nice to get that photo of yourself in front of the Grand Canyon and post it on Facebook bragging to your friends, but is there something deeper you want to fulfill?
	I don’t travel for the sake of traveling, especially now with two young kids because it’s certainly not always relaxing, often the complete opposite.
	But travel has a deeper meaning for me and my WHY is big enough. In fact, the “y” part of yTravel Blog is all about our why for wanting to travel, and mostly that is because we believe in accumulating memories, not just possessions.</p><br>
    <br> <a class="button4 button6" type="button" href= "#more_view" >MORE </a> <br><br> 
  </div>
</div>

<br><br><br><br>
<div id="more_view">
	
<div  class="rowA">
  <div class="columnA" >
    <div class="card">
    	<p><img src="sun.png" width="100%"></p>
      <h3 align="center" style="text-decoration: underline overline;"><b>SUNWAY LAGOON</b></h3>
      <p align="center" style="font-family: Andale Mono, monospace;">Sunway Pyramid,Subang Jaya</p>
     <a href="sunwayLagoon.php"> <button class="button button5" >BUY A TICKET</button></a>
      
    </div>
  </div>

  <div class="columnA">
      <div class="card">
    	<p><img src="cosmo.png" width="100%"></p>
      <h3 align="center" style="text-decoration: underline overline;"><b>COSMO WORLD</b></h3>
      <p align="center" style="font-family: Andale Mono, monospace;">Berjaya Times Square,Kuala Lumpur</p>
     <a href="timesSquare.php"> <button class="button button5">BUY A TICKET</button></a>
      
    </div>
  </div>
  
  <div class="columnA">
      <div class="card">
    	<p><img src="genting.png" width="100%"></p>
      <h3 align="center" style="text-decoration: underline overline;"><b>GENTING HIGHLAND </b></h3>
      <p align="center" style="font-family: Andale Mono, monospace;">Berjaya Genting Hihland,Pahang</p>
      <button class="button button5" type="button" disabled>OPEN SOON</button>
      
    </div>
  </div>
  
  <div class="columnA">
      <div class="card">
    	<p><img src="afamosa.png" width="100%"></p>
      <h3 align="center" style="text-decoration: underline overline;"><b>A'FAMOSA WATERPARK</b></h3>
      <p align="center" style="font-family: Andale Mono, monospace;">Alor Gajah,Melaka</p>
      <button class="button button5" type="button" disabled>SOLD OUT</button>
      
    </div>
  </div>
</div>

<br><br>
<div class="rowA">
  <div class="columnA">
    <div class="card">
    	<p><img src="kidZ.png" width="100%"></p>
      <h3 align="center" style="text-decoration: underline overline;"><b>KIDZANIA</b></h3>
      <p align="center" style="font-family: Andale Mono, monospace;">Petaling Jaya,Selangor</p>
      <a href="kidzania.php"> <button class="button button5">BUY A TICKET</button></a>
      
    </div>
  </div>

  <div class="columnA">
      <div class="card">
    	<p><img src="lego.png" width="100%"></p>
      <h3 align="center" style="text-decoration: underline overline;"><b>LEGOLAND</b></h3>
      <p align="center" style="font-family: Andale Mono, monospace;">Iskandar Puteri,Johor</p>
     <a href="legoland.php"> <button class="button button5">BUY A TICKET</button></a>
      
    </div>
  </div>
  
  <div class="columnA">
      <div class="card">
    	<p><img src="maps.png" width="100%"></p>
      <h3 align="center" style="text-decoration: underline overline;"><b>MAPS WORLD</b></h3>
      <p align="center" style="font-family: Andale Mono, monospace;">Ipoh,Perak</p>
      <button class="button button5" type="button" disabled>SOLD OUT</button>
      
    </div>
  </div>
  
  <div class="columnA">
      <div class="card">
    	<p><img src="zoo.png" width="100%"></p>
      <h3 align="center" style="text-decoration: underline overline;"><b>ZOO NEGARA</b></h3>
      <p align="center" style="font-family: Andale Mono, monospace;">Ampang,Kuala Lumpur</p>
      <button class="button button5" type="button" disabled>SOLD OUT</button>
      
    </div>
  </div>
</div></div>
<br><br><br><br><br>



<!-- ---closed attraction---- -->
 </div>




<!-- ============END OF REVIEW===================== -->
<!-- ============END OF REVIEW===================== -->
<!-- ============END OF REVIEW===================== -->

<div id="BuyTicket" class="tabcontent">
  

  <style type="text/css">
    
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

  <table align="center" > <tr>
 <h3 align="center" style=" font-family: 'Aclonica';font-size: 70px"> About Us </h3>

<td >
 <br><br><br>
<div class="card12">
  <img src="img/qila1.png" alt="John" style="width:100%">
  <h1> 'Aqilah Syafiqah bt Shamsudin</h1>
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
   <h1>Humaira bt <br> Amran</h1>
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
    <h1>Muhammad Syafiq bin Jammaludin</h1>
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
   <h1>Nur Syafiqah bt Hasmidan</h1>
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

<!-- <h2 style="text-align:center">User Profile Card</h2>

<div class="row11" id="aboutus">
  <div class="column11" style="background-color:#aaa;">
   <div class="card11">
  <img src="img/qila.png" alt="Aqilah" style="width: 100%;" >
  <h1>`Aqilah Syafiqah</h1>
  <p class="title">CEO & Founder, System Developer</p>
  <p>UiTM Technology Mara</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div> 
  </div>


  <div class="column11" style="background-color:#bbb;">
   <div class="card11">
  <img src="img/mai.png"  alt="mai" >
  <h1>Humairah </h1>
  <p class="title">CO- Founder, System Analysis</p>
  <p>UiTM Technology Mara</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div>
  </div>


  <div class="column11" style="background-color:#ccc;">
   <div class="card11">
  <img src="img/syaf.png"  alt="syaf" >
  <h1> Muhammad Syafiq </h1>
  <p class="title">System Programmer</p>
  <p>UiTM Technology Mara</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div>
  </div>


  <div class="column11" style="background-color:#ddd;">
    
<div class="card11">
  <img src="img/pika.png"  alt="pika" >
  <h1> Nur Syafiqah </h1>
  <p class="title">  System Programmer</p>
  <p>UiTM Technology Mara</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div>
  </div>
</div>
 -->
<br><br><br><br>


<h1 align="center" id="FAQ"  style=" font-family: 'Aclonica';font-size: 50px">  Frequently Asked Questions </h1>
<span>
    <div class="slide11">
    <button class="collapsible1">When is the rainy (monsoon) season?</button>
    <div class="content">
      <br><br>
     Malaysia, being an equatorial country, experiences afternoon rain showers throughout the year, which cools the day. However, during the North-East monsoon between the months of December through February, there will be an increase in the frequency of these showers.<br><br>
        
    </div>

    <button class="collapsible1">What is the time difference?</button>
    <div class="content">

      <p><br>Standard Malaysia time is 8 hours ahead of Greenwich Mean Time (GMT), 7 hours ahead of summer and 8 hours ahead of winter.</p>


    </div>
    <button class="collapsible1">What is the best way to travel around the country?</button>
    <div class="content">
      <p>Whether you are in a hurry to get to your destination or you wish to take things leisurely, there is a wide choice of transportation to suit your needs. By air, you can travel with Malaysia Airlines domestic flights. By rail, Keretapi Tanah Melayu Berhad (KTM) of Malaysian Railways has an impressive rail network that stretches from North to South and East to West throughout Peninsula Malaysia. Buses and taxis are also available throughout Malaysia. There are also transfer services with drivers readily available<br><br>

    </div>
    <button class="collapsible1">What is the national language?</button>
    <div class="content">
      <p>Bahasa Malaysia is the national and official language. English is widely used especially in commerce and industry. Several Chinese and Indian dialects are also spoken.<br><br>

    </div>

    <button class="collapsible1">Are there any cultural tips I should know about to avoid cultural offence?</button>
    <div class="content">
      <p>To avoid "cultural offences", here are some tips: "Remove shoes when entering homes and places of worship. "Dress neatly in suitable attire which covers arms and legs when visiting places of worship. "When handling food, do so with the right hand only. "Tipping is not a custom in Malaysia. It is unnecessary in hotels and restaurants where a 10% service charge is imposed, unless the service rendered is exceptionally good. Refrain from raising your voice or displaying fits of anger as considered ill mannered.
    .<br><br>

    </div>

     <button class="collapsible1">What about Money changers, Charge/Credit Cards & Travellers Checks

   </button>
     <div class="content">
      <p>There are licensed money changers in all major towns in Malaysia. Most are found in commercial districts and at shopping malls. The rates are very reasonable. You can check exchange rates in the local newspapers. Most large establishments will accept internationally known credit cards and charge cards, though we do advise caution. Travellers cheques are best cashed at banks for the best rates.
     .<br><br>

     </div>

     <button class="collapsible1">What about the currency?

   </button>
    <div class="content">
      <p>Malaysia currency is in Ringgit (RM) and sen. A resident/non-resident is permitted to carry into and out of Malaysia, Ringgit notes not exceeding RM1,000. A resident is permitted to carry out of Malaysia foreign currency including traveller's cheques not exceeding RM10,000. A non-resident is permitted to carry out of Malaysia foreign currency including traveller's cheques not exceeding the amount brought in. Should you need to carry currency in excess of the permitted limits, please obtain prior written permission from the Central Bank authorities.

    <br><br>

    </div>
</span>

 
  <script>
    var coll = document.getElementsByClassName("collapsible1");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
       content.style.display = "none";
        } else {
         content.style.display = "block";
        }
      });
    }
  </script> 
 


</div>
<!-- ============END OF REVIEW===================== -->
<!-- ============END OF REVIEW===================== -->
<!-- ============END OF REVIEW===================== -->
<!-- ============END OF REVIEW===================== -->
<!-- ============END OF REVIEW===================== -->


</div>


<script>
   	function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    	document.getElementById(pageName).style.display = "block";
   	 elmnt.style.backgroundColor = color;

     }
      // Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
</script>
 





<div class="column6">
<div class="row3">
  <div class="column3" style="background-image: url(spanBackground.png)" >  

   <!--  <p align="left" style="padding-left: 30px;"><font size="6"><h1><b>G A T E A W A Y</b> TravelAgency</h1><br><br></p> -->
    <p align="left" > <font size="6" style="color: black;"><b>GATEAWAY</b> Travel Agency </font><br><br></p>
 <!--  SITEMAP & LOCATION -->
 
    <table align="left">
      <tr >
      	<td><p><font size="5px" ><b>SITEMAP</b></font>

    	<br><a href="main.php"> Home   </a>  
    	<br><a href="feedback.php"> Feedback </a>
    	<br><a href="about.html"> About Us </a>
    	<br><a href="faq.html"> FAQ  </a>
    	<br>
		</p> 
		   </td>
      </tr>

      <tr>
      	<td><p><font size="5px" ><b><br>SOCIAL</b></font>


    	<br> Twitter  <sub>Available Soon! </sub><br>
    	<br> Facebook <sub>Available Soon! </sub><br>
    	<br> Instagram  <sub>Available Soon! </sub><br>
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
      	<td style="padding-left: 30px;"><p><font size="5px"><b>&nbsp;&nbsp;BUY A TICKET</b></font>
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
   	<font size="5"  style="font-family: DejaVu Sans Mono, monospace; color: white;">
   		<br> 
   		<br> <a href="http://cuticuti-malaysia.com/">CUTI-CUTI MALAYSIA </a>
   		<br> <a href="http://www.wonderfulmalaysia.com/malaysia-general-country-information.htm">WONDERFUL MALAYSIA </a>
   		<br> <a href="http://www.malaysia.travel/en/my">TOURISM MALAYSIA</a>
   		 <br> <a href="https://www.studymalaysia.com/international/why-study-in-malaysia/about-malaysia">STUDY MALAYSIA</a>
   		  <br> <a href="https://www.lonelyplanet.com/malaysia">LONELY PLANET</a>
   		    <br> <a href="home.html">GATEAWAY AGENCY</a>
   		 <br> 
   		 <br><br> 
   		 </font></p>
 </div>
  </div>
</div>

  <footer><b>GATEAWAY</b>Travel Agency 2018. All rights reserved</footer>
   <footer style="background-color: #333333 "><font color="black">Copyright <b>G A T E A W A Y </b>Travel Agency</font></footer>

</body>



</html>
<html> 
<title>Summary</title>
<script>
function myFunction() {
    window.print();
}
</script>
<body background="img/bookingwallpaper.png">
<?php 

 include('db.php');
// // Create connection
// $conn = new mysqli("localhost", "root" , "" , "gateaway");
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);

$name=$_POST['name']; 
$ic=$_POST['icNum']; 
$email=$_POST['email']; 
$noPhone = $_POST['noPhone'];
$comment=$_POST['comment']; 
$gender=$_POST['gender'];
$national = $_POST['national'];
$park = $_POST['park'];
$cal = $_POST['aDate']; 
$quantity1=$_POST['quantity1']; 
$quantity2=$_POST['quantity2']; 
$quantity3=$_POST['quantity3']; 
$quantity4=$_POST['quantity4']; 

$trn_date = date('d-m-Y H:i:s'); 


// $total = $_POST['total'];

if (isset($_REQUEST['submit']))
{
        // removes backslashes
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($mysqli,$name);
    $ic = stripslashes($_REQUEST['icNum']);
    $ic = mysqli_real_escape_string($mysqli,$ic);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($mysqli,$email);
    $noPhone = stripslashes($_REQUEST['noPhone']);
    $noPhone = mysqli_real_escape_string($mysqli,$noPhone);
    $gender = stripslashes($_REQUEST['gender']);
    $gender = mysqli_real_escape_string($mysqli,$gender);
    $national = stripslashes($_REQUEST['national']);
    $national = mysqli_real_escape_string($mysqli,$national);
    $park = stripslashes($_REQUEST['park']);
    $park = mysqli_real_escape_string($mysqli,$park);
    $cal = stripslashes($_REQUEST['aDate']);
    $cal = mysqli_real_escape_string($mysqli,$cal);
    $quantity1 = stripslashes($_REQUEST['quantity1']);
    $quantity1 = mysqli_real_escape_string($mysqli,$quantity1);
    $quantity2 = stripslashes($_REQUEST['quantity2']);
    $quantity2 = mysqli_real_escape_string($mysqli,$quantity2);
    $quantity3 = stripslashes($_REQUEST['quantity3']);
    $quantity3 = mysqli_real_escape_string($mysqli,$quantity3);
    $quantity4 = stripslashes($_REQUEST['quantity4']);
    $quantity4 = mysqli_real_escape_string($mysqli,$quantity4);

    // $total = stripslashes($_REQUEST['total']);
    // $total = mysqli_real_escape_string($mysqli,$price);

    $trn_date = date("Y-m-d H:i:s");


$sql = "INSERT into bookingTS VALUES ('', '$name', '$ic' , '$email', '$noPhone', '$gender', '$national','$park' ,'$cal', '$quantity1', '$quantity2', '$quantity3', '$quantity4', '$trn_date')";

$result = mysqli_query($mysqli,$sql);
if($result)
{
    mysqli_commit($mysqli);
    echo "<p align=center><br> Your information have been recorded! Kindly please print the ticket for reference</p> <br>";
}
else
    {
    rollback($mysqli);
    echo " Opss... the server is under maintenace, try again later ";
}

}
 

 if(isset( $_POST["choice"] ))
  {     
      $type = $_POST["choice"];
      $c = count($type);
      $price = 0.0;
   

         for($i=0;$i<$c;$i++)
         {
              if($type[$i] == 1){
                   
                  $price = $price + (35*$quantity1);
                   // echo  "&nbsp;&nbsp;" .$quantity1." Malaysian Adult <br>";
              }

              if($type[$i] == 2){
                    
                  $price = $price + (25*$quantity2);
                     // echo  "&nbsp;&nbsp;" .$quantity2." Malaysian Child <br>";
                 
              }

              if($type[$i] == 3){
                  
                  $price = $price + (45*$quantity3);
                  // echo  "&nbsp;&nbsp;" .$quantity3." Non Malaysian Adult <br>";
              }

              if($type[$i] == 4){

                  $price = $price + (35*$quantity4);
              //     echo  "&nbsp;&nbsp;" .$quantity4." Non Malaysian Child <br>";
              // }
                }//end for
          
         
        
           }
           

        }

print '<table width="700px" border="2" cellpadding="5" cellpadding="10" align="center" style="background-color:white;">';
{
     print "<tr> 
               
              <th colspan=2> BOOKING DETAILS </th>
            </tr>";
     print "";

      print "<tr>
              <td > NAME: </td>
              <td > " .$name. "</td>
            </tr>";
     print "";

        print "<tr>
              <td > IC NUMBER : </td>
              <td > " .$ic. "</td>
            </tr>";
       print "";

        print "<tr>
              <td > E-MAIL : </td>
              <td > " .$email. "</td>
            </tr>";
       print "";

        print "<tr>
              <td > PHONE NUMBER : </td>
              <td > " .$noPhone. "</td>
            </tr>";
       print "";

        print "<tr>
              <td > GENDER : </td>
              <td > " .$gender. "</td>
            </tr>";
       print "";
   
   print "<tr>
              <td > NATIONALITY : </td>
              <td > " .$national. "</td>
            </tr>";
       print "";
  
     print "<tr>
              <th colspan=2 > You have selected :- </th>
               
            </tr>";
       print "";

       print "<tr>
              <td > ATTRACTION  : </td>
              <td > " .$park. "</td>
            </tr>";
       print "";

       print "<tr>
              <td > DATE  : </td>
              <td > " .$cal. "</td>
            </tr>";
       print "";

        print "<tr>
              <td > Malaysian Adult : </td>
              <td > " .$quantity1. "</td>
            </tr>";
       print "";

         print "<tr>
              <td > Malaysian Child : </td>
              <td > " .$quantity2. "</td>
            </tr>";
       print "";


  print "<tr>
              <td > Non Malaysian Adult : </td>
              <td > " .$quantity3. "</td>
            </tr>";
       print "";


  print "<tr>
              <td > Non Malaysian Child : </td>
              <td > " .$quantity4. "</td>
            </tr>";
       print "";

        print "<tr>
              <td > COMMENT : </td>
              <td > " .$comment. "</td>
            </tr>";
       print "";




       print "<tr>
              <th colspan=2 align=right> Total :MYR " .$price.  " </th>
               
            </tr>";
       print '</table>';


 }
?> <center> <br>
 <button > <p><a href="main.php">MAIN PAGE</a></p></button>
  <button onclick="myFunction()" ><p><a href="main.php" >PRINT TICKET</a></p></button><br><br>
</center>



<!--  echo "<legend><br><br> YOUR PURCHASED : </legend>"; 
                 echo "Name : " .$name." <br>";
                 echo "Ic No  : " .$ic." <br>";
                 echo "Email : " .$email." <br>";
                 echo "Phone  : " .$noPhone." <br>";
                 echo "Comment : " .$comment." <br>";
                 echo "Gender : " .$gender." <br>";
                 echo "Nationality (purchaser's Nationality) : " .$national." <br><br>";
                 echo "You have selected :- <br>";
                 echo "&nbsp;&nbsp;Date to themed Park : " .$cal." <br>";
                 echo  "&nbsp;&nbsp;" .$quantity1." Malaysian Adult <br>";
                 echo  "&nbsp;&nbsp;" .$quantity2." Malaysian Child <br>";
                 echo  "&nbsp;&nbsp;" .$quantity3." Non Malaysian Adult <br>";
                 echo  "&nbsp;&nbsp;" .$quantity4." Non Malaysian Adult <br><br>";
                 // echo "Total MYR" .$price." <br><br>";

  ?> -->
</body>
  
    </html>
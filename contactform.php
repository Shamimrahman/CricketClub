<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    body {
      font-size: 15px;
      color:#F0F8FF;  
      
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    

   
  </style>



<title>Player Contact Form</title>
</head>
<body>
<h1>Player Contact Form</h1>
<hr>
<form action="" method="POST" name="">

   <tr>
    <td>Club ID :</td>
    <td><input type="text" name="Club_Id" placeholder="Enter your Club ID"></td>
   </tr>

   <tr>
  
  <td>Club Name :</td>
    <td><input type="text" name="Club_Name" placeholder="Enter your Club Name"></td>
  </tr>

   <td><h3>First Party</h3><td>
    <td><h3>Name of the player-:</h3><td>

       <tr>
    <td> First Name:</td>
    <td><input type="text" name="First_Name" placeholder="Enter your First Name"></td>
   </tr>

   <tr>
  
  <td>Middle Name :</td>
    <td><input type="text" name="Middle_Name" placeholder="Enter your Middle Name"></td>
  </tr>

  <tr>
  
  <td>Last Name :</td>
    <td><input type="text" name="Last_Name" placeholder="Enter your Last Name"></td>
  </tr>

<tr>
  <td>Player ID :</td>
    <td><input type="text" name="Player_Id" placeholder="Enter your Player ID "></td><br>
  </tr>

 <td><h3>Second Party</h3><td>
    <td><h3>Authorized Person-:</h3><td>

       <tr>
    <td> First Name:</td>
    <td><input type="text" name="Afirst_Name" placeholder="Enter your First Name"></td>
   </tr>

   <tr>
  
  <td>Middle Name :</td>
    <td><input type="text" name="Amiddle_Name" placeholder="Enter your Middle Name"></td>
  </tr>

  <tr>
  
  <td>Last Name :</td>
    <td><input type="text" name="Alast_Name" placeholder="Enter your Last Name"></td>
  </tr>

<tr>
  <td>Designation:</td>
    <td><input type="text" name="Adesignation" placeholder="Enter your Designation"></td>
  </tr>

<td><h3>Contact Period </h3></td>
<tr>
<td>Start Date :</td>
    <td><input type="text" name="Start_Date" placeholder="DD-MM-YYYY"></td>
  </tr>

  <tr>
  
  <td>End Date:</td>
    <td><input type="text" name="End_Date" placeholder="DD-MM-YYYY"></td>
  </tr>

<tr>
  <td>Contract Amount:</td>
    <td><input type="text" name="Contract_Ammount" placeholder="Enter Contract Ammount"></td>
  </tr>

  <td><h3>Payment Schedule </h3></td>
<tr>
<td>Serial Number :</td>
    <td><input type="text" name="Serial_Number" placeholder="Enter your Serial Name"></td>
  </tr>

  <tr>
  
  <td>Due Date:</td>
    <td><input type="text" name="Due_Date" placeholder="Enter Due Date"></td>
  </tr>

<tr>
  <td>Payment Date:</td>
    <td><input type="text" name="Payment_Date" placeholder="Enter Payment Date "></td>
  </tr>
<tr>
  <td>Ammount:</td>
    <td><input type="text" name="Ammount" placeholder="Enter Ammount "></td>

  </tr><br>

  <table>
    <tr>
  <td>Contact Witness 1:</td>
    <td><input type="text" name="Contact_Witness_one" placeholder="Enter First Contact Witness "></td>
  </tr><br>


   <tr>
  <td>Contact Witness 2:</td>
    <td><input type="text" name="Contact_Witness_two" placeholder="Enter Second Contact Witness "></td>
  </tr>

</br>


  </table>

 
  <div class="text-center" style="text-align: center;" >
 <input style="margin-top: 60px;" type="submit" name="Submit" value="Submit" class="btn btn-primary">
</div>
  
</form>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {



$Club_Id = $_POST['Club_Id'];
$Club_Name = $_POST['Club_Name'];
$First_Name = $_POST['First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name=$_POST['Last_Name'];
$Player_Id=$_POST['Player_Id'];
$Afirst_Name = $_POST['Afirst_Name'];
$Amiddle_Name = $_POST['Amiddle_Name'];
$Alast_Name=$_POST['Alast_Name'];
$Adesignation=$_POST['Adesignation'];
$Start_Date=$_POST['Start_Date'];
$End_Date= $_POST['End_Date'];
$Contract_Ammount =$_POST['Contract_Ammount'];
$Serial_Number=$_POST['Serial_Number'];
$Due_Date=$_POST['Due_Date'];
$Payment_Date = $_POST['Payment_Date'];
$Ammount = $_POST['Ammount'];
$Contact_Witness_one=$_POST['Contact_Witness_one'];
$Contact_Witness_two=$_POST['Contact_Witness_two'];

$result = "INSERT INTO contactform(Club_Id,Club_Name,First_Name,Middle_Name,Last_Name,Player_Id,Afirst_Name,Amiddle_Name,Alast_Name,Adesignation,Start_Date,End_Date,Contract_Ammount,Serial_Number,Due_Date,Payment_Date,Ammount,Contact_Witness_one,Contact_Witness_two)
Values('$Club_Id','$Club_Name','$First_Name','$Middle_Name','$Last_Name','$Player_Id','$Afirst_Name',
'$Amiddle_Name','$Alast_Name','$Adesignation','$Start_Date','$End_Date','$Contract_Ammount',
'$Serial_Number','$Due_Date','$Payment_Date','$Ammount','$Contact_Witness_one','$Contact_Witness_two'
)";


$result = mysqli_query($conn, $result);
//header("Location: index.php");
echo "<h1 align = 'center'>Information Added</h1>";
}


?>


<p align="center"><a href="contactview.php">VIEW</a></p>
</body>
</html>


<html>
<body background="https://static.photoshop.com/content/spotlights/andy-mahr/images/L9_ootball_hicostadium.jpg"></body>
</html>











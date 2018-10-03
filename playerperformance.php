<!DOCTYPE html>
<html>
<head>
<title>Player Performance Form</title>
</head>
<body>
<h1>Player performance Form</h1>
<hr>
<form action="" method="POST" name="">

   <tr>
    <td>Match ID :</td>
    <td><input type="text" name="Match_Id" placeholder="Enter Match ID"></td>
   </tr>

   <tr>
  
  <td>Venu ID:</td>
    <td><input type="text" name="Venu_Id" placeholder="Enter Venu ID"></td>
  </tr>

   <tr>
  
  <td>Date Of The Match:</td>
    <td><input type="text" name="Date_Of_The_Match" placeholder="YYYY//MM//DD"></td>
    <tr>
  

<table>



    <td><h3>Player Performance</h3><td>

       <tr>
    <td> Player ID:</td>
    <td><input type="text" name="Player_Id" placeholder="Enter Player ID"></td>
   </tr>

   <tr>
  
  <td>Total Wickets:</td>
    <td><input type="text" name="Total_Wkts" placeholder="Enter your Total Wickets"></td>
  </tr>

  <tr>
  
  <td>Total Runs:</td>
    <td><input type="text" name="Total_Runs" placeholder="Enter your Total Runs"></td>
  </tr>

<tr>
  <td>Out Standing Performance:</td>
    <td><input type="text" name="Outstanding_Performance" placeholder="Enter your performance"></td><br>
  </tr>


    
  </table>

 <br>
  <input type="submit" name="Submit" value="Submit">
  
</form>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {



$Match_Id = $_POST['Match_Id'];
$Venu_Id = $_POST['Venu_Id'];
$Date_Of_The_Match = $_POST['Date_Of_The_Match'];
$Player_Id = $_POST['Player_Id'];
$Total_Wkts=$_POST['Total_Wkts'];
$Total_Runs=$_POST['Total_Runs'];
$Outstanding_Performance = $_POST['Outstanding_Performance'];


$result = "INSERT INTO playerperformance(Match_Id,Venu_Id,Date_Of_The_Match,Player_Id,Total_Wkts,Total_Runs,Outstanding_Performance)
Values('$Match_Id','$Venu_Id','$Date_Of_The_Match','$Player_Id','$Total_Wkts','$Total_Runs','$Outstanding_Performance')";



$result = mysqli_query($conn, $result);
//header("Location: index.php");
echo "<h1 align = 'center'>Information Added</h1>";
}


?>

<p align="center"><a href="playerperformanceview.php">VIEW</a></p>
</body>
</html>


<html>
<body background="https://www.desktopbackground.org/download/o/2015/10/17/1027568_solid-background-images-wallpapers-hd-base_1600x1050_h.jpg"></body>
</html>











<!DOCTYPE html>
<html>
<head>

<style type="text/css">
    body {
      font-size: 15px;
      color:  #F0FFF0;
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




  
<title>Club Registration Form</title>
</head>
<body>
<h1>Club Registration Form</h1>
<hr>
<form action="" method="POST" name="">
<table>
   <tr>
    <td>Name of the club :</td>
    <td><input type="text" name="Name_Of_The_club" placeholder="Enter Club Name"></td>
   </tr>

   <tr>
  
  <td>Date of Establishment :</td>
    <td><input type="text" name="Date_Of_Establishment" placeholder="YYYY/MM/DD"></td>
  </tr>

</table>

<td><h3>Address</h3><td>

       <tr>
    <td> House No:</td>
    <td><input type="text" name="House_No" placeholder="Enter your House No"></td>
   </tr>

   <tr>
  
  <td>Location :</td>
    <td><input type="text" name="Location" placeholder="Enter your Location"></td>
  </tr>

  <tr>
  
  <td>Street:</td>
    <td><input type="text" name="Street" placeholder="Enter your Street Name"></td>
  </tr>

<tr>
  <td>Thana :</td>
    <td><input type="text" name="Thana" placeholder="Enter Thana Name"></td><br>
  </tr>

<br>
       <tr>
    <td> District:</td>
    <td><input type="text" name="District" placeholder="Enter your District Name"></td>
   </tr>

   <tr>
  
  <td>Post Code :</td>
    <td><input type="text" name="Postcode" placeholder="Enter your Postcode"></td>
  </tr>

<tr><br>


<table>


    <br>

  <td>Name Of the Club President :</td>
    <td><input type="text" name="President_Name" placeholder="Enter Club President Name"></td>
  </tr>




  </table>

 <br>
 <div class="text-center" style="text-align: center;" >
 <input style="margin-top: 60px;" type="submit" name="Submit" value="Submit" class="btn btn-primary">
</div>
</form>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {



$Name_Of_The_club = $_POST['Name_Of_The_club'];
$Date_Of_Establishment = $_POST['Date_Of_Establishment'];
$President_Name=$_POST['President_Name'];
$Contact_No=$_POST['Contact_No'];

$result = "INSERT INTO clubregistrationform(Name_Of_The_club,Date_Of_Establishment,Address,House_No,Location,Street,Thana,District,Postcode,President)
Values('$Name_Of_The_club','$Date_Of_Establishment','$House_No','$Location','$Street','$Thana','$District',
'$Postcode','$President_Name')";



$result = mysqli_query($conn, $result);
//header("Location: index.php");
echo "<h1 align = 'center'>Information Added</h1>";
}


?>

<p align="center"><a href="clubregview.php">VIEW</a></p>
</body>
</html>


<html>
<body background="http://getwallpapers.com/wallpaper/full/6/8/9/250325.jpg"></body>
</html>








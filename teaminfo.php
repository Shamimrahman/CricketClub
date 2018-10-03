<!DOCTYPE html>
<html>
<head>



  <meta charset="UTF-8">
  <meta http-typeuiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-favicon.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>Team Info</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
</head>

<style type="text/css">
    body {
      font-size: 20px;
      color: #006668;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    
    table {
      margin:auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 15px;
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



<title>Team Information Form</title>
</head>
<body>
<h1>Team Information Form</h1>
<hr>
<form action="" method="POST" name="">

   <tr>
    <td>Club ID :</td>
    <td><input type="text" name="Club_Id" placeholder="Enter Club ID"></td>
   </tr>

   <tr>
  
  <td>Player ID:</td>
    <td><input type="text" name="Cplayer_Id" placeholder="Enter Player ID"></td>
  </tr>

   

<table>



    <td><h3>Team Information</h3><td>

       <tr>
    <td> Team Formation Date:</td>
    <td><input type="text" name="Team_Formation_Date" placeholder="Enter Team Formation Date"></td>
   </tr>

   <tr>
  
  <td>Event Name:</td>
    <td><input type="text" name="Event_Name" placeholder="Enter Event Name"></td>
  </tr>

    

    <tr>
  <td>Team Leader ID:</td>
    <td><input type="text" name="Team_Leader_Id" placeholder="Enter Team Leader ID"></td><br>
  </tr>

 <tr>
  <td>Player Name:</td>
    <td><input type="text" name="Player_Name" placeholder="Enter Team Leader ID"></td><br>
  </tr>




<td>Coatch ID:</td>
    <td><input type="text" name="Coatch_Id" placeholder="Enter Coatch ID"></td>
  </tr>

  <tr>

    <tr>
  <td>Coatch Name:</td>
    <td><input type="text" name="Coatch_Name" placeholder="Enter Coatch Name"></td><br>
  </tr>

 <td>Player ID:</td>
    <td><input type="text" name="Player_Id" placeholder="Enter Player ID"></td>
  </tr>

  <tr>

    <tr>
  <td>Name:</td>
    <td><input type="text" name="Name" placeholder="Enter Name"></td>
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



$Club_Id = $_POST['Club_Id'];
$Cplayer_Id = $_POST['Cplayer_Id'];
$Team_Formation_Date = $_POST['Team_Formation_Date'];
$Event_Name = $_POST['Event_Name'];
$Team_Leader_Id=$_POST['Team_Leader_Id'];
$Player_Name=$_POST['Player_Name'];
$Coatch_Id = $_POST['Coatch_Id'];
$Coatch_Name = $_POST['Coatch_Name'];
$Player_Id=$_POST['Player_Id'];
$Name=$_POST['Name'];



$result = "INSERT INTO teaminfo(Club_Id,Cplayer_Id,Team_Formation_Date,Event_Name,Team_Leader_Id,Player_Name,Coatch_Id,Coatch_Name,Player_Id,Name)
Values('$Club_Id','$Cplayer_Id','$Team_Formation_Date','$Event_Name','$Team_Leader_Id','$Player_Name','$Coatch_Id','$Coatch_Name','$Player_Id','$Name')";



$result = mysqli_query($conn, $result);
//header("Location: index.php");
echo "<h1 align = 'center'>Information Added</h1>";
}


?>

<p align="center"><a href="teaminfoview.php">VIEW</a></p>
</body>
</html>


<html>
<body background="https://s3.pixers.pics/pixers/700/FO/22/37/47/10/700_FO22374710_f1100efbf02fbeacafa79ad8bde30b91.jpg"></body>
</html>











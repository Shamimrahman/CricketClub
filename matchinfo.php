<!DOCTYPE html>
<html>
<head>

 <style type="text/css">
    body {
      font-size: 15px;
      color: #F5FFFA;
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


<title>Match IForm</title>
</head>
<body>
<h1>Player performance Form</h1>
<hr>
<form action="" method="POST" name="">

   <tr>
    <td>Event ID :</td>
    <td><input type="text" name="Event_Id" placeholder="Enter Event ID"></td>
   </tr>

   <tr>
  
  <td>Venue ID:</td>
    <td><input type="text" name="Venue_Id" placeholder="Enter Venue ID"></td>
  </tr>

   <tr>
  
  <td>Date Of The Match:</td>
    <td><input type="text" name="Date_Of_The_Match" placeholder="YYYY//MM//DD"></td>
    <tr>
  

<table>



    <td><h3>Match Information</h3><td>

       <tr>
    <td> Match ID:</td>
    <td><input type="text" name="Match_Id" placeholder="Enter Match ID"></td>
   </tr>

   <tr>
  
  <td>Man of the Match:</td>
    <td><input type="text" name="Man_Of_The_Match" placeholder="Enter Man Of The Match"></td>
  </tr>

  <tr>
  
  <td>Umpire:</td>
    <td><input type="text" name="Umpire" placeholder="Enter Umpire Name"></td>
  </tr>

    
  </table>
<div class="text-center" style="text-align: center;" >
 <input style="margin-top: 60px;" type="submit" name="Submit" value="Submit" class="btn btn-primary">
</div>
</form>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {



$Event_Id = $_POST['Event_Id'];
$Venue_Id = $_POST['Venue_Id'];
$Date_Of_The_Match = $_POST['Date_Of_The_Match'];
$Match_Id = $_POST['Match_Id'];
$Man_Of_The_Match=$_POST['Man_Of_The_Match'];
$Umpire=$_POST['Umpire'];


$result = "INSERT INTO matchinfo(Event_Id,Venue_Id,Date_Of_The_Match,Match_Id,Man_Of_The_Match,Umpire)
Values('$Event_Id','$Venue_Id','$Date_Of_The_Match','$Match_Id','$Man_Of_The_Match','$Umpire')";



$result = mysqli_query($conn, $result);
//header("Location: index.php");
echo "<h1 align = 'center'>Information Added</h1>";
}


?>


<p align="center"><a href="matchinfoview.php">VIEW</a></p>
</body>
</html>


<html>
<body background="https://media.gettyimages.com/photos/stadium-light-picture-id157398206?b=1&k=6&m=157398206&s=612x612&w=0&h=N6fNq2uBlk76Jh9ewc5hNf3_TipNh0xvWRAsSbI0o-o="></body>
</html>











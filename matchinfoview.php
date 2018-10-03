<?php
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = "SELECT S.Event_Id,S.Venue_Id,S.Date_Of_The_Match,S.Match_Id,S.Man_Of_The_Match,S.Umpire
FROM matchinfo S";

$result = mysqli_query($conn, $result);
?>
<!DOCTYPE html>
<html>
<head>
<title>View Player Contact Information</title>
<style>
<style type="text/css">
    body {
      font-size: 15px;
      color:#F0F8FF;  
      
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    
    table, th, td{
border: 1px solid black;
border-collapse: collapse;
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
</style>
</head>
<body>
<h1>Match Information</h1>
<hr>
<table>

	<tr>
<th>Event Id</th>
<th>Venue Id</th>
<th>Date Of The Match</th>
<th>Match Id</th>
<th>Man Of The Match/th>
<th>Umpire</th>




</tr>
<?php
while($res= mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $res['Event_Id'];?></td>
<td><?php echo $res['Venue_Id'];?></td>
<td><?php echo $res['Date_Of_The_Match'];?></td>
<td><?php echo $res['Match_Id'];?></td>
<td><?php echo $res['Man_Of_The_Match'];?></td>
<td><?php echo $res['Umpire'];?></td>


</tr>
<?php
}
?>
</table>
</hr>;

<html>
<body background="https://img00.deviantart.net/8e6e/i/2006/297/0/a/green_background_by_l0rdn1k0n.jpg"></body>
</html>
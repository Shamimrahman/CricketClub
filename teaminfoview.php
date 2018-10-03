<?php
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = "SELECT S.Club_Id,S.Cplayer_Id,S.Team_Formation_Date,S.Event_Name,S.Team_Leader_Id,S.Player_Name,S.Coatch_Id,S.Coatch_Name,S.Player_Id,S.Name
FROM teaminfo S";

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
<h1>Player Performance Information</h1>
<hr>
<table>

	<tr>
<th>Club Id</th>
<th>Player ID</th>
<th>Team Formation Date</th>
<th>Event Name</th>
<th>Team Leader ID</th>
<th>Player Name</th>
<th>Coatch ID</th>
<th>Coatch Name</th>
<th>Player ID</th>
<th>Name</th>





</tr>
<?php
while($res= mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $res['Club_Id'];?></td>
<td><?php echo $res['Player_Id'];?></td>
<td><?php echo $res['Team_Formation_Date'];?></td>
<td><?php echo $res['Event_Name'];?></td>
<td><?php echo $res['Team_Leader_Id'];?></td>
<td><?php echo $res['Player_Name'];?></td>
<td><?php echo $res['Coatch_Id'];?></td>
<td><?php echo $res['Coatch_Name'];?></td>
<td><?php echo $res['Team_Leader_Id'];?></td>
<td><?php echo $res['Player_Id'];?></td>
<td><?php echo $res['Name'];?></td>



</tr>
<?php
}
?>
</table>
</hr>;

<html>
<body background="https://img00.deviantart.net/8e6e/i/2006/297/0/a/green_background_by_l0rdn1k0n.jpg"></body>
</html>
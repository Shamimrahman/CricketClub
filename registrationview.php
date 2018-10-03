<?php
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = "SELECT S.First_Name ,S.Middle_Name, S.Last_Name, S.Fathers_Name, S.Mothers_Name, 
S.Pre_Houseno, S.Pre_Location, S.Pre_Village, S.Pre_Thana, S.Pre_District, S.Pre_Postcode, 
S.Per_Houseno, S.Per_Location, S.Per_Village, S.Per_Thana, S.Per_District, S.Per_Postcode, 
S.Date_Of_Birth, S.Pclub_Name, S.Clubtime_From, S.Clubtime_To, S.Total_Runs, S.Total_Wkts, S.Team_Leader, 
S.Bclub_Name, S.Opponent_Club_Name, S.Event_Id, S.Match_Id, S.Runs, S.Wickets, S.Name_Of_Degree, 
S.Department, S.University, S.Year, S.Result, S.Club_Membership,  S.Signature, S.Date
FROM playerinfo S";

$result = mysqli_query($conn, $result);
?>
<!DOCTYPE html>
<html>
<head>
<title>View Player Information</title>
<style>
table, th, td{
border: 1px solid black;
border-collapse: collapse;
}
</style>
</head>
<body>
<h1>Player Information</h1>
<hr>
<table>

	<tr>

<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th >Father's Name</th>
<th>Mother's Name</th>
<th>Present Houseno</th>
<th>Present Location</th>
<th>Present Village</th>
<th>Present Thana</th>
<th>Present District</th>
<th>Present Postcode</th>
<th>Permanent Houseno</th>
<th>Permanent Location</th>
<th>Permanent Village</th>
<th>Permanent Thana</th>
<th>Permanent District</th>
<th>Permanent Postcode</th>
<th>Date Of Birth</th>
<th>Present club Name</th>
<th>Club Time From</th>
<th>Club Time To</th>
<th>Total Runs</th>
<th>Total Wkts</th>
<th>Team  Leader</th>
<th>Bclub Name</th>
<th>Opponent Club Name</th>
<th>Event Id</th>
<th>Match Id</th>
<th>Runs</th>
<th>Wickets</th>
<th>Name Of Degree</th>
<th>Department</th>
<th>University</th>
<th>Year</th>
<th>Result</th>
<th>Club Membership</th>
<th>Signature</th>
<th>Date</th>

</tr>
<?php
while($res= mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $res['First_Name']; ?></td>
<td><?php echo $res['Middle_Name'];?></td>
<td><?php echo $res['Last_Name'];?></td>
<td><?php echo $res['Fathers_Name']; ?></td>
<td><?php echo $res['Mothers_Name'];?></td>
<td><?php echo $res['Pre_Houseno'];?></td>
<td><?php echo $res['Pre_Location']; ?></td>
<td><?php echo $res['Per_Village'];?></td>
<td><?php echo $res['Pre_Thana'];?></td>
<td><?php echo $res['Pre_District']; ?></td>
<td><?php echo $res['Pre_Postcode'];?></td>
<td><?php echo $res['Per_Houseno']; ?></td>
<td><?php echo $res['Per_Location']; ?></td>
<td><?php echo $res['Per_Thana']; ?></td>
<td><?php echo $res['Per_District']; ?></td>
<td><?php echo $res['Per_Postcode']; ?></td>
<td><?php echo $res['Date_Of_Birth']; ?></td>
<td><?php echo $res['Pclub_Name']; ?></td>
<td><?php echo $res['Clubtime_From']; ?></td>
<td><?php echo $res['Clubtime_To']; ?></td>
<td><?php echo $res['Total_Runs']; ?></td>
<td><?php echo $res['Total_Wkts']; ?></td>
<td><?php echo $res['Team_Leader']; ?></td>
<td><?php echo $res['Bclub_Name']; ?></td>
<td><?php echo $res['Opponent_Club_Name']; ?></td>
<td><?php echo $res['Event_Id']; ?></td>
<td><?php echo $res['Match_Id']; ?></td>
<td><?php echo $res['Runs']; ?></td>
<td><?php echo $res['Wickets']; ?></td>
<td><?php echo $res['Name_Of_Degree']; ?></td>
<td><?php echo $res['Department']; ?></td>
<td><?php echo $res['University']; ?></td>
<td><?php echo $res['Year']; ?></td>
<td><?php echo $res['Result']; ?></td>
<td><?php echo $res['Club_Membership']; ?></td>
<td><?php echo $res['Signature']; ?></td>
<td><?php echo $res['Date']; ?></td>



</tr>
<?php
}
?>
</table>
</hr>;

<html>
<body background="https://img00.deviantart.net/8e6e/i/2006/297/0/a/green_background_by_l0rdn1k0n.jpg"></body>
</html>
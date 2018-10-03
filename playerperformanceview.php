<?php
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = "SELECT S.Match_Id,S.Venu_Id,S.Date_Of_The_Match,S.Player_Id,S.Total_Wkts,S.Total_Runs,S.Outstanding_Performance
FROM playerperformance S";

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
<th>Match Id</th>
<th>Venu Id</th>
<th>Date of the match</th>
<th>Player Id</th>
<th>Total Wkts</th>
<th>Total Runs</th>
<th>Outstanding Performance</th>



</tr>
<?php
while($res= mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $res['Match_Id'];?></td>
<td><?php echo $res['Venu_Id'];?></td>
<td><?php echo $res['Date_Of_The_Match'];?></td>
<td><?php echo $res['Player_Id'];?></td>
<td><?php echo $res['Total_Wkts'];?></td>
<td><?php echo $res['Total_Runs'];?></td>
<td><?php echo $res['Outstanding_Performance'];?></td>


</tr>
<?php
}
?>
</table>
</hr>;

<html>
<body background="https://img00.deviantart.net/8e6e/i/2006/297/0/a/green_background_by_l0rdn1k0n.jpg"></body>
</html>
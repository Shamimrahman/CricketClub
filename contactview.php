<?php
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = "SELECT S.Club_Id,S.Club_Name,S.First_Name,S.Middle_Name,S.Last_Name,S.Player_Id,
S.Afirst_Name,S.Amiddle_Name,S.Alast_Name,S.Adesignation,S.Start_Date,S.End_Date,S.Contract_Ammount,S.Serial_Number,S.Due_Date,S.Payment_Date,S.Ammount,S.Contact_Witness_one,S.Contact_Witness_two
FROM contactform S";

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
<h1>Player Contact Information</h1>
<hr>
<table>

	<tr>
<th>Club Id</th>
<th>Club Name</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Player Id</th>
<th>Afirst Name</th>
<th>Amiddle Name</th>
<th>Alast Name</th>

<th>Adesignation</th>
<th>Start Date</th>
<th>End Date</th>
<th>Contract Ammount</th>
<th>Serial Number</th>
<th>Due Date</th>
<th>Payment Date</th>
<th>Ammount</th>
<th>Contact Witness one</th>
<th>Contact Witness two</th>


</tr>
<?php
while($res= mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $res['Club_Id'];?></td>
<td><?php echo $res['Club_Name'];?></td>
<td><?php echo $res['First_Name'];?></td>
<td><?php echo $res['Middle_Name'];?></td>
<td><?php echo $res['Last_Name'];?></td>
<td><?php echo $res['Player_Id'];?></td>
<td><?php echo $res['Afirst_Name'];?></td>
<td><?php echo $res['Amiddle_Name'];?></td>
<td><?php echo $res['Alast_Name'];?></td>
<td><?php echo $res['Adesignation'];?></td>
<td><?php echo $res['Start_Date'];?></td>
<td><?php echo $res['End_Date'];?></td>
<td><?php echo $res['Contract_Ammount'];?></td>
<td><?php echo $res['Serial_Number']; ?></td>
<td><?php echo $res['Due_Date'];?></td>
<td><?php echo $res['Payment_Date'];?></td>
<td><?php echo $res['Ammount'];?></td>
<td><?php echo $res['Contact_Witness_one'];?></td>
<td><?php echo $res['Contact_Witness_two'];?></td>



</tr>
<?php
}
?>
</table>
</hr>;

<html>
<body background="https://img00.deviantart.net/8e6e/i/2006/297/0/a/green_background_by_l0rdn1k0n.jpg"></body>
</html>
<?php require_once "conn.php";
 $results=$crud->getDetails();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>View Records</title>

</head>
<body>
<h1 style="text-align:center">Earthquake Details</h1>
<br/>
<div >
<table class="w3-table w3-striped"> 
 <tr>
  <th>#Id</th>
  <th>Time</th>
  <th>Latitude</th>
  <th>Longitude</th>
  <th>Depth of Center</th>
  <th>Magnitude Of the Earthquake</th>
  <th>MagType</th>
  <th>Place Name</th>
 </tr>
  <?php
        while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $r["Id"]?> </td>
            <td><?php echo $r["Time"]?> </td>
            <td><?php echo $r["latitude"]?> </td>
            <td><?php echo $r["longitude"]?> </td>
            <td><?php echo $r['depth']?> </td>
           <td><?php echo $r["mag"]?> </td>
            <td><?php echo $r["magType"]?> </td>
            <td><?php echo $r["place"]?> </td>
        </tr>
        <?php } ?>
        
</table>
</div>
</body>
</html>
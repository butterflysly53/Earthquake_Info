<?php
    //$db = mysqli_connect('localhost','root','','earthquakenew')
    $db = mysqli_connect('sql6.freesqldatabase.com','sql6440167','Wv5sUIDvEU','sql6440167')or die('Error connecting to MySQL server.');
  $query = "SELECT* FROM places";
  $result = mysqli_query($db, $query) or die('Error querying database.');
  $myArray = array();
    while($row = mysqli_fetch_assoc($result)){
      $myArray[] = $row;
  }
  echo json_encode($myArray);
  mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Success Page</title>
        <style>
        h2{
  background-color:	#eae7dc;
  text-align:center;
  /*animation: mymove 20s infinite;*/
}
body{
  font-size: 170%;
  background-color:#7CB9E8 ;
}
div
{
    text-align: center;
    font-family: 'Raleway', sans-serif;
}
form
{   font-family: 'Raleway', sans-serif;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
    display: inline-block;
    border: 3px solid blue;
}
p
{
    text-align: left;
    font-family: 'Raleway', sans-serif;
}
a:link, a:visited {
  background-color: #fef9f8;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
}

a:hover, a:active {
  background-color: #ef9273;
}
</style>
</head>
<body>
  <?php 
    require_once "conn.php";
    if(isset($_POST['submit'])){
    try{
  //extract values from $_POST array
  $Time=$_POST["Time"];
  $latitude=$_POST["latitude"];
  $longitude=$_POST["longitude"];
  $depth=$_POST["depth"];
  $mag=$_POST["mag"];
  $magType=$_POST["magType"];
  $place=$_POST["place"];
  $isSucess=$crud->insertDetails($Time,$latitude,$longitude,$depth,$mag,$magType,$place);
  if ($isSucess){
     echo "<h2> Your details have been registered! </h2>";
 
  }
}
  catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $isSucess. " . $e->getMessage());
     echo "<h1> There was an error in processing! </h1>";
  }
}
?>
  <div >
    <form>
    <p>Time: <?php echo  $_POST["Time"]; ?></p>
    <p> Latitude: <?php echo  $_POST["latitude"]; ?> </p>
    <p> Longitude: <?php echo  $_POST["longitude"]; ?> </p>  
    <p> Depth of Center: <?php echo  $_POST["longitude"]; ?> </p>  
    <p>Magnitude Of the Earthquake: <?php echo  $_POST["depth"]; ?> </p>  
    <p >MagType: <?php echo $_POST["magType"];  ?> </p>
    <p>Name of the Place: <?php echo  $_POST["place"]; ?> </p>   
</form>
  </div>
    <a href="viewRecords.php"> See all details</a>
    <a href="map.php"> Click to see Map</a> 
    <a href="index.php"> Home</a>
    </body>
</html>
<?php require_once "conn.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <style type="text/css">
      div.form
{
    display: block;
    text-align: center;
    font-family: 'Raleway', sans-serif;
}
form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;

}
body{
  font-size: 170%;
  background-color: #7CB9E8 ;
 
}
h1{
  background-color:	#eae7dc;
  text-align:center;
  }
</style>
<title>Form</title>
</head>
<body>
<h1>I Felt an Earthquake</h1>
<div class="form">
<form  method="POST" action="success.php">
<div class="mb-3">
    <label for="Time" >Time when earthquake happpened ?</label><br/>
    <input required type="text" id="Time" name="Time" placeholder="Eg: yy-mm-ddThh:mm:ssZ" size="70">
  </div>
  <div class="mb-3">
    <label for ="latitude">Latitude of the place</label><br/>
    <input required type="text" class="form-control" id="latitude" name="latitude" placeholder="Eg: 13.4596" size="70">
  </div>
 <div class="mb-3">
 <label for="longitude">Longitude of the place</label><br/>
 <input  id="longitude"required type="text" name="longitude" placeholder="Eg: 92. 7483" size="70">
  </div>
  <div class="mb-3">
 <label for="depth">Depth Of Center</label><br/>
 <input required type="text" id="depth" name="depth" placeholder="Eg: 40.08"size="70">
  </div>
 <div class="mb-3">
 <label for="mag">Magnitude of the Earthquake</label><br/>
 <input required type="text" id="mag" name="mag" placeholder="Eg: 5.5"size="70">
  </div> 
  <div class="mb-3">
 <label for="magType">Mag Type</label><br/>
 <input required type="text" id="magType" name="magType" placeholder="Eg: mb/mwc/mwr"size="70">
  </div> 
 <div class="mb-3">
 <label for="place">Name of the place</label><br/>
 <input required type="text"  id="place" name="place" placeholder="Eg: Kolkata"size="70" style="height:15px;">
  </div>
 <br/>
<input type ="submit" name ='submit' value='submit'>
</form>
</div>
</body>
</html>

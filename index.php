<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
<script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
.mySlides {display:none;}

</style>
    <title>Earthquake</title>
</head>

<body>
<div class="header">
  <img src="img/head.png" width="100px" height="70px" style="padding-left: 20px;">
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="info.html">Information</a>
    <a href="viewRecords.php">Past Earthquakes</a>
    <input type="text" placeholder="Search...">
    <i class="fa fa-search" style="text-align:center;padding-top: 15px;"></i>
  </div>
</div>
<br>
<br>
<!--
<div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div> 
Welcome to QuakeShake.We are glad to have you here-->
<br>
<div  class="w3-content w3-section" style="max-width:500px "> 

    <img class="mySlides" src="img/01.PNG" style="width:100%;" /> 
    <img class="mySlides" src="img/02.PNG" style="width:100%" /> 
    <img class="mySlides" src="img/03.PNG" style="width:100%" /> 
    <img class="mySlides" src="img/04.PNG" style="width:100%" /> 
    <img class="mySlides" src="img/05.PNG" style="width:100%" /> 
    <p style="text-align:center;">Recent Earthquakes In India </p>
</div>
<br>
<br>
<br>
<br>
<p style="text-align:center;font-size: 18px;">You Felt an Earthquake recently ? Kindly take a 2 min survey here </p>
<a href="form.php"> <p style="text-align:center;"><b>Here's the form </b><span>
  <img src="https://img.icons8.com/color/50/000000/fill-in-form.png"/></span></p></a>

<p style="text-align:center;font-size: 18px;">See In map </p>

<div id='map' style="width: 600px; height: 500px; border: 3px solid blue; margin-left:auto; margin-right:auto;"> </div>
     <script type="text/javascript"> 
      var map = new L.map('map').setView([22.5726, 88.3639], 4);
   L.tileLayer('https://api.maptiler.com/maps/basic/256/{z}/{x}/{y}.png?key=dVhthbXQs3EHCi0XzzkL',{
       attribution:
       '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
   }).addTo(map);
   var marker = new L.marker([22.5726, 88.3639]).addTo(map);
   var city = L.markerClusterGroup({ animateAddingMarkers : true });
       var Points = $.getJSON("get_location.php", function(data) {                     
            for (var i = 0; i < data.length; i++) {
              var new_location = new  L.LatLng(data[i].latitude, data[i].longitude);
              var place = data[i].place;
              var Time=data[i].Time;
              var magnitude=data[i].mag;
              var magType=data[i].magType;
              var marker = new L.marker(new_location, {
                title: place
              });
              var message = "<b>" + "Place: " +place+ "</b><br>Time of Earthquake: "+Time+"<br> Magnitude of Earthquake: "+magnitude+" "+
               magType;
              marker.bindPopup(message);
              city.addLayer(marker);
   
            }
       });
         
       map.addLayer(city);
    </script>

<br>
<br>

<footer class="footer-distributed">
 
			<div class="footer-left">

            
				<p class="footer-links">
                    <img src="img/fot.png">
                   <br>
          <strong>Quakeshake</strong>
          <br>
					<a href="#">Home</a>
					·
					<a href="aboutUs.html">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="contactUs.html">Contact</a>
                   
				</p>
				<p class="footer-company-name">Copyright reserved © 2021</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email">
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>
        <div>
        <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>
</body>
</html>
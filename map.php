
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Maps</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
<script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <div id='map' style=" width: 900px; height: 700px;"> </div>
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
              var message = "<b>" + "Place: " +place+ "</b><br>Time of Earthquake: "+Time+"<br> Magnitude of Earthquake: "+magnitude+" "+ magType;
              marker.bindPopup(message);
              city.addLayer(marker);
   
            }
       });
         
       map.addLayer(city);
    </script>
</body>
</html>

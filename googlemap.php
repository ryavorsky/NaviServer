<html>
<head>
    <link rel="stylesheet" href="mapstyle.css" type="text/css">
    <style type="text/css">
        .labels {
             color: white;
             background-color: red;
             font-family: "Lucida Grande", "Arial", sans-serif;
             font-size: 10px;
             text-align: center;
             width: 10px;     
             white-space: nowrap;
        }
    </style>
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
    var map;

    function initialize() {
      directionsDisplay = new google.maps.DirectionsRenderer();
      var map_center = new google.maps.LatLng(<?=$lat ?>, <?=$lon ?>);
      var mapOptions = {
        zoom:17,
        center: map_center
      };
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      
      var marker = new google.maps.Marker({
        position: map_center,
        map: map,
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
    <div id="map-canvas"></div>
</body>
</html>
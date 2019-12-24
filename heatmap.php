<?php
    require_once "db.php";
?>

<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
			<title>Air Monitoring System</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link href="cssForHome.css" rel="stylesheet">

			<link rel="stylesheet" href="leaflet/leaflet.css">
			<script src="leaflet/leaflet.js"></script>
			
			<link rel="stylesheet" href="css/stylesheet.css">
			<script src="js/app.js"></script>
			<!-- <script async defer
    			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6wAa9OYZjUFgisXP6vIez963OflUcq2Q&callback=initMap">
         </script> -->
        <script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6wAa9OYZjUFgisXP6vIez963OflUcq2Q&libraries=visualization">
</script>
			<script src="js/HomeFront.js"></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          </button>
          </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="home.html" class="image_navbar"></a></li>
                <li><a href="#"><font size=5" color="yellow"><b> Air Pollution Monitoring System</b></font></a></li>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="heatmap.php">Heat Map</a></li>
                <li><a href="home1.html">Data</a></li>    
                <li><a href="HowItWorks2.html">The Project</a></li> 
                <li><a href="HowItWorks2.html" rel="m_PageScroll2id">Contact us</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right visible-lg">
            
              </ul>     
          </div>
        </div>
      </div>
      
      <div id="map2"></div>
      
      <script src="js/heatmap.js"></script>
  </body>
</html>

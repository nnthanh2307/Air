<?php
	require_once("db.php");
	require_once("new.php");
?>
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
			<script async defer
    			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6wAa9OYZjUFgisXP6vIez963OflUcq2Q&callback=initMap">
   			</script>
			
	
	 <?php
            if ($con) {
			  toXML();
            } else {
            echo "Error updating record: " . $con->error;
            }
      ?>			
		
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
							<li><a href="index.php" class="image_navbar"></a></li>
							<li><a href="index.php"><font size=5" color="yellow"><b> Air Pollution Monitoring System</b></font></a></li>
							<li class="active"><a href="#">Home</a></li>
							<li><a href="heatmap.php">Heat Map</a></li>
							<li><a href="HowItWorks2.html">Data</a></li>    
							<li><a href="HowItWorks2.html">The Project</a></li> 
							<li><a href="HowItWorks2.html" rel="m_PageScroll2id">Contact us</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right visible-lg">
							<!-- logo -->
						</ul>     
				</div>
			</div>
		</div>

		<!-- <iframe src="index.php"></iframe> -->
		<h3 class = "thanh">My Google Maps Demo</h3>
		<div id="map"></div>
		<div id="legend"><h3>Mức cảnh báo</h3>
	</div>

		<!-- MAP SECTION -->
	<!--<div id="map"> -->
		<div class="content an">
			

			<div class="col-md-3" id="valuesTable" style="padding-top: 24px">
			<span id="close">X</span>

				
				<div id="locationheader" style="float:left"></div>
				<!--<div id="lastupdated">Last Updated</div>-->

				<table class="table table-condensed" id="pollutants" style="padding-top: 20px">
				<tr>
					<td id="coa" class="pollutantName values" style="color:white";>CO</td>
					<td id="cob" class="alpha1 pollutantName pollutantValue values" style="color:white";></td>
				</tr>	
				<tr>
					<td class="pollutantFull" style="color:white";>Carbon Monoxide</td>
					<td class="unitlabel" style="color:white";>ppb</td>
				</tr>
				<tr>
					<td id="noa" class="pollutantName values" style="color:white";>NO</td>
					<td id="nob" class="alpha2 pollutantName pollutantValue values" style="color:white";></td>
				</tr>
				<tr>
					<td class="pollutantFull" style="color:white";>Nitric Oxide</td>
					<td class="unitlabel" style="color:white";>ppb</td>
				</tr>
				<tr>
					<td id="no2a" class="pollutantName values" style="color:white";>NO<sub>2</sub></td>
					<td id="no2b" class="alpha3 pollutantName pollutantValue values" style="color:white";></td>
				</tr>
				<tr>
					<td class="pollutantFull" style="color:white";>Nitrogen Dioxide</td>
					<td class="unitlabel" style="color:white";>ppb</td>
				</tr>
				<tr>
					<td id="o3a" class="pollutantName values" style="color:white";>O3</td>
					<td id="o3b" class="alpha1 pollutantName pollutantValue values" style="color:white";></td>
				</tr>	
				<tr>
					<td class="pollutantFull" style="color:white";>O3</td>
					<td class="unitlabel" style="color:white";>ppb</td>
				</tr>
				<tr>
					<td id="Finea" class="pollutantName values" style="color:white";>Fine Particles</td>
					<td id="Fineb" class="alpha1 pollutantName pollutantValue values" style="color:white";></td>
				</tr>	
				<tr>
					<td class="pollutantFull" style="color:white";>Fine Particles</td>
					<td class="unitlabel" style="color:white";>ppb</td>
				</tr>
				<tr>
					<td id="Coursea" class="pollutantName values" style="color:white";>Course Particles</td>
					<td id="Courseb" class="alpha1 pollutantName pollutantValue values" style="color:white";></td>
				</tr>	
				<tr>
					<td class="pollutantFull" style="color:white";>Course Particles</td>
					<td class="unitlabel" style="color:white";>ppb</td>
				</tr>
				</table>
				<div>
					<p style="font-size: 15px; margin-top: 30px; text-align: center">Click vào một vị trí trên bản đồ để xem chất lượng không khí</p>
					<p style="font-size: 12px; margin-bottom: 55px"><strong>Chú ý: </strong> Giá trị hiển thị trung bình trong khoảng 10s, do đó có thể bị ảnh hưởng bởi những đao dộng nhỏ</p>
				</div>
			
				</div>
			<!--	</div>   -->
			<script src="js/HomeFront.js"></script>
	</body>
</html>
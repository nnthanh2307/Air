
	  var iconBase = 'https://maps.google.com/mapfiles/kml/pushpin/';
	  var icons={
	     a:{
		   icon:iconBase+'grn-pushpin.png',
		   name:'Good'
		 },
         b:{
		   icon:iconBase+'ltblu-pushpin.png',
		   name:'Moderate'
		 },
		  c:{
		   icon:iconBase+'ylw-pushpin.png',
		   name:'Unhealthy for Sensityve Groups'
     },
      d:{
      icon:iconBase+'pink-pushpin.png',
      name:'Unhealthy'
    },
      e:{
      icon:iconBase+'purple-pushpin.png',
      name:'Very Unhealthy'
    },
      f:{
      icon:iconBase+'red-pushpin.png',
      name:'Hazardous'
    }
    
    
	  };
  
		function initMap()
		 {
		  var map = new google.maps.Map(document.getElementById('map'), {
		  center: new google.maps.LatLng(21.027698,105.8324),
		  

		  zoom: 17,
          mapTypeId: 'roadmap'
        });
        var infoWindow = new google.maps.InfoWindow;
          document.getElementById('locationheader').innerHTML ='Location';
          document.getElementById('cob').innerHTML ='Empty';
          document.getElementById('nob').innerHTML ='Empty';
          document.getElementById('no2b').innerHTML ='Empty';
          document.getElementById('o3b').innerHTML ='Empty';
          document.getElementById('Fineb').innerHTML ='Empty';
          document.getElementById('Courseb').innerHTML ='Empty';
          // Change this depending on the name of your PHP or XML file
          	downloadUrl('myxml.xml?id='+Math.random(), function(data) {
            var xml = data.responseXML;
      
            var gases= xml.getElementsByTagName('gas');
 
			var i=0;
            Array.prototype.forEach.call(gases, function(gasElem) {
              var CO =parseInt(gases[i].getElementsByTagName("CO")[0].childNodes[0].nodeValue);
			 console.log(CO);
              var NO = parseInt(gases[i].getElementsByTagName("NO")[0].childNodes[0].nodeValue);
              var NO2= parseInt(gases[i].getElementsByTagName("NO2")[0].childNodes[0].nodeValue);
              var O3= parseInt(gases[i].getElementsByTagName("O3")[0].childNodes[0].nodeValue);
              var Fine= parseInt(gases[i].getElementsByTagName("FineParticles")[0].childNodes[0].nodeValue);
              var Course= parseInt(gases[i].getElementsByTagName("CourseParticles")[0].childNodes[0].nodeValue);
              var type = gases[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
              var point = new google.maps.LatLng(
                  parseFloat(gases[i].getElementsByTagName("lat")[0].childNodes[0].nodeValue),
                  parseFloat(gases[i].getElementsByTagName("lng")[0].childNodes[0].nodeValue));
                  
        var avg =((CO+NO+NO2+O3+Fine+Course)/6).toFixed(0);
			  console.log(avg);
			  if(avg>50) console.log("Hi");
              i++;
              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = type
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));
          //add
        var text = document.createElement('text');
              text.textContent = avg
              infowincontent.appendChild(text);
			  infowincontent.appendChild(document.createElement('br'));
        
        //set mau cho flag theo dieu kien
        var x;
        
                if(avg <= 50)
                {
                  x = "a"
                }
                else if(avg > 50 && avg <=100 )
                {
                  x = "b";
                }
                else if(avg > 100 && avg <= 150)
                {
                  x = "c";
                }
                else if(avg > 150 && avg <= 200)
                {
                  x = "d"
                }
                else if(avg > 200 && avg <= 300)
                {
                  x = "e"
                }
                else
                {
                  x = "f";
                }
              
			  //var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                //label: icon.label
                icon: icons[x].icon
              });
			  
                marker.addListener('click', function() {

                  $(".content").removeClass("an");
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
                document.getElementById('locationheader').innerHTML =type;
                document.getElementById('cob').innerHTML =CO;
                document.getElementById('nob').innerHTML =NO;
                document.getElementById('no2b').innerHTML =NO2;
                document.getElementById('o3b').innerHTML =O3;
                document.getElementById('Fineb').innerHTML =Fine;
                document.getElementById('Courseb').innerHTML =Course;
              });
            });
          });
        var legend = document.getElementById('legend');
        for (var key in icons) {
          var type = icons[key];
          var name = type.name;
		  console.log(name);
          var icon = type.icon;
          var div = document.createElement('div');
          div.innerHTML = '<img src="' + icon + '"> ' + name;
          legend.appendChild(div);
        }

        map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
        }

        function openIW(layerEvt) {
  if (layerEvt.row) {
    var content = layerEvt.row['admin'].value;
  } else if (layerEvt.featureData) {
    var content = layerEvt.featureData.name;
  }
        document.getElementById('locationheader').innerHTML =content;
        document.getElementById('cob').innerHTML =content;
        document.getElementById('nob').innerHTML =content;
        document.getElementById('no2b').innerHTML =content;
        document.getElementById('o3b').innerHTML =O3;
				document.getElementById('Fineb').innerHTML =content;
				document.getElementById('Courseb').innerHTML =content;
}

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

$(document).ready(function () {
    $("#close").click(function (e) { 
      e.preventDefault();
      console.log("ok");
      $(".content").addClass("an");
    });
});
	

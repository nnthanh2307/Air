
// function get data from xml file
getXML('myxml.xml',function(data)
{
    console.log(data);
    var heatmap = [];
    // console.log(data);
    // console.log(typeof(data));
    var item= data.getElementsByTagName('gas');
    var i = 0;
    Array.prototype.forEach.call(item, function(data)
    {
        var lat = parseFloat(item[i].getElementsByTagName("lat")[0].childNodes[0].nodeValue);
        var lng =parseFloat( item[i].getElementsByTagName("lng")[0].childNodes[0].nodeValue);
        console.log(lat)
        console.log(lng)
        heatmap.push(new google.maps.LatLng(lat, lng)) 
        i++;
    });

    var hanoi = new google.maps.LatLng(21.027698,105.8324);

    map = new google.maps.Map(document.getElementById('map2'), {
    center: hanoi,
    zoom: 13,
    mapTypeId: 'satellite'
    });

    var heatmap = new google.maps.visualization.HeatmapLayer({
    data: heatmap
    });
  
    heatmap.setMap(map);
   
});



function getXML(url, callback)
{
    let request = new XMLHttpRequest();
    request.open('GET', url);
    request.onreadystatechange = function()
    {
        if(request.readyState == 4 && request.status == 200)
        {
            callback(request.responseXML);
        }
    }
    request.send();
}

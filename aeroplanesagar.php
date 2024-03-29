 <?php
//open gpx file
 $array = array();
$gpx = simplexml_load_file("GPs1.gpx");
foreach ($gpx->trk as $trk) {
    foreach($trk->trkseg as $seg){
        foreach($seg->trkpt as $pt){
            $array[] = $pt["lat"];
            $array[] = $pt["lon"];
            
        }}}
unset($gpx);
//$array =str_replace("'","",$array);
// print_r($array);
 echo $long_one = $array[1];
 echo $lat_one =$array[0];
 echo $long_two = end($array);
$array_reverse = array_reverse($array);
$lat_two = $array_reverse[1];
// var_dump($lat);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Animate a point along a route</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:50%; height: 50%}
    </style>
    
</head>
<body>

<style>
.overlay {
    position: absolute;
    top: 10px;
    left: 10px;
}

.overlay button {
    font:600 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    background-color: #3386c0;
    color: #fff;
    display: inline-block;
    margin: 0;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
}

.overlay button:hover {
    background-color:#4ea0da;
}

button {

}
 
#pause::after {
content: 'Pause';
}
 
#pause.pause::after {
content: 'Play';
}


</style>
<script src='https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js' charset='utf-8'></script>

<div id='map'></div>
<div class='overlay'>
    <button id='replay'>Replay</button>
    <button id='pause'></button>
</div>

<script>

  var one = <?php   echo $long_one ?>;
var two = <?php  echo $lat_one ?>;
var three = <?php  echo $long_two ?>;
var four = <?php  echo $lat_two ?>;
var startTime = 0;
var progress = 0;
var pauseButton = document.getElementById('pause');
mapboxgl.accessToken = 'pk.eyJ1Ijoic2FybmEiLCJhIjoiY2p0ZTh6amJ3MTdpczN5cWl2YTllMTFxOCJ9.n9TVUu18a-te8Ga7T3pm0A';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/satellite-v9',
    center: [one, two],
    zoom: 11
});

// San Francisco
var origin = [one, two];

// Washington DC
var destination = [three, four];

var resetTime = false; // indicator of whether time reset is needed for the animation
var pauseButton = document.getElementById('pause');

pauseButton.addEventListener('click', function() {
pauseButton.classList.toggle('pause');
if (pauseButton.classList.contains('pause')) {
cancelAnimationFrame(ani);
}

else {
alert('resume button');
resetTime = true;
animateLine();
alert(ani);
}

function animateLine(timestamp) {
if (resetTime) {
// resume previous progress
startTime = performance.now();
resetTime = false;
} else {
progress = timestamp - startTime;
}
}

});
// A simple line from origin to destination.
var route = {
    "type": "FeatureCollection",
    "features": [{
        "type": "Feature",
        "geometry": {
            "type": "LineString",
            "coordinates": [
                origin,
                destination
            ]
        }
    }]
};

// A single point that animates along the route.
// Coordinates are initially set to origin.
var point = {
    "type": "FeatureCollection",
    "features": [{
        "type": "Feature",
        "properties": {},
        "geometry": {
            "type": "Point",
            "coordinates": origin
        }
    }]
};

// Calculate the distance in kilometers between route start/end point.
var lineDistance = turf.lineDistance(route.features[0], 'kilometers');

var arc = [];

// Number of steps to use in the arc and animation, more steps means
// a smoother arc and animation, but too many steps will result in a
// low frame rate
var steps = 500;

// Draw an arc between the `origin` & `destination` of the two points
for (var i = 0; i < lineDistance; i += lineDistance / steps) {
    var segment = turf.along(route.features[0], i, 'kilometers');
    arc.push(segment.geometry.coordinates);
}

// Update the route with calculated arc coordinates
route.features[0].geometry.coordinates = arc;

// Used to increment the value of the point measurement against the route.
var counter = 0;

map.on('load', function () {
    // Add a source and layer displaying a point which will be animated in a circle.
    map.addSource('route', {
        "type": "geojson",
        "data": route
    });

    map.addSource('point', {
        "type": "geojson",
        "data": point
    });

    map.addLayer({
        "id": "route",
        "source": "route",
        "type": "line",
        "paint": {
            "line-width": 2,
            "line-color": "#007cbf"
        }
    });

    map.addLayer({
        "id": "point",
        "source": "point",
        "type": "symbol",
        "layout": {
            "icon-image": "airport-15",
            "icon-rotate": ["get", "bearing"],
            "icon-rotation-alignment": "map",
            "icon-allow-overlap": true,
            "icon-ignore-placement": true
        }
    });

    function animate() {
        // Update point geometry to a new position based on counter denoting
        // the index to access the arc.
        point.features[0].geometry.coordinates = route.features[0].geometry.coordinates[counter];

        // Calculate the bearing to ensure the icon is rotated to match the route arc
        // The bearing is calculate between the current point and the next point, except
        // at the end of the arc use the previous point and the current point
        point.features[0].properties.bearing = turf.bearing(
            turf.point(route.features[0].geometry.coordinates[counter >= steps ? counter - 1 : counter]),
            turf.point(route.features[0].geometry.coordinates[counter >= steps ? counter : counter + 1])
        );

        // Update the source with this new data.
        map.getSource('point').setData(point);

        // Request the next frame of animation so long the end has not been reached.
        if (counter < steps) {
           ani =  requestAnimationFrame(animate);
        }

        counter = counter + 1;
    }

     function pauseAnimate() {
     // alert('HELLO');
        //alert(this.position);
        /*window.clearTimeout(animateTimer);*/

    }
    



    document.getElementById('replay').addEventListener('click', function() {

        // Set the coordinates of the original point back to origin
        point.features[0].geometry.coordinates = origin;

        // Update the source layer
        map.getSource('point').setData(point);

        // Reset the counter
        counter = 0;

        // Restart the animation.
        animate(counter);
    });

    // document.getElementById('stop').addEventListener('click',function() {
    //      point.features[0].geometry.coordinates = origin;
    //      map.getSource('point').setData(point);
    //  pauseAnimate();
    // });
    
    // Start the animation.
   // animate(counter);

});
</script>

</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My sunny beach | Météo</title>

    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
    <link href="css/styles.css?v=1.6" rel="stylesheet">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>

  <body>
  <section class="beach">
       <div class="container">

	    <div class="row">
	      <div class="col-md-12" id="demo">
	      	<div id="map" style="width:100%; height: 550px"></div>
	      </div>
	    </div>
	</div>
 </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
    <script src="geoLocalisation.js"></script>
    <script src="maree.js"></script>

    <script>

    function meteo(lt, lg, callback) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            temperature(xhttp.responseText, lt, lg, callback);
          }
        }
        xhttp.open("GET", "http://api.openweathermap.org/data/2.5/forecast/weather?lat="+lt+"&lon="+lg+"&APPID=8cd0155d3957417c1206039f2cd0ea75", true);
        xhttp.send();
    }

    function temperature(data, lt, lg, callback){
      var requestResponse = data;
      var JSONresponse = JSON.parse(requestResponse);
      var tempK = JSONresponse.list[0].main.temp;
      callback(Math.round(tempK-273.15));
    }

    </script>


  </body>
</html>

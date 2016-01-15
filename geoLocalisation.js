var x = document.getElementById("demo");
var map;

	function getLocation() {
	    if (navigator.geolocation) {
	    	showPosition({coords: {latitude:48.471352, longitude:1.015720}});
	        //navigator.geolocation.getCurrentPosition(showPosition);
	    } else {
	        x.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}

	function showPosition(position) {
	    var lt = position.coords.latitude;
	    var lg = position.coords.longitude;

	    function carte(){
                map = L.map('map').setView([lt, lg], 8);
                geoMarker = L.marker([lt, lg]).addTo(map);
                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
                maxZoom:20,
                id: 'webdev33.nnan6dm1',
                accessToken: 'pk.eyJ1IjoiZXJ3YW5oYXF1ZXQiLCJhIjoiY2llZzY5NHVkMDAwMnN6bHpsaTBkeTBlbiJ9.UkUMJjUozaMu5J6R9ywhow'
                }).addTo(map);
      	}carte();


	}getLocation();

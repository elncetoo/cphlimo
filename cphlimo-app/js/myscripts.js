/*

BEFORE THE SCRIPT WILL WORK:

Get your developer key at : https://developers.google.com/maps/documentation/javascript/

*/


/*
 * Google Maps documentation: http://code.google.com/apis/maps/documentation/javascript/basics.html
 * Geolocation documentation: http://dev.w3.org/geo/api/spec-source.html
 */
/*

HTTP or HTTPS - http://code.google.com/apis/maps/documentation/javascript/basics.html

We think security on the web is pretty important, and recommend using HTTPS whenever possible. As part of our efforts to make the web more secure, we've made all of the Maps JavaScript API available over HTTPS. Using HTTPS encryption makes your site more secure, and more resistant to snooping or tampering.

IF REQUIRED, you can load the Maps JavaScript API over HTTP by requesting http://maps.googleapis.com/, or http://maps.google.cn for users in China.

*/

$( document ).on( "pageinit", "#map-page", function() {
    var defaultLatLng = new google.maps.LatLng(55.170596, 14.865507);  // Default to Hollywood, CA when no geolocation support
    if ( navigator.geolocation ) {
        function success(pos) {
            // Location found, show map with these coordinates
            drawMap(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));
        }
        function fail(error) {
            drawMap(defaultLatLng);  // Failed to find location, show default map
        }
        // Find the users current position.  Cache the location for 5 minutes, timeout after 6 seconds
        navigator.geolocation.getCurrentPosition(success, fail, {maximumAge: 500000, enableHighAccuracy:true, timeout: 6000});
    } else {
        drawMap(defaultLatLng);  // No geolocation support, show default map
    }
    function drawMap(latlng) {
        var myOptions = {
            // Zoom in or out on the map
            zoom: 14,
            center: latlng,
            // Disabling the default controls for the map
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
        // Add an overlay to the map of current lat/lng
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: "Greetings!"
        });
    }
});

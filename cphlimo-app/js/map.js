/*
                <!-- GEO LOCATION  -->    
                 <div id="map_wrapper">
                <div id="map_canvas" class="mapping"></div>
                </div>   
*/

            // INITIALIZE MAP AND MARKER
            // FOOD 1 - PAPIROEN
            function initialize() {
                      var marker = { lat: 55.679269, lng: 12.598503}; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Copenhagen Street Food'
              });
            }    










/*





            // FOOD 2 - RESTAURANT BROR
            function initialize() {
                      var marker = { lat: 55.679012, lng: 12.568166 }; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Restaurant Bror'
              });
            }    


            // FOOD 3 - Spisehuset Rub & Stub
            function initialize() {
                      var marker = { lat: 55.676422, lng: 12.574691 }; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Spisehuset Rub & Stub'
              });
            }    



            // ART 1
            function initialize() {
                      var marker = { lat: 55.669232, lng: 12.561358 }; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Warehouse 9'
              });
            }


           // ART 2 
            function initialize() {
                      var marker = { lat: 55.686987, lng: 12.593467 }; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Design museum'
              });
            }    



            // ART 3
            function initialize() {
                      var marker = { lat: 55.689635, lng: 12.552276}; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Assistens Cemetery'
              });
            }    


            // NIGHTLIFE 1
            function initialize() {
                      var marker = { lat: 55.686393, lng: 12.584026}; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Culture box'
              });
            }    



            // NIGHT 2
            function initialize() {
                      var marker = { lat: 55.679366, lng: 12.577666}; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Jazzhouse'
              });
            }



            // Night 3
            function initialize() {
                      var marker = { lat: 55.678257, lng: 12.569768}; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Floss Bar'
              });
            }


           // Social 1 
            function initialize() {
                      var marker = { lat: 55.694138, lng: 12.542083}; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Nørrebroparken'
              });
            }    



            // Social 2
            function initialize() {
                      var marker = { lat: 55.672831, lng: 12.600274}; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Nemoland'
              });
            }    


            // Social 3
            function initialize() {
                      var marker = { lat: 55.673290, lng: 12.601747}; 
                      var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 14,
                        center: marker,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    addMarker(marker, map);
            };

            google.maps.event.addDomListener(window, 'load', initialize);

            // Adds a marker to the map.
            function addMarker(locations, map) {
                    var marker = new google.maps.Marker({
                    position: locations,
                    map: map,
                    title: 'Byens Lys'
              });
            }    


*/






















































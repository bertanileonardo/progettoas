document.addEventListener("DOMContentLoaded", function(event) {
var map = L.map('map', {
    center: [45.383611555541236, 10.807880568367626],
    zoom: 17,
    dragging: false,
    tap: false,
    zoomControl: false 
    // scrollWheelZoom: false,
    // dragging: false,
    // tap: false
});
var x = document.getElementById("demo");
        
        var map_layer = 'https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png';
        const body = document.getElementsByTagName("body")[0];

        const userPrefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (userPrefersDark) {
          map_layer = 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png';
        }
        L.tileLayer(map_layer, {
            attribution: '&copy;&nbsp;<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>&nbsp;contributors&nbsp;e&nbsp;<a href="https://cartodb.com/attributions">CartoDB</a>'
          }).addTo(map);

        
        var myIconWar = L.icon({
          iconUrl: 'image/SVG/war.svg',
          iconRetinaUrl: 'image/SVG/war.svg',
          iconSize: [24, 24],
          iconAnchor: [9, 21],
          popupAnchor: [0, -18],
        });
        var markers = [            
          {
            lat: 45.383611555541236,
            long:  10.807880568367626, 
            titolo: "Battaglia di Custoza",
          }
        ];

        for (var i = 0; i < markers.length; ++i) {
              L.marker([markers[i].lat, markers[i].long], { icon: myIconWar})
                .bindPopup(
                '<center><div class="text-base">' + markers[i].titolo + '</div></center>'
                )
                .addTo(map);
        };

        L.control.locate({
          strings: {
              title: "Localizzami"
          }
      }).addTo(map);

        //posizione barra di attribuzione copyright
        map.attributionControl.setPosition('bottomleft');
});

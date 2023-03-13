document.addEventListener("DOMContentLoaded", function(event) {
var map = L.map('map', {
    center: [45.351773, 10.843065],
    zoom: 16,
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


        var myIcon = L.icon({
          iconUrl: 'image/SVG/1.svg',
          iconRetinaUrl:'image/SVG/1.svg',
          iconSize: [21, 21],
          iconAnchor: [0,10],
          popupAnchor: [10,-9],
        });
        var myIcon2 = L.icon({
          iconUrl: 'image/SVG/2.svg',
          iconRetinaUrl: 'image/SVG/2.svg',
          iconSize: [15, 24],
          iconAnchor: [9, 21],
          popupAnchor: [0, -18],
        });
        var myIcon3 = L.icon({
          iconUrl: 'image/SVG/3.svg',
          iconRetinaUrl: 'image/SVG/3.svg',
          iconSize: [15, 24],
          iconAnchor: [9, 21],
          popupAnchor: [0, -18],
        });
        var markers = [            
          {
            lat: 45.3527089, 
            long: 10.8427425,
            titolo: "Casa del Trattato",
            navigatore: 'https://www.google.com/maps/dir//Casa+Del+Trattato,+Via+Pace,+40,+37069+Villafranca+di+Verona+VR/@45.3526979,10.8422904,20.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4781ddd450d46bb3:0xbbe17ba533e99e98!2m2!1d10.8427904!2d45.3526949',
            video: 'video/casa-del-trattato/index.html',
          },
          {
            lat: 45.35107933013053,
            long: 10.843844203123302,
            titolo: "Caffè Fantoni",
            navigatore: 'https://www.google.com/maps/dir//Casa+Del+Trattato,+Via+Pace,+40,+37069+Villafranca+di+Verona+VR/@45.3526979,10.8422904,20.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4781ddd450d46bb3:0xbbe17ba533e99e98!2m2!1d10.8427904!2d45.3526949',
            video: 'video/casa-del-trattato/index.html',
          }
        ];

        for (var i = 0; i < markers.length; ++i) {
              L.marker([markers[i].lat, markers[i].long], { icon: myIcon})
                .bindPopup(
                '<center><div class="text-base">' + markers[i].titolo + '</div></center>'// + 
                // '<center><a class="text-sm py-4" href="' + markers[i].video + '" > VIDEO </a> '
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

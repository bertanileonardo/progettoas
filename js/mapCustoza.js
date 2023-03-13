document.addEventListener("DOMContentLoaded", function(event) {
var map = L.map('map', {
    center: [45.380, 10.7996],
    zoom: 13,
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

           

        //icone 
        // var myIcon = L.icon({
        //   iconUrl: 'image/circle24.png',
        //   iconRetinaUrl:'image/circle48.png',
        //   iconSize: [10, 10],
        //   iconAnchor: [5, 3],
        //   popupAnchor: [0,0],
        // });
        // var myIcon2 = L.icon({
        //   iconUrl: 'image/pin24blu.png',
        //   iconRetinaUrl: 'image/pin48blu.png',
        //   iconSize: [15, 24],
        //   iconAnchor: [9, 21],
        //   popupAnchor: [0, -14],
        // });

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
              lat: 45.378884508248255, 
              long: 10.793775661049773,
              titolo: "Ossario di Custoza",
              navigatore: 'https://www.google.it/maps/place/Ossario+di+Custoza/@45.3790709,10.7932831,219m/data=!3m1!1e3!4m5!3m4!1s0x4781dd6e7aebd411:0x1482a100efa5aa0f!8m2!3d45.3786662!4d10.7936207',
              video: 'video/casa-del-trattato/index.html',
            },
            {
              lat: 45.38112217681911,
              long: 10.8160504134123,
              titolo: "Monumento ai Granatieri<br>di Sardegna",
              navigatore: 'https://www.google.it/maps/dir//45.3811111,10.8160556/@45.3809861,10.814624,17z',
              video: 'video/casa-del-trattato/index.html',
            },
            { 
              lat: 45.38231953049602,
              long: 10.80616484954874,
              navigatore: 'https://www.google.it/maps/dir//45.3823333,10.8061667/@45.3822619,10.8062167,17z',
              titolo: "Monumento ad Amedeo<br>di Savoia",
              video: 'video/casa-del-trattato/index.html',
            },
            {
              lat: 45.37375924626964,
              long: 10.796243279378228,
              titolo: "Villa Pignatti",
              navigatore: 'https://www.google.it/maps/dir//Villa+Pignatti+Morano,+Via+Bellavista,+5,+37066+Custoza+VR/@45.3737,10.7940713,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4781ddb535ae405f:0xa08e8c7b41d8d4cf!2m2!1d10.79626!2d45.3737',
              video: 'video/casa-del-trattato/index.html',
            },
        ];

        for (var i = 0; i < markers.length; ++i) {
            if(i<3){
              L.marker([markers[i].lat, markers[i].long], { icon: myIcon2})
                .bindPopup(
                '<center><div class="text-base">' + markers[i].titolo + '</div></center>'
                )
                .addTo(map);
            }
            else{
              L.marker([markers[i].lat, markers[i].long], { icon: myIcon})
                .bindPopup(
                '<center><div class="text-base">' + markers[i].titolo + '</div></center>' 
                // + '<center><a class="text-sm py-4" href="' + markers[i].video + '" > VIDEO </a> '
                )
                .addTo(map);
            }
        };
        
        L.control.locate({
          strings: {
              title: "Localizzami"
          }
      }).addTo(map);

        //posizione barra di attribuzione copyright
        map.attributionControl.setPosition('bottomleft');
});

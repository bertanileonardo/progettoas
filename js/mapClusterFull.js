document.addEventListener("DOMContentLoaded", function(event) {
var map = L.map('map', {
    center: [45.36371713248525, 10.822242169570334],
    zoom: 12,
    dragging: false,
    tap: false,
    // scrollWheelZoom: false,
    // dragging: false,
    // tap: false
});
var map_layer = 'https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png';
const userprefersdark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
if (userprefersdark) {
  map_layer = 'http://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png';
}
L.tileLayer(map_layer, {
    attribution: '&copy;&nbsp;<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>&nbsp;contributors&nbsp;e&nbsp;<a href="https://cartodb.com/attributions">CartoDB</a>'
  }).addTo(map);
// var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//         maxZoom: 18,
//         attribution: '&copy;&nbsp;<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>&nbsp;contributors&nbsp;-&nbsp;&copy;&nbsp;<a href="https://cartodb.com/attributions">CartoDB</a>'
//     }),
//     latlng = L.latLng(45.375, 10.82);

// var map = L.map('map', {center: latlng, zoom: 13, layers: [tiles]});
map.attributionControl.setPosition('topright');

var addressPoints = [
    //[latirudine, longitudine, luogo, nome, tipo]
    [45.35285318945351, 10.842801134666855, "Villafranca", "Museo del Risorgimento", "edificio"],
    [45.35107933013053, 10.843844203123302, "Villafranca", "Caffè Fantoni", "edificio"],
    [45.378884508248255, 10.793775661049773, "Custoza", "Ossario di Custoza", "monumento"],
    [45.38112217681911, 10.8160504134123, "Custoza", "Monumento ai Granatieri di Sardegna", "monumento"],
    [45.38231953049602, 10.80616484954874, "Custoza", "Monumento ad Amedeo di Savoia", "monumento"],
    [45.3835795059183, 10.80781579825729, "Custoza", "Tamburino Sardo", "edificio"],
];

var markers = L.markerClusterGroup();

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
  iconAnchor: [8, 21],
  popupAnchor: [0, -18],
});
var myIcon3 = L.icon({
  iconUrl: 'image/SVG/3.svg',
  iconRetinaUrl: 'image/SVG/3.svg',
  iconSize: [15, 24],
  iconAnchor: [9, 21],
  popupAnchor: [0, -18],
});

for (var i = 0; i < addressPoints.length; i++) {
    var a = addressPoints[i];
    var title = a[3];
    var pointType = a[4];
    var icon;
    if(pointType === "monumento") {icon=myIcon2};
    if(pointType === "edificio") {icon=myIcon};
    var marker = L.marker(new L.LatLng(a[0], a[1]), { title: title, icon:icon,});
    marker.bindPopup(title);
    markers.addLayer(marker);
}

map.addLayer(markers);

L.control.locate({
    strings: {
        title: "Localizzami"
    }
}).addTo(map);

//posizione barra di attribuzione copyright
map.attributionControl.setPosition('bottomleft');
});
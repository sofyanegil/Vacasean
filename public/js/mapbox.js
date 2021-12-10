//Ambil nilai lintang, dan bujur
var lat = $("#lintang").html();
var lon = $("#bujur").html();

L.mapbox.accessToken =
    "pk.eyJ1Ijoic29meWFuZWdpIiwiYSI6ImNrd2s2dG50MTAza3IycnRiYmpsZTdtM24ifQ.9cSbBdgNtYSMI-W34bxPew";

var map = L.mapbox
    .map("map", null, {
        zoomAnimation: true,
        fadeAnimation: true,
        inertia: true,
    })
    .setView([lat, lon], 15)
    .addLayer(
        L.mapbox.styleLayer("mapbox://styles/mapbox/satellite-streets-v11")
    );

var marker = L.marker([lat, lon], {
    icon: L.mapbox.marker.icon({
        "marker-color": "#f86767",
    }),
}).addTo(map);

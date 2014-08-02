<!--suppress HtmlUnknownTarget -->
<div id="map_canvas"></div>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script src="js/namespace.js"></script>

<script src="js/Atlas/Map.js"></script>

<script src="js/Atlas/Marker/MarkerModel.js"></script>
<script src="js/Atlas/Marker/MarkerFactory.js"></script>
<script src="js/Atlas/Marker/MarkersStorage.js"></script>

<script type="text/javascript">
    var MarkerModel   = Atlas.Marker.MarkerModel;
    var Map           = new Atlas.Map('map_canvas');
    var MarkerStorage = new Atlas.Marker.MarkerStorage();

    MarkerStorage.getMarkers(function(Markers) {
        Markers.map(function(Marker) {
            Map.addMarker(Marker);
        });

        Map.reindexMarkers();
    });
//
//    function initialize() {
//        var mapOptions = {
//            center: new google.maps.LatLng(-34.397, 150.644),
//            zoom: 8,
//            mapTypeId: google.maps.MapTypeId.ROADMAP
//        };
//        var map = new google.maps.Map(document.getElementById("map_canvas"),
//            mapOptions);
//    }
//    $(function(){
//        initialize();
//
//        MarkerStorage.getPoints(function(points) {
//            console.log(points);
//        });
//    });
</script>
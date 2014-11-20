/**
 * Хранилище маркеров
 * @constructor
 */
Atlas.Marker.MarkerStorage = function () {
    this.urlGetMarkers = 'markers.php';
    this.urlSearchMarkersFulltext = 'find.php';
};

/**
 * Делает запрос к серверу
 * @param url
 * @param data
 * @param callback
 */
Atlas.Marker.MarkerStorage.prototype.request = function(url, data, callback) {
    $.post(url, data, callback);
};

/**
 * Достает из базы точки
 */
Atlas.Marker.MarkerStorage.prototype.getMarkers = function(callback) {
    this.request(this.urlGetMarkers, {}, function(response) {
        var markers = [];
        var marker;

        for (var markerData in response.points) {
            markers.push(new Atlas.Marker.MarkerModel(response.points[markerData]));
        }

        callback(markers);
    });
};

/**
 *
 * @param callback
 */
Atlas.Marker.MarkerStorage.prototype.searchMarkersFullText = function(text, callback) {
    this.request(this.urlSearchMarkersFulltext, {
        text: text
    }, function(response) {
        var markers = [];
        var marker;

        for (var markerData in response.points) {
            markers.push(new Atlas.Marker.MarkerModel(response.points[markerData]));
        }

        callback(markers);
    });
};
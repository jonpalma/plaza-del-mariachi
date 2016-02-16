var map, draggable;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
	if( $('#googleMap').attr('position') == 'plaza' ) {
		var $lat = 28.639846,
			$long = -106.071977,
			$title = 'Plaza del Mariachi';
	}
	
	var map_canvas = document.getElementById('googleMap');

	var map_options = {
		center: new google.maps.LatLng($lat, $long),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		draggable: !("ontouchend" in document)
	};

	map = new google.maps.Map(map_canvas, map_options);

	var markerChihuahua = new google.maps.Marker({
		position: new google.maps.LatLng($lat, $long),
		map: map,
		title: $title
	});
}
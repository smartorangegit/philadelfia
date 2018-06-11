function mapMaker(id, longt, lat) {
	var id = id;
	flag_item = 1;
	var contentString = '<div class="map__info-marker">' + '<h3>Відділ продажу</h3>' +
		'<p>Адреса: Київ, Бориспільська траса 252 А (метро Бориспільська)</p>' + '</div>';


	var locations = [
			    [contentString, 50.394505, 30.709931, "img/map-marker.png"]
			];
	var centerX = longt || 50.399584;
	var centerY = lat || 30.696588;

	if($(window).width() < 748) {
		centerY = locations[0][2];
	}
	var map = new google.maps.Map(document.getElementById(id), {
				    zoom: 15,
				    scrollwheel: false,
				    center: new google.maps.LatLng( centerX, centerY),
				    mapTypeId: google.maps.MapTypeId.ROADMAP
				});

	var infowindow = new google.maps.InfoWindow();
	var marker, i;

	for (i = 0; i < locations.length; i++) {
	    marker = new google.maps.Marker({
	        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	        map: map,
	        icon: {
	            url: locations[i][3],
	            scaledSize: new google.maps.Size(141, 149)
	        }
	    });
	    infowindow.setContent(locations[i][0]);
	    infowindow.open(map, marker);
	    google.maps.event.addListener(marker, 'click', (function(marker, i) {
	        return function() {
	            infowindow.setContent(locations[i][0]);
	            infowindow.open(map, marker);
	        }
	    })(marker, i));
	}

	$.getJSON("/js/mapStyle.json", function(data) {
         map.setOptions({styles: data});
     });

}
if (document.getElementById('map1')) {
	mapMaker('map1', 50.397004);
}

// if (document.getElementById('map')) {
// 	mapMaker('map');
// }

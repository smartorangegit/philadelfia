function mapMaker(id, longt, lat) {
	var id = id;
	flag_item = 1;
	var
		contentString9 = '<div class="map__info-marker">' + '<h3>PHILADELPHIA Concept House</h3>' +
		'<p>Адреса: Київ, Кловський узвіз, 19 </p>' + '</div>',
		contentString2 = '<div class="map__info-marker">Стоматологічна клініка</div>',
		contentString3 = '<div class="map__info-marker">Банкомат Ощадбанк</div>',
		contentString4 = '<div class="map__info-marker">Спеціалізована школа №89 з <br>поглибленим вивченням іноземних мов</div>',
		contentString5 = '<div class="map__info-marker">Гімназія №109 ім. Т.Г. Шевченка</div>',
		contentString6 = '<div class="map__info-marker">Дошкільний навчальний заклад №632</div>',
		contentString7 = '<div class="map__info-marker">Ощадбанк, АО</div>',
		contentString8 = '<div class="map__info-marker">КБ ПриватБанк, ПАО</div>';

// 50.437010, 30.541347

	var locations = [
				[contentString2, 50.436653, 30.537347, "/img/map/dent.png"],
				[contentString3, 50.434541, 30.54343, "/img/map/bank.png"],
				[contentString4, 50.439243, 30.537797, "/img/map/Marker.png"],
				[contentString5, 50.433926, 30.538774, "/img/map/Marker.png"],
				[contentString6, 50.435491, 30.53961, "/img/map/sad.png"],
				[contentString7, 50.435456, 30.546176, "/img/map/bank.png"],
				[contentString8, 50.439367, 30.544927, "/img/map/bank.png"],
				[contentString9, 50.437010, 30.541347, "/img/map/map-marker.png"]
			];
	var centerX = longt || 50.437010;
	var centerY = lat || 30.541347;

	if($(window).width() < 748) {
		centerY = locations[0][2];
	}
	var map = new google.maps.Map(document.getElementById(id), {
			zoom: 16,
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
	            scaledSize: new google.maps.Size(60, 80)
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
	mapMaker('map1', 50.437010);
}

// if (document.getElementById('map')) {
// 	mapMaker('map');
// }

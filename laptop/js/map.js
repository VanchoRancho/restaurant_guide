$(document).ready(function(){

	//['название','lat','lng','адрес','рейтинг рг','рейтинг пользователей','order_food','order_table','order_banket']
	var locations = [
		['Якитория','59.931118','30.30278','Большая Морская улица, 58, Санкт-Петербург','7,60','7,10','1','1','1'],
		['Yoshida','59.935789','30.322045','Невский проспект, 21, Санкт-Петербург','1','7,60','7,10','1',''],
		['Via d`Argento','59.925488','30.313966','Санкт-Петербург, наб. Канала Грибоедова, д. 64','7,60','7,10','1','','1'],
		['Хочу Харчо / Ginza','59.933336','30.334355','Садовая улица, 22, Санкт-Петербург','7,60','7,10','','1','1'],
		['Якитория','59.931118','30.30278','Большая Морская улица, 58, Санкт-Петербург','7,60','7,10','1','1','1'],
	];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: new google.maps.LatLng(59.931118, 30.302782),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: false,
		streetViewControl: false,
		panControl: false,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.TOP_LEFT
		},
		scrollwheel: false,
		backgroundColor: '#ccc'
	});



	var styles = [ { featureType: "administrative", elementType: "all", stylers: [ { saturation: -100 } ] },
		{ featureType: "landscape", elementType: "all", stylers: [ { saturation: -100 } ] },
		{ featureType: "poi", elementType: "all", stylers: [ { saturation: -100 } ] },
		{ featureType: "road", elementType: "all", stylers: [ { saturation: -100 } ] },
		{ featureType: "transit", elementType: "all", stylers: [ { saturation: -100 } ] },
		{ featureType: "water", elementType: "all", stylers: [ { saturation: -100 } ] }];
	var styledMap = new google.maps.StyledMapType(styles,
		{name: "Styled Map"});

	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');

	var marker;
	var markers = new Array();

	// Add the markers and infowindows to the map
	var icon = {
		url: '/laptop/img/map_small.png',
		scaledSize: new google.maps.Size(16, 22)
	};
	for (var i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			icon : icon,
		});

		markers.push(marker);
		var infowindow = new google.maps.InfoWindow({});
		infobox = new InfoBox({
			disableAutoPan: false,
			alignBottom: true,
			zIndex: null,
			closeBoxURL: '/laptop/img/cross.png',
			infoBoxClearance: new google.maps.Size(30, 30)});
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				var item_rating_rg = '',
					item_rating_user = '',
					item_food = '',
					item_table = '',
					item_banket ='';

				if(locations[i][4]){item_rating_rg ="<img src='/laptop/img/rating_rg.png' alt=''> <span class='color_dark'>"+locations[i][4]+"</span>";}
				if(locations[i][5]){item_rating_user ="<img src='/laptop/img/rating_users.png' alt=''> <span class='color_dark'>"+locations[i][5]+"</span>";}
				if(locations[i][6] == 1){item_food ="<img src='/laptop/img/order_food.png' alt=''>";}
				if(locations[i][7] == 1){item_table ="<img src='/laptop/img/order_table.png' alt=''>";}
				if(locations[i][8] == 1){item_banket ="<img src='/laptop/img/order_banket.png' alt=''>";}
				var contentString = '<div class="element_map">' +
					'<span class="title_strong">'+locations[i][0]+'</span>' +
					'<p class="text"> '+locations[i][3]+'</p>' +
					'<div class="column_1 dib"> '+item_rating_rg+' '+item_rating_user+'</div>' +
					'<div class="column_2 dib"> '+item_food+' '+item_table+' '+item_banket+'</div>' +
					'</div>';
				infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				//infowindow.open(map,marker);
				infobox.setContent(contentString);
				infobox.open(map, marker);

				// google.maps.event.addListener(marker, 'click', function() {
				// 	infobox.open(map, marker);
				// });

			}
		})(marker, i));

	}


        // marker.addListener('click', function() {
			// infowindow.open(map, marker);
        // });

});
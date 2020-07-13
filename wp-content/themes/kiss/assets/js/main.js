(function () {

	$('.why_block').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.our_team_slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.blog_slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.banner_w3lspvt').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		arrows: false
	});

	$('.popup-items').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplaySpeed: 3000,
		dots: true,
		arrows: false
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 1) {
			$('.logo').addClass('logo_scroll');
			$('.header .phone-mobile').addClass('phone-mobile_scroll');
			$('.toggle[for="drop"]').addClass('toggle_scroll');
		}
		else {
			$('.logo').removeClass('logo_scroll');
			$('.header .phone-mobile').removeClass('phone-mobile_scroll');
			$('.toggle[for="drop"]').removeClass('toggle_scroll');
		}
	});

	new WOW().init();

	var geocoder;
	var map;

	var query = [
		['Івано-Франківськ Галицька 112в, Україна', 'Галицька 112в', 'вул.Галицька 112в \n\n +38 (095) 76 46 964'],
		['Калуш Сівецька 2, Україна', 'Сівецька 2', 'Сівецька 2 \n\n +38 (097) 76 46 964']
	];


	var idArr = new Array('marker1','marker2');
	var info;
	function initialize() {
		geocoder = new google.maps.Geocoder();
		info = new google.maps.InfoWindow()
		var mapOptions = {
			center: new google.maps.LatLng(48.921500, 24.7097200),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			zoom: 10,
			scrollwheel: false,
			mapTypeControl: false,
			zoomControl: true,
		};
		map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
		codeAddress();
	}
	function codeAddress() {
		for (var i = 0; i < query.length; i++) {
			var address = query[i];
			geocoder.geocode({
					'address': address[0]
				}, function(k) {
					return function(results, status) {
						if (status == google.maps.GeocoderStatus.OK) {
							var el = $('.maps-marker #'+idArr[k]) ;

							el.on('click', function () {
								map.setZoom(5);
								map.setCenter(results[0].geometry.location);
								new google.maps.event.trigger( marker, 'click' );
								return false;

							});

							var image = {
								url: "http://icons.iconarchive.com/icons/icons-land/vista-map-markers/32/Map-Marker-Marker-Outside-Chartreuse-icon.png",
								anchor: new google.maps.Point(25, 50),
								scaledSize: new google.maps.Size(50, 50)
							};

							var marker = new google.maps.Marker({
								position: results[0].geometry.location,
								map: map,
								title: query[k][1],
								icon: image,
								draggable: false,
								animation: google.maps.Animation.DROP,
								visible: true
							});
							marker.addListener('click', function() {
								info.setContent(query[k][2]);
								info.open(map, marker);
								map.panTo(marker.getPosition());
							});
						}
					}
				}(i)
			);
		}
	}
	google.maps.event.addDomListener(window, 'load', initialize);

})();
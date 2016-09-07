$(document).ready(function(){
	if(!Modernizr.svg){$('body').addClass('no-svg');}

	$('a[data-event=show]').on('click', function (event) {
		event.preventDefault();
		$('.open_visible').removeClass('open_visible');
		var id = $(this).data('id');
		$(id).addClass('open_visible');
		$('.open_visible_toggle').removeClass('open_visible_toggle');
	});
	$('a[data-event=hide]').on('click', function (event) {
		event.preventDefault();
		var id = $(this).data('id');
		$(id).removeClass('open_visible');
		$('.open_visible_toggle').removeClass('open_visible_toggle');
	});
	$('a[data-event=hideall],div[data-event=hideall],img[data-event=hideall]').on('click', function (event) {
		event.preventDefault();
		$('.open_visible').removeClass('open_visible');
		$('.open_visible_toggle').removeClass('open_visible_toggle');
	});
	$('a[data-event=toggle]').on('click', function (event) {
		event.preventDefault();
		$('.open_visible').removeClass('open_visible');
		var id = $(this).data('id');
		$(id).toggleClass('open_visible_toggle');
	});
	$('a[data-event=slidetoggle]').on('click', function (event) {
		event.preventDefault();
		var id = $(this).data('id');
		$(this).toggleClass('active');
		$(id).slideToggle(100);
	});
	$(window).resize(function () {
		//$('.open_visible').removeClass('open_visible');
	});

	$('select[data-event=change_placeholder]').change(function () {
		var id = $(this).data('id'),
			placeholder = $(this).children( "option:selected" ).data('placeholder');
		$(id).attr('placeholder',placeholder);
	});

	$("select").selectmenu({
		change: function( event, ui ) {
			var id = $(this).data('id'),
				placeholder = $(this).children( "option:selected" ).data('placeholder');
			$(id).attr('placeholder',placeholder);
		},
		// open: function( event, ui ) {
		// 	$('.open_visible').removeClass('open_visible');
		// 	$('.open_visible_toggle').removeClass('open_visible_toggle');
		// }
	});

	//autocomplite
	var availableTags = [
		"Москва",
		"Санкт-Петербург",
		"Люберетский район",
		"Шелковский район",
		"Пицца",
		"Роллы",
		"Рыба",
		"Равиоли",
		"Рагу",
		"Раки",
		"Рататуй",
		"Ригай",
		"Ризотто"
	];
	$(".search_string").autocomplete({
		source: availableTags,
		open: function( event, ui ) {
			$('.open_visible').removeClass('open_visible');
			$('.open_visible_toggle').removeClass('open_visible_toggle');
		}
	});


	//checkbox radio
	$("input[type=checkbox]").checkboxradio();

	//show/hide header
	var tempScrollTop = 0,currentScrollTop = $(window).scrollTop();
	var way = "default";
	$(window).scroll(function(){
		currentScrollTop = $(window).scrollTop();
		if (tempScrollTop < currentScrollTop){
			if(currentScrollTop>210){
				$('#wrapper').addClass('pt');
				$('header').addClass('small');
				$('#menu').addClass('hide');
			}
		}
		else if (tempScrollTop > currentScrollTop){
			if(currentScrollTop<210) {
				$('#wrapper').removeClass('pt');
				$('header').removeClass('small');
				$('#menu').removeClass('hide');
			}
		}
		tempScrollTop = currentScrollTop;
	});
	//menu
	$(".hamb").on( "click", function() {
		$('.open_visible').removeClass('open_visible');
		if($(this).data("menustatus") == 'menu_closed'){
			$('#menu').removeClass('hide');
			$(".hamb").data("menustatus","menu_open").addClass('openmenu');
		}
		else{
			$('#menu').addClass('hide');
			$(".hamb").data("menustatus","menu_closed").removeClass('openmenu');
		}
	});

	//slider
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		slidesPerView: 1,
		paginationClickable: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		spaceBetween: 30,
		loop: true
	});

	//columnizer
	$('.columns-2').columnize({ columns : 2 });


	//filter
	$('a[data-event=clearcheckbox]').on('click', function (event) {
		event.preventDefault();
		$(this).slideUp();
		var id = $(this).data('id');
		$(id).find('input[type=checkbox]').prop( "checked", false );
		$(id).find('.ui-checkboxradio-icon').removeClass('ui-state-checked');
	});
	$('.filters input[type=checkbox]').on('change', function (event) {
		var id = $(this).parent().parent().attr('id');
		$('.clear_'+id).slideDown();
	});



	//slider time
	$("#slider-time").slider({
		range: true,
		min: 0,
		max: 1440,
		step: 60,
		values: [540, 1440],
		slide: function (e, ui) {
			var hours1 = Math.floor(ui.values[0] / 60);
			var minutes1 = ui.values[0] - (hours1 * 60);
			if (hours1.length == 1) hours1 = '0' + hours1;
			if (minutes1.length == 1) minutes1 = '0' + minutes1;
			if (minutes1 == 0) minutes1 = '00';
			$('.slider-time').val(hours1 + ':' + minutes1);
			var hours2 = Math.floor(ui.values[1] / 60);
			var minutes2 = ui.values[1] - (hours2 * 60);
			if (hours2.length == 1) hours2 = '0' + hours2;
			if (minutes2.length == 1) minutes2 = '0' + minutes2;
			if (minutes2 == 0) minutes2 = '00';
			$('.slider-time2').val(hours2 + ':' + minutes2);
		}
	});
	//slider price
	$("#slider-price").slider({
		range: true,
		min: 0,
		max: 30000,
		step: 1000,
		values: [800, 30000],
		slide: function (e, ui) {
			$('.slider-price').val(ui.values[0]);
			$('.slider-price2').val(ui.values[1]);
		}
	});

	//datepicker
	$.datepicker.setDefaults(
		$.extend($.datepicker.regional["ru"])
	);
	$(".datepicker").datepicker({
		dateFormat: 'dd MM'
	});



	function in_center() {
		var element = $('.in_center_window'),
			window_el = $(window),
			offset_top = (window_el.outerHeight() - element.outerHeight())/2,
			offset_left = (window_el.width() - element.width())/2;

		if(offset_top < 50){offset_top = 50;}
		element.css({
			'margin-top':offset_top,
			'margin-left':offset_left
		})
	}
	in_center();
	$(window).resize(function () {
		in_center();
	});

});
$(document).ready(function(){
	if(!Modernizr.svg){$('body').addClass('no-svg');}

	$('a[data-event=show]').on('click', function (event) {
		event.preventDefault();
		if($(this).hasClass('my_city')){
			$('header.small').addClass('bcw');
		}
		$('.open_visible').removeClass('open_visible');
		var id = $(this).data('id');
		$(id).addClass('open_visible');
		$('.open_visible_toggle').removeClass('open_visible_toggle');
	});
	$('a[data-event=hide]').on('click', function (event) {
		event.preventDefault();
		if($(this).hasClass('close')){
			$('header.small').removeClass('bcw');
		}
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
		if($(this).hasClass('edit_product')){
			$('.open_visible_toggle').removeClass('open_visible_toggle');
		}
		$('.open_visible').removeClass('open_visible');
		var id = $(this).data('id');
		$(id).toggleClass('open_visible_toggle');
	});

	$('a[data-event=slidetoggle]').on('click', function (event) {
		if($(this).hasClass('this_edit')){
			return false;
		}
		event.preventDefault();
		var id = $(this).data('id');
		$(this).toggleClass('active');
		$(id).slideToggle(100);
	});
	$('a[data-event=slidedown]').on('click', function (event) {
		event.preventDefault();
		var id = $(this).data('id');
		$(this).addClass('active');
		$(id).slideDown(100);
	});
	$('a[data-event=slideup]').on('click', function (event) {
		event.preventDefault();
		var id = $(this).data('id');
		$(this).removeClass('active');
		$(id).slideUp(100);
	});
	$('a[data-event=changeview]').on('click', function (event) {
		event.preventDefault();
		var id = $(this).data('id'),
			hide = $(this).data('hide');
		$(hide).addClass('hide');
		$(id).removeClass('hide');
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
			$('header').find('.search_string').addClass('no_bg');
			var id = $(this).data('id'),
				placeholder = $(this).children( "option:selected" ).data('placeholder');
			$(id).attr('placeholder',placeholder);
		}
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
	$("input[type=checkbox],input[type=radio]").checkboxradio();

	//show/hide header
	var tempScrollTop = 0,currentScrollTop = $(window).scrollTop();
	var way = "default";
	$(window).scroll(function(){
		$('header.small').css({'padding-bottom':'30px'});
		var width_window = $(window).width();
		currentScrollTop = $(window).scrollTop();
		if (tempScrollTop < currentScrollTop){
			if(currentScrollTop>210 && width_window >1125){
				$('#wrapper').addClass('pt');
				$('header').addClass('small');
				$('#menu').addClass('hide');
				$(".hamb").data("menustatus","menu_closed").removeClass('openmenu');
			}
		}
		else if (tempScrollTop > currentScrollTop){
			$('#menu').addClass('hide');
			if(currentScrollTop<210) {
				$('#wrapper').removeClass('pt');
				$('header').removeClass('small');
				$('#menu').removeClass('hide');
				$(".hamb").data("menustatus","menu_closed").removeClass('openmenu');
			}
		}
		tempScrollTop = currentScrollTop;
	});
	$(window).resize(function () {
		var width_window = $(window).width();
		if(width_window < 1125) {
			$('#wrapper').removeClass('pt');
			$('header').removeClass('small');
			$('#menu').removeClass('hide');
		}
	});
	//menu
	$(".hamb").on( "click", function() {
		$('.open_visible').removeClass('open_visible');
		if($(this).data("menustatus") == 'menu_closed'){
			$('header.small').css({'padding-bottom':'0'});
			$('#menu').removeClass('hide');
			$(".hamb").data("menustatus","menu_open").addClass('openmenu');
		}
		else{
			$('header.small').css({'padding-bottom':'30px'});
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
		loop: true,
		autoplay:6000
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
		dateFormat: 'dd MM',
		beforeShow: function(input, inst) {
			$('#ui-datepicker-div').attr("data-id",this.id);
		}
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


	//list food
	$(document).on('mouseenter', '.img_holder.not_float', function() {
		$(this).parent().addClass('view_float_holder');
	});
	$(document).on('mouseleave', '.view_float_holder', function() {
		$('.list_food .item').removeClass('view_float_holder');
	});

	//rating
	$('.rating .points .item').on('click',function () {
		var el = $(this),
			parent =$(el).parent(),
			num = el.data('num');
		parent.find('.item').removeClass('selected');
		var i = 0;
		while (i < num) {
			parent.children('.item:eq('+i+')').addClass('selected');
			i++;
		}
		parent.parent().find('.interier_rating').val(num)
		if(num < 10){num = num + ',0';}
		parent.parent().find('.value').html(num)
	});


	//min height content
	function hc_height(){
		var height_header = $('header').outerHeight(),
			height_footer = $('footer').outerHeight(),
			height_window = $(window).outerHeight(),
			min_height = 100;
			min_height = height_window - height_header - height_footer - 42;
		if(min_height < 100){min_height = 100;}
		$('#holder_content').css({'min-height':min_height});
	}
	hc_height();
	$(window).resize(function () {
		hc_height();
	});


	$('a[data-event=toggleheight]').on('click', function (event) {
		event.preventDefault();
		$(this).toggleClass('spread')
		var id = $(this).data('id');
		$(id).toggleClass('autoheight');
	});


	//editable title
	$('.control .edit').on('click',function () {
		var el = $(this);
		el.parent().children('img').addClass('hide_for_edit');
		el.parent().children('.save_edit').css({'display':'inline-block'});
		$('#added_'+el.data('id')).addClass('hide_for_edit');
		$('#editable_'+el.data('id')).attr('contenteditable',true).addClass('this_edit');
	});

	$('.save_edit').on('click', function () {
		$('.this_edit').attr('contenteditable',false).removeClass('this_edit');
		$(this).css({'display':'none'});
		$('.hide_for_edit').removeClass('hide_for_edit');
	});




	//hide city list
	$(document).click(function(event) {
		if ($(event.target).closest(".list_city.open_visible,.my_city").length) return;
		$(".list_city").removeClass('open_visible');
		event.stopPropagation();
	});

	//tabs
	$(".tabs ul li.active").next().css( "border-left", "1px solid #87db60" );


	//cancel new album
	$('.holder_new_album .cancel').on('click', function(){
		$('.holder_new_album').slideUp(100);
		$('.new_album .plus').removeClass('active');
	});

	//hide
	$(document).click(function(event) {
		if ($(event.target).closest(".profile_tab.open_visible_toggle,.btn_profile_tab").length) return;
		$(".profile_tab").removeClass('open_visible_toggle');
		event.stopPropagation();
	});

	$(".phone").mask("+9 (999) 999-99-99");
});
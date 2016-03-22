$(document).ready(function() {
	/*
		INITIALIZES SCROLL REVEAL JS
	*/
	window.sr = ScrollReveal();
	sr.reveal('.reveal-left', { 
		origin: 'left', 
		duration: 2000, 
		delay: 300,
		distance: '300px',
		reset: false
	} );
	sr.reveal('.reveal-right', { 
		origin: 'right', 
		duration: 2000, 
		delay: 300,
		distance: '300px',
		reset: false
	} );
	sr.reveal('.reveal', {
		origin: 'top',
		duration: 2000, 
		delay: 300,
		distance: '300px',
		reset: false
	} );
	var timerId = setInterval(function() {
		init_banner();
	}, 6000);
	var clickDisabled = false;
	$('.carousel-control').click(function(e){
		e.preventDefault();
		if (clickDisabled)
			return;
		clearInterval(timerId);
		init_banner();
		clickDisabled = true;
		setTimeout(function(){
			timerId = setInterval(function() {
				init_banner();
			}, 6000);
			clickDisabled = false;
		}, 3000);
	});
});

/* SET SECOND BANNER SIZE */
$(window).resize(function(){
	$('.banner-bg img').css('height', $('.banner-img img').height());
});

/* CUSTOM CAROUSEL FUNCTION */
function init_banner() {
	if(!$('#main-reveal').hasClass('fadeOut')) {
		$('#main-reveal').addClass('fadeOut');
		$('#main-reveal img').fadeOut(2000);
		$('.banner-img img').fadeTo(2000, 0, function(){
			$(this).css('visibility', 'hidden');
		});
		$('.banner-bg').fadeIn(3500);
		$('.banner-caption').fadeIn(3500);
		$('.banner-bg img').css('height', $('.banner-img img').height());
	} else {
		$('#main-reveal').removeClass('fadeOut');
		$('#main-reveal img').fadeIn(3500);
		$('.banner-img img').css('visibility', 'visible');
		$('.banner-img img').fadeTo(3500, 1, function(){
		});
		$('.banner-bg').fadeOut(2000);
		$('.banner-caption').fadeOut(2000);
	}
}

/*
	SCROLLS TO DIV WITH ID "NOSOTROS"
*/
$('.scroll-nosotros').click(function () {
	if($('#nosotros').length != 0 ) {
		$scroll_to = $('#nosotros');
	} else if($('#about').length != 0 ) {
		$scroll_to = $('#about');
	} else if($('#news').length != 0 ) {
		$scroll_to = $('#news');
	}
	$('html, body').stop().animate({
		'scrollTop': $scroll_to.offset().top
	}, 800, 'swing' );
});

/*
	INITIALIZES HEADER EFFECTS
*/
var $head = $( '#ha-header' );
$( '.ha-waypoint' ).each( function(i) {
	var $el = $( this ),
		animClassDown = $el.data( 'animateDown' ),
		animClassUp = $el.data( 'animateUp' );

	$el.waypoint( function( direction ) {
		if( direction === 'down' && animClassDown ) {
			$head.attr('class', 'ha-header ' + animClassDown);
		}
		else if( direction === 'up' && animClassUp ){
			$head.attr('class', 'ha-header ' + animClassUp);
		}
	}, { offset: '0' } );
} );

$(window).scroll(function() {
	if( $('.ha-header').hasClass('ha-header-hide') ) {
		$('.navbar-collapse').removeClass('in').attr('aria-expanded','false');
		$('.navbar-toggle').addClass('collapsed').attr('aria-expanded','false');
	}
});

/* 
	PAGE LOAD WITH HASH OFFSET 
*/
(function($, window) {
	var adjustAnchor= function() {
		var $anchor = $(':target'),
			fixedElementHeight = 96;
		if ($anchor.length > 0) {
			$('html, body')
				.stop()
				.animate({
				scrollTop: $anchor.offset().top - fixedElementHeight
			}, 800);
		}
	};
	$(window).on('hashchange load', function() {
		adjustAnchor();
	});
})(jQuery, window);
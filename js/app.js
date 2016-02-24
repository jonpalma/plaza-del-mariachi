$(document).ready(function() {
	/*$('#fullpage').fullpage({
		afterLoad: function(anchorLink, index){
			var loadedSection = $(this);

			//using index
			if(index == 1){
				//alert("Section 3 ended loading");
				//$('.navbar').removeClass('navbar-fixed-top');
			}

			//using anchorLink
			if(index == 2){
				//alert("Section 2 ended loading");
				//$('.navbar').addClass('navbar-fixed-top');
			}
		},
		autoScrolling: false,
		scrollOverflow: true,
		scrollBar: true
	});*/

	/*
	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();

		var topDistance = $('.wrapper').offset().top;

		if ( (topDistance) < scrollTop ) {
		} else { 
		}
	});*/

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

	console.log(parseInt($('.navbar').css('height').substring(0 , $('.navbar').css('height').indexOf('p'))));
});

/*
	SCROLLS TO DIV WITH ID "NOSOTROS"
*/
$('.scroll-nosotros').click(function () {
	if($('#nosotros').length != 0 ) {
		$scroll_to = $('#nosotros');
	} else {

	} if($('#about').length != 0 ) {
		$scroll_to = $('#about');
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

/* PAGE LOAD WITH HASH OFFSET */
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
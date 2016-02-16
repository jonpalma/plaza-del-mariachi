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
	sr.reveal('.reveal', { 
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
	
	console.log(parseInt($('.navbar').css('height').substring(0 , $('.navbar').css('height').indexOf('p'))));
});

/*
	SCROLLS TO DIV WITH ID "NOSOTROS"
*/
$('.scroll-nosotros').click(function () {
	$('html, body').stop().animate({
		'scrollTop': $('#nosotros').offset().top
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
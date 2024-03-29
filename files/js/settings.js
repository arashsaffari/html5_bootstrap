var myApp = window.myApp || {};

jQuery(function($){

	myApp.hash_click = function(){
		// Select all links with hashes
		$('a[href*="#"]')
			// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.not('[data-noscroll]')
			.click(function(event){
				
				// On-page links
				if (
					location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
					&& 
					location.hostname == this.hostname
				) {
					// Figure out element to scroll to
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					
					// Does a scroll target exist?
					if (target.length) {

						// Only prevent default if animation is actually gonna happen
						event.preventDefault();
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 600, function() {
							// Callback after animation
							// Must change focus!
							var $target = $(target);
							$target.focus();
							if ($target.is(":focus")) { // Checking if the target was focused
							return false;
							} else {
							$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
							};
						});
					}
				}
			});
	}

	myApp.goToTop_display = function(){
		goToTopBtn = $('#go-to-top');
		top_offset = 100;

		scrollToTop_display = goToTopBtn.css( "display" );

		if ($(window).scrollTop() > top_offset) {
			if (scrollToTop_display == "none"){
				goToTopBtn.fadeIn();
			}
		} else {
			if (scrollToTop_display == "block"){
				goToTopBtn.fadeOut();
			}
		}
	}

	myApp.goToTop_winResize = function(){
		var goToTopBtnResizeTimer;
		$(window).on('resize', function(e) {
			clearTimeout(goToTopBtnResizeTimer);
			goToTopBtnResizeTimer = setTimeout(function() {
				myApp.goToTop_display();
			}, 250);
		});
	}

	myApp.josh = function(){
		const josh = new Josh({
			initClass: "animateme",			// DOM CSS class to Animate, default is "josh-js"
			animClass: "animate__animated",	// Animation CSS class from Animate.css library
			offset: 0.2,					// Element distance of viewport to triggering the animation. default is 0.2 means 20% of element view animation will trigger
			animateInMobile: true,			// Animation will trigger on Mobile or not. Default is true
			onDOMChange: false,				// Animation will trigger on newly added element or not. Default is false
		});
	}

	myApp.fancybox = function(){
		Fancybox.bind('[data-fancybox]', {
			Image: {
				zoom: false,
			},
		});
	}

	myApp.test = function(){
		$(document).ready(function() {
			console.log("Hi from setting");
		});
	}

	//
	//init
	//
	myApp.hash_click();
	myApp.josh();
	$(window).scroll(function(){
		myApp.goToTop_display();
	});
	myApp.goToTop_winResize();
	myApp.fancybox();
	myApp.test();
});
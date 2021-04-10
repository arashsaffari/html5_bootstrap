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

	myApp.fancybox = function(){
		$('[data-fancybox]').fancybox({
			youtube: {
				controls : 0,
				showinfo : 0,
				autoplay: true
			}
		});
	}

	myApp.wow = function(){
		wow = new WOW({
			boxClass:     'wow',      // default
			animateClass: 'animate__animated', // default
			offset:       0,          // default
			mobile:       false,       // default
			live:         true        // default
		});
		wow.init();
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
	
	$(window).scroll(function(){
		myApp.goToTop_display();
	});
	myApp.goToTop_winResize();
	myApp.fancybox();
	myApp.wow();
	myApp.test();
});
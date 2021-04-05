var myApp = window.myApp || {};

jQuery(function($){

	myApp.menu_init = function(){
		//navbar configuration below
		// $("#mainMenu").headroom({
		// 	"offset": 10,
		// 	"tolerance": 5,
		// 	"classes": {
		// 		"pinned": "fadeInDown",
		// 		"unpinned": "fadeOutUp"
		// 	}
		// });


		$( '.dropdown-menu a.dropdown-toggle' ).hover(function ( e ) {
			var $el = $( this );
			var $parent = $( this ).offsetParent( ".dropdown-menu" );
			if ( !$( this ).next().hasClass( 'show' ) ) {
				$( this ).parents( '.dropdown-menu' ).first().find( '.show' ).removeClass( "show" );
			}
			var $subMenu = $( this ).next( ".dropdown-menu" );
			
			$subMenu.addClass( 'show' );
			$( this ).parent( "li" ).addClass( 'show' );
	
			$( this ).parents( 'li.nav-item.dropdown.show' ).on( 'hidden.bs.dropdown', function ( e ) {
				$( '.dropdown-menu .show' ).removeClass( "show" );
			} );
			
			 if ( !$parent.parent().hasClass( 'navbar-nav' ) ) {
				//$el.next().css( { "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 } );
			}
	
			return false;
		},function( e ) {
			var $el = $( this );
			var $parent = $( this ).offsetParent( ".dropdown-menu" );
			var $subMenu = $( this ).next( ".dropdown-menu" );

			$subMenu.removeClass( 'show' );
			$( this ).parent( "li" ).removeClass( 'show' );
		} );
	}

	myApp.menu = function(){
		$(document).ready(function() {
			if ($(window).width() > 767) {
				$("#mainMenu").addClass("fixed-top");
			}else{
				$("#mainMenu").removeClass("fixed-top");
			}

			var menuResizeTimer;
			$(window).on('resize', function(e) {
				clearTimeout(menuResizeTimer);
				menuResizeTimer = setTimeout(function() {
					myApp.menu();
				}, 250);
			});

	    });
	}

	myApp.menu_hover = function(){
		$( document ).ready( function () {
			$('#mainMenu .navbar-nav .dropdown-toggle').on('click', function (event) {
				if ($(window).width() > 767) {
					return false;
				}
			});

			var menuHoverResizeTimer;
			$(window).on('resize', function(e) {
				clearTimeout(menuHoverResizeTimer);
				menuHoverResizeTimer = setTimeout(function() {
					if ($(window).width() > 767) {
						$('#mainMenu .navbar-nav > li').removeClass('show');
						$('#mainMenu .navbar-nav > li > .dropdown-menu').removeClass('show');
					}
				}, 250);
			});
		} );
	}

	myApp.hash_click = function(){
		$(document).ready(function() {

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

	    });
	}

	myApp.goToTop_display = function(){
		$(document).ready(function() {

			goToTopBtn = $('#go-to-top');
			window_width = 767;
			top_offset = 100;

			scrollToTop_display = goToTopBtn.css( "display" );

			if ($(window).width() < window_width) {
				if ($(this).scrollTop() > top_offset) {
					if (scrollToTop_display == "none"){
						goToTopBtn.fadeIn();
					}
				} else {
					if (scrollToTop_display == "block"){
						goToTopBtn.fadeOut();
					}
				}
			}else{
				if (scrollToTop_display == "block"){
					goToTopBtn.fadeOut();
				}
			}
		});

	}

	myApp.goToTop_winResize = function(){
		$(document).ready(function() {

			var goToTopBtnResizeTimer;
			$(window).on('resize', function(e) {
				clearTimeout(goToTopBtnResizeTimer);
				goToTopBtnResizeTimer = setTimeout(function() {
					myApp.goToTop_display();
				}, 250);
			});

	    });
	}

	myApp.fancybox = function(){
		$(document).ready(function() {
			$('[data-fancybox]').fancybox({
				youtube: {
					controls : 0,
					showinfo : 0,
					autoplay: true
				}
			});
		});
	}

	myApp.wow = function(){
		$(document).ready(function() {
			wow = new WOW({
				boxClass:     'wow',      // default
				animateClass: 'animated', // default
				offset:       0,          // default
				mobile:       true,       // default
				live:         true        // default
			});
			wow.init();
		});
	}

	//
	//init
	//
	myApp.menu_init();
	myApp.menu();
	// myApp.menu_hover();

	myApp.hash_click();
	
	$(window).scroll(function(){
		myApp.goToTop_display();
	});
	myApp.goToTop_winResize();

	myApp.wow();
});
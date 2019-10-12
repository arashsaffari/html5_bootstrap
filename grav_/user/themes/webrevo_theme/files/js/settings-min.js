var myApp=window.myApp||{};jQuery(function(e){myApp.menu_init=function(){
//navbar configuration below
// $("#mainMenu").headroom({
// 	"offset": 10,
// 	"tolerance": 5,
// 	"classes": {
// 		"pinned": "fadeInDown",
// 		"unpinned": "fadeOutUp"
// 	}
// });
e(".dropdown-menu a.dropdown-toggle").on("click",function(o){var n=e(this),t=e(this).offsetParent(".dropdown-menu"),i;return e(this).next().hasClass("show")||e(this).parents(".dropdown-menu").first().find(".show").removeClass("show"),e(this).next(".dropdown-menu").toggleClass("show"),e(this).parent("li").toggleClass("show"),e(this).parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown",function(o){e(".dropdown-menu .show").removeClass("show")}),t.parent().hasClass("navbar-nav")||n.next().css({top:n[0].offsetTop,left:t.outerWidth()-4}),!1})},myApp.menu=function(){e(document).ready(function(){var n;767<e(window).width()?e("#mainMenu").addClass("fixed-top"):e("#mainMenu").removeClass("fixed-top"),e(window).on("resize",function(o){clearTimeout(n),n=setTimeout(function(){myApp.menu()},250)})})},myApp.menu_hover=function(){e(document).ready(function(){var n;e("#mainMenu .navbar-nav .dropdown-toggle").on("click",function(o){if(767<e(window).width())return!1}),e(window).on("resize",function(o){clearTimeout(n),n=setTimeout(function(){767<e(window).width()&&(e("#mainMenu .navbar-nav > li").removeClass("show"),e("#mainMenu .navbar-nav > li > .dropdown-menu").removeClass("show"))},250)})})},myApp.goToTop_click=function(){e(document).ready(function(){
// Smooth scroll to top
e("#go-to-top").click(function(){var o=e("body").position().top,n=0;return window.scroll({top:o-0,left:0,behavior:"smooth"}),!1})})},myApp.goToTop_display=function(){e(document).ready(function(){goToTopBtn=e("#go-to-top"),window_width=767,top_offset=100,scrollToTop_display=goToTopBtn.css("display"),e(window).width()<window_width&&e(this).scrollTop()>top_offset?"none"==scrollToTop_display&&goToTopBtn.fadeIn():"block"==scrollToTop_display&&goToTopBtn.fadeOut()})},myApp.goToTop_winResize=function(){e(document).ready(function(){var n;e(window).on("resize",function(o){clearTimeout(n),n=setTimeout(function(){myApp.goToTop_display()},250)})})},myApp.fancybox=function(){e(document).ready(function(){e("[data-fancybox]").fancybox({youtube:{controls:0,showinfo:0,autoplay:!0}})})},myApp.wow=function(){e(document).ready(function(){wow=new WOW({boxClass:"wow",// default
animateClass:"animated",// default
offset:0,// default
mobile:!0,// default
live:!0}),wow.init()})}
//
//init
//
,myApp.menu_init(),myApp.menu(),
// myApp.menu_hover();
myApp.goToTop_click(),e(window).scroll(function(){myApp.goToTop_display()}),myApp.goToTop_winResize(),myApp.wow()});
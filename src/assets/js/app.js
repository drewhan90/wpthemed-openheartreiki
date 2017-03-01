function initMap() {
    // Home Coordinates
    var home = {lat: 49.282824, lng: -123.115143}; 
    var map = new google.maps.Map(document.getElementById('map'), {
    	zoom: 15,
    	center: home,
    	disableDefaultUI: true
    });
	// Map Marker
	var marker = new google.maps.Marker({
		position: home,
		map: map,
		title: 'My Reiki Office',
		animation: google.maps.Animation.BOUNCE
	});
};

jQuery(document).ready(()=>{
	// Foundation JS
	jQuery(document).foundation();
	// Scroll Top animate speed
	jQuery('.btn-top').click(()=>{
		jQuery('html, body').animate({
			scrollTop: jQuery('header').offset().top
		}, 1000);
	});
	// FadeIn/Out on scroll bottom
	jQuery(this).scroll(()=>{
		if(jQuery(this).scrollTop() > 800) {
			jQuery('.btn-top').fadeIn();
		}
		else {
			jQuery('.btn-top').fadeOut();
		}
	});
	// Display Curved Overlay only on Index Page
	if(jQuery('#index').length != 0){
		jQuery('.curve-overlay').removeClass('hidden');
	};
	if(jQuery('#blog').length != 0){
		jQuery('#menu .blog').addClass('active');
	};
	// Hide Footer Map on Contact Page
	if(jQuery('#contact').length != 0){
		console.log('works');
		jQuery('footer #map').addClass('hidden');
	}
	// Smooth Scrolling
	jQuery(function() {
		jQuery('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					jQuery('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	// Slide in when scroll
	// Visible Plugin
	(function(jQuery) {
		jQuery.fn.visible = function(partial) {
			var jQueryt            = jQuery(this),
			jQueryw            = jQuery(window),
			viewTop       = jQueryw.scrollTop(),
			viewBottom    = viewTop + jQueryw.height(),
			_top          = jQueryt.offset().top,
			_bottom       = _top + jQueryt.height(),
			compareTop    = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;

			return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
		};
	})(jQuery);
	// On scroll visible check
	jQuery(window).scroll(function(event) {

		jQuery(".module").each(function(i, el) {
			var el = jQuery(el);
			if (el.visible(true)) {
	    // add css class for animation
	    el.addClass("come-in"); 
		} 
	});

	});

	var win = jQuery(window),
	allMods = jQuery(".module");
	// Already visible modules
	allMods.each(function(i, el) {
		var el = jQuery(el);
		if (el.visible(true)) {
			el.addClass("already-visible"); 
		} 
	});
	win.scroll(function(event) {	  
		allMods.each(function(i, el) {
			var el = jQuery(el);
			if (el.visible(true)) {
				el.addClass("come-in"); 
			} 
		});

	});	

	// DROPDOWN MENU
});
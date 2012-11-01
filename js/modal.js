jQuery(document).ready(function () {
	
	//jQuery.noConflict();
	
	// Position modal box in the center of the page
	jQuery.fn.center = function () {
		this.css("position","absolute");
		this.css("top", ( jQuery(window).height() - this.height() ) / 2+jQuery(window).scrollTop() + "px");
		this.css("left", ( jQuery(window).width() - this.width() ) / 2+jQuery(window).scrollLeft() + "px");
		return this;
	  }
	
	jQuery(".modal-profile").center();
	
	// Set height of light out div	
	jQuery('.modal-lightsout').css("height", jQuery(document).height());	

	// Fade in modal box once link is clicked
	jQuery('a[rel="modal-profile"]').click(function() {
		jQuery('.modal-profile').fadeIn("slow");
		jQuery('.modal-lightsout').fadeTo("slow", .5);
	});
	
	// closes modal box once close link is clicked, or if the lights out divis clicked
	jQuery('a.modal-close-profile, .modal-lightsout').click(function() {
		jQuery('.modal-profile').fadeOut("slow");
		jQuery('.modal-lightsout').fadeOut("slow");
	});
});


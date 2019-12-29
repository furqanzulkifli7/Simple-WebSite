// JavaScript Document

// SMOOTH SCROLL
$(document).ready(function(){ // Add smooth scrolling to all links
	$("a").on('click', function(event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			event.preventDefault(); // Prevent default anchor click behavior
			var hash = this.hash; // Store hash
			// Using jQuery's animate() method to add smooth page scroll
			// The 800 specifies the number of ms it takes to scroll to the area
			$('html, body').animate({
			scrollTop: $(hash).offset().top
			}, 800, function(){

				window.location.hash = hash; // Add hash (#) to URL
			});
		} // End if
	});
	
});



			
		
		
		
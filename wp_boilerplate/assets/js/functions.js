(function($) {

// Slider
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	  });
	});


	$.gridalicious({
	  gutter: 1, 
	  width: 75, 
	  animate: true, 
	  animationOptions: { 
	    speed: 200, 
	    duration: 300, 
	    complete: 
	    onComplete
	    },
	});

	$('#prepend').click(function(){
	  $("#example3").gridalicious('prepend', makeboxes());
	});
	  
	$('#append').click(function(){
	  $("#example3").gridalicious('append', makeboxes());
	});

})(window.jQuery);
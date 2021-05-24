jQuery(document).ready(function($){

    "use strict";
    
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	    items:1,
	    loop:true,
	    margin:50,
	    autoplay:true,
	    autoplayTimeout:4000,
	    autoplayHoverPause:true
	});
	$('.play').on('click',function(){
	    owl.trigger('play.owl.autoplay',[4000])
	})
	$('.stop').on('click',function(){
	    owl.trigger('stop.owl.autoplay')
	})
});

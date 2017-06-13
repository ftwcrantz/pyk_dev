$(document).ready(function() {
 	$('.philosophy-close').click(function(){
 		$(this).closest('.sub-sites').removeClass('active');
 		$('#philosophy-close-toggle').removeClass('toggler-active');
 		window.scrollTo(0, $("#one").offset().top);
 	});
 	$('.about-close').click(function(){
 		$(this).closest('.sub-sites').removeClass('active');
 		$('#about-close-toggle').removeClass('toggler-active');
 		window.scrollTo(0, $("#two").offset().top);
 	});
 	$('.projects-close').click(function(){
 		$(this).closest('.sub-sites').removeClass('active');
 		$('#projects-close-toggle').removeClass('toggler-active');
 		window.scrollTo(0, $("#three").offset().top);
 	});
});

$(document).ready(function() {
  $('#logo-home').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
 	});
 	$('#header-menu-open').click(function(){
 		$('.menu-open').toggleClass('hidden');
 		$('.menu-close').toggleClass('hidden');
 		$('#mobile-menu').toggleClass('hidden');
 	});
 	$("#mobile-menu > ul > li > a").click(function(e) {
 		$('#mobile-menu').toggleClass('hidden');
 		$('.menu-open').toggleClass('hidden');
 		$('.menu-close').toggleClass('hidden');
 	});
 	$(".contact-link").click(function(e) {
 		$('.contact-title').toggleClass('hidden');
 		$('.contact-footer').toggleClass('hidden');
 		$('.contact-meta').toggleClass('hidden');
 	});
 	$("#contact-container-link").click(function(e) {
 		$('.contact-title').toggleClass('hidden');
 		$('.contact-footer').toggleClass('hidden');
 		$('.contact-meta').toggleClass('hidden');
 	});
});

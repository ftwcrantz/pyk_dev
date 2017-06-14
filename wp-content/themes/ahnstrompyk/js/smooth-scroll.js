$(document).ready(function(){
	$("#mobile-menu > ul > li > a").click(function(e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);

		var isMobile = window.matchMedia("only screen and (max-width: 760px)");

		if (this.hash === "#contact-container") {
			$("html, body").animate({ scrollTop: $(document).height() }, 1000);
		} else {
			if (isMobile.matches) {
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top-250
				}, 300, 'swing', function () {
					window.location.hash = target;
				});
			} else {
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top-600
				}, 300, 'swing', function () {
					window.location.hash = target;
				});
			}
		}

	});
});
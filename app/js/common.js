$(function() {
	// menu hamburger
	$('.btn-hamburger').on('click', function() {
		$('.navbar').toggleClass('navbar-collapse');
		$('.btn-hamburger').toggleClass('btn-close', 1000, "easeOutSine");
	});

});

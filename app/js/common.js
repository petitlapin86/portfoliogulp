$(function() {
	// menu hamburger
	$('.btn-hamburger').on('click', function() {
		$('.navbar').toggleClass('navbar-collapse');
		$('.btn-hamburger').toggleClass('btn-close', 1000, "easeOutSine");
	});

	// Treehouse Badges Widget
	const badges = $('.report-card.treehouse');

	if (badges.length) {
		badges.reportCard({
					userName: 'paigejones2',
					site: 'treehouse',
					badgesAmount: 7
		});
	}
});


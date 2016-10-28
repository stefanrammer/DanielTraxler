// JavaScript Document
$(document).ready(function(e) {
    $('.split-inside a').hover(function(e) {
		$(this).children('.split-bottom-wrapper').show();
		$(this).children('.split-bottom').animate({
			bottom: 0
		}, 500);
	}, function(e) {
		$(this).children('.split-bottom-wrapper').hide();
		$(this).children('.split-bottom').animate({
			bottom: -60
		}, 500);
	});
	$('.hamburger').click(function(e) {
    	$(this).toggleClass('is-active');
		$('.mobile-navigation').slideToggle();
    });
});

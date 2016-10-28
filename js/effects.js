// JavaScript Document
$(window).load(function() {
	$('.logo-wrapper').animate({
		bottom: 0
	}, 1000);
	$('.logos-wrapper').animate({
		right: 0
	}, 1000);
});
$(window).scroll(function(e) {
    if ($(window).scrollTop() > $('.header').height()) {
		$('.navigation').addClass('fixedNavigation');
	} else {
		$('.navigation').removeClass('fixedNavigation');	
	}
});
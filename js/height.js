// JavaScript Document
jQuery(document).ready(function(e) {
    var saved_width = jQuery('.single-erfolg-wrapper').width();
	jQuery('.single-erfolg-wrapper').height(saved_width);
});
jQuery(window).resize(function(e) {
    var saved_width = jQuery('.single-erfolg-wrapper').width();
	jQuery('.single-erfolg-wrapper').height(saved_width);
});
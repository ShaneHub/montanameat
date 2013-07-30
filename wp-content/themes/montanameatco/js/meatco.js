// JavaScript Document
// Custom scripts for Montana Meat Co.
// By Shane Germann


function slideSwitch() {
	var $active = $('#mmco-slider img.active');
	if($active.length == 0) $active = $('#mmco-slider img.last');
	var $next = $active.next().length ? $active.next() : $('#mmco-slider img:first')
	$active.addClass('last-active');
	$next.css({opacity: 0.0})
		.addClass('active')
		.animate({opacity: 1}, 1000, function(){
			$active.removeClass('active last-active')
		});
}

$(function() {
	setInterval("slideSwitch()", 5000);
}); 

$(function() {
	$('#site-navigation li').mouseenter(function() {
		var $submenu = $(this).children('.sub-menu');
		$submenu.css("display", "block");
		var newHeight = $submenu.height() + 51;
		$(this).animate({height: newHeight}, 500, function(){
			$submenu.animate({opacity: 1}, 500);
		});
	});
});
	
$(function() {
	$('#site-navigation li').mouseleave(function() {
		var $submenu = $(this).children('.sub-menu');
		$submenu.css({'opacity': '0.0', 'display': 'none'});
		$(this).animate({height: 51}, 500);
	});
});

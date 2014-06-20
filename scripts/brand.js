$( document ).ready(function() {

	$('button.detail').click( function() { $(this).parents('section').toggleClass('detailed'); });
	
	$('body[class*="-90"] dl dt').click( function () { $(this).next('dd').toggle().parents('dl').toggleClass('disclosed'); })
	
	$('.size-gt-medium .main-header, .size-gt-medium .brand-header').hcSticky({
	    top: 0,
	    wrapperClassName: 'affixed'
	});

});

$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();		
	var topmost = false;
	$("main section").each( function() {
		var offset = $(this).offset();
		if (scrollTop <= offset.top && ($(this).height() + offset.top) < (scrollTop + windowHeight) && topmost == false) {
			$(this).addClass("topmost");
			topmost=true;
		} else {
			$(this).removeClass("topmost");
			topmost=false;
		}
	});
});

/*
$( document ).on("ready", "resize" (function() {
$('.size-gt-medium .main-header, .size-gt-medium .brand-header').hcSticky({
	    top: 0,
	    wrapperClassName: 'affixed'
	});
});
*/
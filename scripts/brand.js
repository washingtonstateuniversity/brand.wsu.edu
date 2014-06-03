$( document ).ready(function() {

	$('button.detail').click( function() { $(this).parents('section').toggleClass('detailed'); });
	
	$('body[class*="-90"] dl dt').click( function () { $(this).next('dd').toggle().parents('dl').toggleClass('disclosed'); })
	
	$('.size-gt-medium .main-header, .size-gt-medium .brand-header').hcSticky({
	    top: 0,
	    wrapperClassName: 'affixed'
	});

});
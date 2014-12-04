$(document).ready(function() {

	$('button.detail').click( function() { $(this).parents('section').toggleClass('detailed'); });
	
	$('body[class*="-90"] dl dt').click( function () { $(this).next('dd').toggle().parents('dl').toggleClass('disclosed'); })
	
	$('.size-gt-medium .main-header, .size-gt-medium .brand-header').hcSticky({
	    top: 0,
	    wrapperClassName: 'affixed'
	});
	
	

});

$(window).load(function() {
	
	var hash = window.location.hash;
	var pos = $(window).scrollTop();
	if ( hash == "#detailed" ) {
		$('button.detail').parents('section').addClass('detailed');
		} 
	if(hash != "") {
		$(hash).addClass("detailed");
		$(window).scrollTop(pos-65);
	}
	
	});

(function ( $, window, document, undefined ) {
    // Create the defaults once
    var pluginName = 'scrolly',
        defaults = {
            bgParallax: false
        },
        didScroll = false;

    function Plugin( element, options ) {
        this.element = element;
        this.$element = $(this.element);

        this.options = $.extend( {}, defaults, options) ;
        
        this._defaults = defaults;
        this._name = pluginName;
        
        this.init();
    }

    Plugin.prototype.init = function () {
        var self = this;
        this.startPosition = this.$element.position().top;
        this.offsetTop = this.$element.offset().top;
        this.height = this.$element.outerHeight(true);
        this.velocity = this.$element.attr('data-velocity');
        this.bgStart = parseInt(this.$element.attr('data-fit'), 10);

        $(document).scroll(function(){
            self.didScroll = true;
        });
        
        setInterval(function() {
            if (self.didScroll) {
                self.didScroll = false;
                self.scrolly();
            }
        }, 10);
    };

    Plugin.prototype.scrolly = function() {
        var dT =  $(window).scrollTop(),
            wH = $(window).height(),
            position = this.startPosition;

        if(this.offsetTop >= (dT+wH)) {
            this.$element.addClass('scrolly-invisible');
        } else {
            if(this.$element.hasClass('scrolly-invisible')){
                position = this.startPosition + (dT + ( wH - this.offsetTop ) ) * this.velocity;
            } else {
                position = this.startPosition + dT  * this.velocity;
            }
        }
        // Fix background position
        if(this.bgStart){ position = position + this.bgStart; }

        if(this.options.bgParallax === true) {
            this.$element.css({backgroundPosition: '50% '+position+'px'});
        } else {
            this.$element.css({top: position});
        }
    };

    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName, new Plugin( this, options ));
            }
        });
    };

})(jQuery, window, document);


/*$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();		
	var topmost = false;
	$("main section figure").each( function() {
		var offset = $(this).offset();
		if ( $("body").hasClass("logged-in") ) {
			scrollTop = scrollTop - 32;
			}
		var difference = offset.top - scrollTop;
		$(this).prepend("&nbsp;o"+offset.top).prepend("&nbsp;s"+scrollTop).prepend("&nbsp;d"+difference);
		if (scrollTop <= offset.top && ($(this).height() + offset.top) < (scrollTop + windowHeight) && topmost == false) {
			$(this).addClass("topmost");
			topmost=true;
		} else {
			$(this).removeClass("topmost");
			topmost=false;
		}
		if ( difference < windowHeight ) {
			$(this).css('background-position-y',-difference/2);
			
		}
	});
});
*/

/*
$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();		
	var topmost = false;
	$("main section figure").each( function() {
		var offset = $(this).offset();
		var difference = offset.top - scrollTop - 32;
		if (scrollTop <= offset.top && ($(this).height() + offset.top) < (scrollTop + windowHeight) && topmost == false) {
			if ( difference < 0 ) {
			$(this).css('background-position-y',difference);
			}
			$(this).prepend("&nbsp;o"+offset.top).prepend("&nbsp;s"+scrollTop).prepend("&nbsp;d"+difference);
			
			$(this).addClass("topmost");
			topmost=true;
		} else {
			$(this).removeClass("topmost");
			topmost=false;
		}
	});
});


$( document ).on("ready", "resize" (function() {
$('.size-gt-medium .main-header, .size-gt-medium .brand-header').hcSticky({
	    top: 0,
	    wrapperClassName: 'affixed'
	});
});
*/
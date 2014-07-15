(function() {

	var $frameNav 		= $('#main_stream_nav li a'),
		$frame 			= $('#main_frame_holder iframe'),
		$frameTV5 		= $('#iframe_tv5'),
		$frameAksyonTV 	= $('#iframe_aksyontv'),
		$frameGilas 	= $('#iframe_gilas');

	function setFrameWidthAndMarginTop() {
		var _this = $(this);
			width = _this.width() * .5;
			marginTop = _this.height() * .22;
		$('#main_stream').width(width).css('margin-top', marginTop + 'px');
	}

	setFrameWidthAndMarginTop();

	$.backstretch('./public/image/smart-gilas-2014-livestream-bg-study-1.jpg');

	$(window).resize(setFrameWidthAndMarginTop);

	$frameNav.on('click', function() {
		var _this = $(this),
			target = _this.data('target'),
			defaultClass = _this.data('default-class');

		// Reset file to default class
		$.each($frameNav, function(i, el) {
			var defaultClass = $(el).data('default-class');
			$(el).removeClass();
			$(el).addClass(defaultClass);
		});

		_this.removeClass();
		_this.addClass(defaultClass + '_active')

		// Reset frame class
		$frame.removeClass('active');

		// Show the right frame
		if(target === 'tv5') {
			$frameTV5.addClass('active');
		} else if(target === 'aksyontv') {
			$frameAksyonTV.addClass('active');
		} else if(target === 'gilas') {
			$frameGilas.addClass('active');
		}
	});

}());
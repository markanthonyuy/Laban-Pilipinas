(function() {

	var $frameNav 		= $('#main_stream_nav li a'),
		$frame 			= $('#main_frame_holder'),
		$gilasTab 		= $('.tab-gilas-games');

	function setFrameWidthAndMarginTop() {
		var _this = $(this);
			width = _this.width() * .5;
			marginTop = _this.height() * .22;
		$('#main_stream').width(width).css('margin-top', marginTop + 'px');
	}

	setFrameWidthAndMarginTop();
	$('#main header').backstretch('./public/image/smart-gilas-2014-livestream-bg-study-1.jpg');
	$('#gilas_games').backstretch('./public/image/dome.jpg');
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
		$frame.html('');

		// Show the right frame
		if(target === 'tv5') {
			$frame.html('<iframe src="http://news5.com.ph/embed.aspx?g=0A999CBBC5"></iframe>');
		} else if(target === 'aksyontv') {
			$frame.html('<iframe src="http://news5.com.ph/embed.aspx?g=A12F20084A"></iframe>');
		} else if(target === 'gilas') {
			$frame.html('<iframe src="http://news5.com.ph/embed.aspx?g=6D0677CEC534439"></iframe>');
		}
	});

	$gilasTab.on('click', function() {
		var _this = $(this),
			$parent = _this.parent(),
			target = _this.data('target'),
			$img = _this.children(),
			source = $img.attr('src');

		if(!$img.attr('src').match(/(-active)/)) $img.attr('src', source.replace('.', '-active.'));

		if($parent.prev().length) {
			var parentSource = $parent.prev().find('img').attr('src');
			$parent.prev().find('img').attr('src', parentSource.replace('-active', ''));
		} else if($parent.next().length) {
			var parentSource = $parent.next().find('img').attr('src');
			$parent.next().find('img').attr('src', parentSource.replace('-active', ''));
		}

		$('.gilas_tab').hide();
		$('#' + target).show();
	});

}());
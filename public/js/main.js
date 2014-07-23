(function() {

	// Cache vars
	var $frameNav       = $('#main_stream_nav li a'),
		$frame          = $('#main_frame_holder'),
		$gilasTab       = $('.tab-gilas-games'),

		// Popup
		$openPopup      = $('.player_profile'),
		$closePopup     = $('#close_popup'),
		$popup          = $('#popup'),
		$popupImage 	= $('.popup_body_image_holder'),
		$popupLeft		= $('#popup_move_left'),
		$popupRight		= $('#popup_move_right'),

		// Photo Gallery
		$photoGallery       = $('.photo_holder ul'),
		$photoGalleryLeft   = $('#photo_nav_left'),
		$photoGalleryRight  = $('#photo_nav_right'),

		// Images
		popupImages 			= [	'popup-gabe-norwood', 'popup-gary-david', 'popup-japeth-aguilar', 
									'popup-jayson-castro', 'popup-jeff-chan', 'popup-jimmy-alapag', 
									'popup-ranidel-deocampo',  'popup-marcus-douthit', 'popup-marc-pingris', 
									'popup-la-tenorio', 'popup-larry-fonacier', 'popup-junemar-fajardo' ],

		// Social Media
		$loadMore 		= $('#load_more'),

		// Overlay

		$overlay 		= $('#overlay');

	function setFrameWidthAndMarginTop() {
		var _this 		= $(this);
			width 		= _this.width() * .4;
			marginTop 	= _this.height() * .3;

		// Center iframe
		$('#main_stream').width(width).css({
			'marginTop': '-' + ($('#main_stream').height() / 2) + 'px',
			'marginLeft': '-' + (width / 2) + 'px',
		});

	}

	setFrameWidthAndMarginTop();
	
	/*$('#gilas_games').backstretch('./public/image/bg-dome.jpg');*/
	$(window).resize(function() {
		setFrameWidthAndMarginTop();
		$('#kampihan_wall_item_holder').imagesLoaded(function() {
			$('#kampihan_wall_item_holder').masonry({
				itemSelector: '.kampihan_wall_item'
			});
		})
	});

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
		var _this   = $(this),
			$parent = _this.parent(),
			target  = _this.data('target'),
			$img    = _this.children(),
			source  = $img.attr('src');

		if(!$img.attr('src').match(/(-active)/)) $img.attr('src', source.replace('.', '-active.'));

		// Check if upcoming games or past games tab has been clicked
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

	/* Pop Up */

	$openPopup.on('click', function() {
		var _this = $(this),
			imgSource = _this.data('target') + '.jpg',
			imgIndex = _this.data('index');
		$popupImage.html('<img src="' + 'public/image/' + imgSource + '" data-index="'+ imgIndex +'">');
		$overlay.show();
		$popup.show();
	});

	$closePopup.on('click', function() {
		$popup.hide();
		$overlay.hide();
	});

	$overlay.on('click', function() {
		$(this).hide();
		$popup.hide();
	})

	$popupLeft.on('click', function() {
		var oldImageIndex = $popupImage.find('img').data('index'),
			image;

		if(parseInt(oldImageIndex) > 1) {
			image = '<img src="public/image/' + popupImages[parseInt(oldImageIndex) - 2] + '.jpg" data-index="'+ (parseInt(oldImageIndex) - 1) +'">';
		} else {
			image = '<img src="public/image/' + popupImages[11] + '" data-index="12">';
		}
		
		$popupImage.html(image);
	});

	$popupRight.on('click', function() {
		var oldImageIndex = $popupImage.find('img').data('index'),
			image;

		if(parseInt(oldImageIndex) >= 12) {
			image = '<img src="public/image/' + popupImages[0] + '" data-index="1">';
		} else {
			image = '<img src="public/image/' + popupImages[parseInt(oldImageIndex)] + '.jpg" data-index="'+ (parseInt(oldImageIndex) + 1) +'">';
		}
		
		$popupImage.html(image);
	});

	/* Photo Gallery Nav */

	$photoGalleryLeft.on('click', function() {
		$photoGallery.animate({
			left: '-=169px'
		}, 500);
	});

	$photoGalleryRight.on('click', function() {
		$photoGallery.animate({
			left: '+=169px'
		}, 500);
	});

	/* Smooth Scrolling */
	$('a[href*=#]:not([href=#])').click(function() {
		if(location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if(target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 600);
				return false;
			}
		}
	});

	$loadMore.on('click', function(e) {
		e.preventDefault();

		var total = $('.kampihan_wall_item').length,
			showed = $('.show').length;
		$('.kampihan_wall_item').each(function(index, el) {
			if((index + 1) >= showed && (index + 1) <= (showed + socialMediaLimit)) {

				$(el).removeClass('hide');

				$('#kampihan_wall_item_holder').imagesLoaded(function() {
					$('#kampihan_wall_item_holder').masonry({
						itemSelector: '.kampihan_wall_item'
					});
				});
				$(el).addClass('show');
			}
		})
		
	});

	$('#kampihan_wall_item_holder').imagesLoaded(function() {
		$('#kampihan_wall_item_holder').masonry({
			itemSelector: '.kampihan_wall_item'
		});
	})


}());
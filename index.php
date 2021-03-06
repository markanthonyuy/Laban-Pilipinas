<?php 
	$article_feeds = @file_get_contents('http://www.interaksyon.com/interaktv/tag/2013-fiba-asia-championship/feed');
	$articles = @simplexml_load_string($article_feeds);

	$photo_gallery_feeds = @file_get_contents('http://www.interaksyon.com/interaktv/photos/basketball/feed/');
	$photo_gallery = @simplexml_load_string($photo_gallery_feeds);

	$kampihan_wall_feeds = @file_get_contents('http://www.tv5.com.ph/api/sns/rss/0/labanpilipinas2014');
	$kampihan_wall = @simplexml_load_string($kampihan_wall_feeds);

	$social_media_limit = 4;
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Laban Pilipinas</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

		<link rel="shortcut icon" type="image/png" href="public/image/labanpilipinas.ico">
		<link rel="favicon" type="image/png" href="public/image/labanpilipinas.ico">
		<link rel="stylesheet" href="public/css/normalize.css">
		<link rel="stylesheet" href="public/css/main.css">
		<script src="public/js/vendor/modernizr-2.8.0.min.js"></script>
		<script>
			window.socialMediaLimit = <?php echo $social_media_limit ?>;
		</script>
	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<div id="overlay"></div>

		<div id="main">
			<nav id="main_header_nav">
				<p class="social_media">
					<a href="https://www.facebook.com/Sports5PH"><img src="public/image/social-media-tab-fb.jpg"></a>
					<a href="https://twitter.com/sports5PH"><img src="public/image/social-media-tab-twitter.jpg"></a>
				</p>
				<ul>
					<li><a href="#gilas_games">GILAS GAMES</a></li>
					<li><a href="#rosters">ROSTERS</a></li>
					<li><a href="#photo_gallery">PHOTO GALLERY</a></li>
					<li><a href="#social_media">SOCIAL MEDIA</a></li>
					<li><a href="#kampihan_wall">KAMPIHAN WALL</a></li>
				</ul>
			</nav>
			<header>
				<img src="public/image/bg-main-2.jpg" class="perfect_bg">
				<section id="main_stream">
					<nav class="clearfix">
						<ul id="main_stream_nav" class="clearfix">
							<li><a href="#" class="stream_tv5_active" data-target="tv5" data-default-class="stream_tv5"></a></li>
							<li><a href="#" class="stream_aksyontv" data-target="aksyontv" data-default-class="stream_aksyontv"></a></li>
							<li><a href="#" class="stream_gilas" data-target="gilas" data-default-class="stream_gilas"></a></li>
						</ul>
					</nav>
					<div id="main_frame_holder">
						<iframe src="http://news5.com.ph/embed.aspx?g=0A999CBBC5" id="iframe_tv5"></iframe>
					</div>
				</section>
			</header>
			<section id="gilas_games">
				<img src="public/image/bg-dome.jpg" class="perfect_bg">
				<div class="temp_image">
					<img src="public/image/bg-to-be-announced.png">
					<div class="ads">
						<a href="http://sports5.ph" target="_blank"><img src="public/image/superleaderboard-955x150-sports5ph.jpg">
						</a>
					</div>
				</div>
				<!-- <h2><img src="public/image/heading-gilas-games.png" alt="GILAS GAMES"></h2>
				<div class="gilas_games_wrap">
					<nav>
						<ul class="clearfix">
							<li>
								<a href="javascript:void(0)" class="tab-gilas-games" data-target="gilas_upcoming_games"><img src="public/image/tab-upcoming-games-active.jpg"></a>
							</li>
							<li>
								<a href="javascript:void(0)" class="tab-gilas-games" data-target="gilas_past_games"><img src="public/image/tab-past-games.jpg"></a>
							</li>
						</ul>
					</nav>

					<p id="gilas_team_logo"><img src="public/image/logo-gilas-pilipinas.png"></p>
					<p id="gilas_team_flag"><img src="public/image/flag-pilipinas-big.jpg"></p>
					<div id="gilas_upcoming_games" class="gilas_tab">
						<table>
							<colgroup>
								<col width="40%"></col>
								<col width="30%"></col>
								<col width="7%"></col>
								<col width="10%"></col>
								<col width="13%"></col>
							</colgroup>
							<tbody>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS CHINESE TAIPEI</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS SINGAPORE</td>
									<td class="status">LOSE</td>
									<td class="score">298-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS JAPAN</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS CHINESE TAIPEI</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS CHINESE TAIPEI</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS CHINESE TAIPEI</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS CHINESE TAIPEI</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="gilas_past_games" class="gilas_tab">
						<table>
							<colgroup>
								<col width="40%"></col>
								<col width="30%"></col>
								<col width="7%"></col>
								<col width="10%"></col>
								<col width="13%"></col>
							</colgroup>
							<tbody>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS CHINESE TAIPEI</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS CHINESE TAIPEI</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
								<tr>
									<td></td>
									<td class="date">JULY 12, 2014 VS CHINESE TAIPEI</td>
									<td class="status">WIN</td>
									<td class="score">98-96</td>
									<td class="flag"><img src="public/image/flags_russia.jpg"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> -->
			</section> <!-- </gilas_games> -->

			<section id="rosters">
				<div id="rosters_main" class="clearfix">
					<div class="rosters_player">
						<h2><img src="public/image/heading-rosters.png" alt="ROSTERS"></h2>
						<div class="rosters_team">
							<img src="public/image/flag-rosters-ph.jpg">
							<img src="public/image/text-phl.jpg">
						</div>
						<div class="rosters_player_team">
							<a href="javascript:void(0)" class="player_profile" data-target="popup-gabe-norwood" data-index="1">
								<img src="public/image/player-1.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-gary-david" data-index="2">
								<img src="public/image/player-2.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-japeth-aguilar" data-index="3">
								<img src="public/image/player-3.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-jayson-castro" data-index="4">
								<img src="public/image/player-4.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-jeff-chan" data-index="5">
								<img src="public/image/player-5.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-jimmy-alapag" data-index="6">
								<img src="public/image/player-6.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-ranidel-deocampo" data-index="7">
								<img src="public/image/player-7.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-marcus-douthit" data-index="8">
								<img src="public/image/player-8.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-marc-pingris" data-index="9">
								<img src="public/image/player-9.png">
							</a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-la-tenorio" data-index="10">
								<img src="public/image/player-10.png"
							></a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-larry-fonacier" data-index="11">
								<img src="public/image/player-11.png"
							></a>
							<a href="javascript:void(0)" class="player_profile" data-target="popup-junemar-fajardo" data-index="12">
								<img src="public/image/player-12.png"
							></a>
						</div>
					</div>
					<div class="rosters_dummy">
						<img src="public/image/rosters-dummy.png">
					</div>
					<div id="popup">
						<p class="popup_close"><a href="javascript:void(0)" id="close_popup"><img src="public/image/popup-close.jpg"></a></p>
						<div class="popup_body">
							<div class="popup_body_image_holder"></div>
							<p class="popup_left">
								<a href="javascript:void(0)" id="popup_move_left"><img src="public/image/arrow-left.jpg"></a>
							</p>
							<p class="popup_right">
								<a href="javascript:void(0)" id="popup_move_right"><img src="public/image/arrow-right.jpg"></a>
							</p>
						</div>
					</div>
				</div>
			</section> <!-- </rosters> -->

			<section id="photo_social_media_wrap">
				<div id="photo_gallery">
					<h2><img src="public/image/heading-photo-gallery.png" alt="PHOTO GALLERY"></h2>
					<div class="photo_gallery_holder" class="clearfix">
						<a href="javascript:void(0)" id="photo_nav_left"><img src="public/image/arrow-left.jpg"></a>
						<div class="photo_holder">
							<ul>
								<?php 
									foreach ($photo_gallery->channel->item as $key => $photo) {
										echo '<li><a href="'.$photo->link.'"><img src="'.$photo->guid.'"></a></li>';
									}
								?>
							</ul>
						</div>
						<a href="javascript:void(0)" id="photo_nav_right"><img src="public/image/arrow-right.jpg"></a>
					</div>
				</div> <!-- </photo_gallery> -->

				<div id="social_media" class="clearfix">
					<div id="articles">
						<h2><img src="public/image/heading-articles.png" alt="ARTICLES"></h2>
						<div class="articles_holder">
							<ul>
								<?php
									if(!empty($articles)) {
										foreach($articles->channel->item as $i) {
											$fiba = 0;
											foreach($i->category as $c){
												if(trim($c) == 'fiba asia' || trim($c) == '2013 fiba asia championship') {
													$fiba = 1;
													break;
												}
											}
											if($fiba) {
												echo '<li><a target="_blank" href="',$i->link,'">',$i->title,'</a></li>';
											} 
										}
									} else {
										echo 'Unable to load article at this time';
									}
								?>
							</ul>
						</div>
					</div>
					<div id="tweets">
						<h2><img src="public/image/heading-tweets.png" alt="TWEETS"></h2>
						<div class="tweets_holder">
							<a class="twitter-timeline" href="https://twitter.com/search?q=%23gilaskongmahal" data-widget-id="367862772790341632" height="300">Tweets about "#gilaskongmahal"</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>
				</div> <!-- </social_media> -->
			</section>

			<section id="kampihan_wall">
				<h2><img src="public/image/heading-suportahan.png" alt="SUPORTAHAN ANG LABAN"></h2>
				<div class="kampihan_wall_holder">
					<h3><img src="public/image/sub-header-laban-pilipinas.jpg"></h3>
					<div id="kampihan_wall_item_holder" class="clearfix">
						<?php 
							$ctr = 0;
							foreach($kampihan_wall->channel->item as $key => $item) {
								$class = $ctr < $social_media_limit ? 'show' 
												  					: 'hide';
								$platform = $item->platform == 'Twitter' ? '<img src="public/image/icon-twitter.jpg">' 
																		 : '<img src="public/image/icon-instagram.jpg">';
								$image = $item->platform == 'Instagram' ? '<img src="'.$item->image.'" width="260">' : '';

								echo  	'<div class="kampihan_wall_item '. $class .'">
											<div class="kampihan_wall_item_top">
												<p class="wall_hashtag">'.$item->message.'</p>
												<p class="wall_image">'.$image.'</p>
											</div>
											<div class="kampihan_wall_item_bottom">
												<div class="wall_info_holder clearfix">
													<div class="wall_info">
														<p class="wall_name"><a href="'.$item->link.'">'.$item->name.'</a></p>
														<p class="wall_datetime">Posted on '.$item->post_date.'</p>
													</div>
													<p class="wall_photo_icon">'.$platform.'</p>
												</div>
											</div>
										</div>';
								$ctr++;
							}
						?>
					</div>
					<div id="kampihan_wall_load_more">
						<a href="#" id="load_more"><img src="public/image/sub-header-load-more.jpg"></a>
					</div>
				</div>
			</section> <!-- </kampihan_wall> -->
			<footer>
				<div id="footer_wrap">
					<div id="footer_ads" class="ads"><a href="https://play.google.com/store/apps/details?id=pbaoninteraktv.client.android&hl=en" target="_blank"><img src="public/image/pinoyhoops.jpg"></a></div>
					<ul id="footer_links" class="clearfix">
						<li><a href="http://www.tv5.com.ph/"><img src="public/image/footer-link-tv5.jpg"></a></li>
						<li><a href="http://www.interaksyon.com/interaktv/"><img src="public/image/footer-link-sports5.jpg"></a></li>
						<li><a href="http://news5.com.ph/"><img src="public/image/footer-link-tv5-everywhere.jpg"></a></li>
						<li><a href="http://n5e.interaksyon.com/live/A12F20084A/live-aksyon-tv"><img src="public/image/footer-link-aksyontv.jpg"></a></li>
					</ul>
					<p id="copyright">&copy; 2014 ABC Development Corporation. All Rights Reserved.</p>
				</div>
			</footer>
		</div> <!-- </main> -->

		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="public/js/vendor/jquery-1.11.1.min.js"><\/script>')</script> -->
		<script src="public/js/vendor/jquery-1.11.1.min.js"></script>
		<script src="public/js/plugins.js"></script>
		<script src="public/js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

		<script>
	        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	        ga('create', 'UA-21555003-1', 'interaksyon.com');ga('send', 'pageview');
        </script>
	</body>
</html>
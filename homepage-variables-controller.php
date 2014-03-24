<?php // Which Page Template is being used? ?>
<?php $page_template_slug = get_page_template_slug( $post->ID ); ?>

<?php /////// Homepage Layout 1 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-1.php' ): ?>

	<?php // Homepage Layout 1 Tile 1 (Static Image Tile) ?>
	<?php $hp1_tile_1_bg_image = get_field('hp1_tile_1_bg_image'); ?>
	<?php if( !empty($hp1_tile_1_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_1"><img class="grayscale" src="<?php echo $hp1_tile_1_bg_image['url']; ?>" alt="<?php echo $hp1_tile_1_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 2 (Instagram Tile) ?>
	<script type="text/javascript">
	    var instagramHP1Tile2 = new Instafeed({
	        get: 'user',
	        userId: 50320184,
	        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
	        target: 'instagram_hp_1_tile_2',
	        sortBy: 'most-recent',
	        resolution: 'low_resolution',
	        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
	        limit: 1
	    });
	    instagramHP1Tile2.run();
	</script>
	<div class="threecol grid clearfix hideme" id="instagram_hp_1_tile_2"></div>

	<?php // Homepage Layout 1 Tile 3 (Instagram Tile) ?>
	<script type="text/javascript">
		var instagram_hp_1_tile_3_count = 0;
	    var instagramHP1Tile3 = new Instafeed({
	        get: 'user',
	        userId: 50320184,
	        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
	        target: 'instagram_hp_1_tile_3',
	        sortBy: 'most-recent',
	        resolution: 'low_resolution',
	        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
			success: function() {
				instagram_hp_1_tile_3_count = 0;
			},
			filter: function(image) {
				return (instagram_hp_1_tile_3_count++ == 1) ? true : false;
			}
	    });
	    instagramHP1Tile3.run();
	</script>
	<div class="threecol grid clearfix hideme" id="instagram_hp_1_tile_3"></div>

	<?php // Homepage Layout 1 Tile 4 (Latest News Tile) ?>
	<?php $hp1_tile_4_bg_image = get_field('latest_news_tile_bg_image'); ?>
	<?php if( !empty($hp1_tile_4_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_4"><a href="#newsletter"><img class="grayscale" src="<?php echo $hp1_tile_4_bg_image['url']; ?>" alt="<?php echo $hp1_tile_4_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 5 (Lookbook Tile) ?>
	<?php $hp1_tile_5_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php if( !empty($hp1_tile_5_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_5"><a href="/lookbook"><img class="grayscale" src="<?php echo $hp1_tile_5_bg_image['url']; ?>" alt="<?php echo $hp1_tile_5_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 6 (Instagram Tile) ?>
	<script type="text/javascript">
		var instagram_hp_1_tile_6_count = 0;
	    var instagramHP1Tile6 = new Instafeed({
	        get: 'user',
	        userId: 50320184,
	        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
	        target: 'instagram_hp_1_tile_6',
	        sortBy: 'most-recent',
	        resolution: 'low_resolution',
	        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
			success: function() {
				instagram_hp_1_tile_6_count = 0;
			},
			filter: function(image) {
				return (instagram_hp_1_tile_6_count++ == 2) ? true : false;
			}
	    });
	    instagramHP1Tile6.run();
	</script>
	<div class="threecol grid clearfix hideme" id="instagram_hp_1_tile_6"></div>

	<?php // Homepage Layout 1 Tile 7 (Static Image Tile) ?>
	<?php $hp1_tile_7_bg_image = get_field('hp1_tile_7_bg_image'); ?>
	<?php if( !empty($hp1_tile_7_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_7"><img class="grayscale" src="<?php echo $hp1_tile_7_bg_image['url']; ?>" alt="<?php echo $hp1_tile_7_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 8 (Twitter Feed Tile) ?>
	<?php $hp1_tile_8_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php if( !empty($hp1_tile_8_bg_image) ): ?>
		<div class="threecol grid grayscale" id="twitter_feed_tile" style="background-image: url(<?php echo $hp1_tile_8_bg_image['url']; ?>);">Twitter Carousel</div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 9 (About Tile) ?>
	<?php $hp1_tile_9_bg_image = get_field('about_tile_bg_image'); ?>
	<?php if( !empty($hp1_tile_9_bg_image) ): ?>
		<div class="threecol grid clearfix" id="about_tile"><a href="#about"><img class="grayscale" src="<?php echo $hp1_tile_9_bg_image['url']; ?>" alt="<?php echo $hp1_tile_9_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 10 (Static Image Tile) ?>
	<?php $hp1_tile_10_bg_image = get_field('hp1_tile_10_bg_image'); ?>
	<?php if( !empty($hp1_tile_10_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_10"><img class="grayscale" src="<?php echo $hp1_tile_10_bg_image['url']; ?>" alt="<?php echo $hp1_tile_10_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 11 (Follow Us Tile) ?>
	<?php $hp1_tile_11_bg_image = get_field('follow_us_tile_hp1_bg_image'); ?>
	<?php if( !empty($hp1_tile_11_bg_image) ): ?>
		<div class="threecol grid grayscale clearfix" id="follow_us_tile" style="background-image: url(<?php echo $hp1_tile_11_bg_image['url']; ?>);">
			<h2>Follow Us</h2>
			<ul class="clearfix">
				<li class="facebook"><a class="image-replacement" href="https://www.facebook.com/edhardy" target="_blank">Facebook (https://www.facebook.com/edhardy)</a></li>
				<li class="twitter"><a class="image-replacement" href="https://twitter.com/edhardy" target="_blank">Twitter (https://twitter.com/edhardy)</a></li>
				<li class="instagram"><a class="image-replacement" href="http://instagram.com/OfficialEdHardy" target="_blank">Instagram (http://instagram.com/OfficialEdHardy)</a></li>
				<li class="pinterest"><a class="image-replacement" href="http://www.pinterest.com/edhardyofficial/" target="_blank">Pinterest (http://www.pinterest.com/edhardyofficial/)</a></li>
			</ul>
		</div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 12 (Instagram Tile) ?>
	<script type="text/javascript">
		var instagram_hp_1_tile_12_count = 0;
	    var instagramHP1Tile12 = new Instafeed({
	        get: 'user',
	        userId: 50320184,
	        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
	        target: 'instagram_hp_1_tile_12',
	        sortBy: 'most-recent',
	        resolution: 'low_resolution',
	        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
			success: function() {
				instagram_hp_1_tile_12_count = 0;
			},
			filter: function(image) {
				return (instagram_hp_1_tile_12_count++ == 3) ? true : false;
			}
	    });
	    instagramHP1Tile12.run();
	</script>
	<div class="threecol grid clearfix" id="instagram_hp_1_tile_12"></div>

<?php endif; ?>

<?php /////// Homepage Layout 2 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-2.php' ): ?>

	<?php // Homepage Layout 2 Tile 1 (Static Image Tile) ?>
	<?php $hp2_tile_1_bg_image = get_field('hp2_tile_1_bg_image'); ?>
	<?php if( !empty($hp2_tile_1_bg_image) ): ?>
		<div class="sixcol grid clearfix" id="tile_1"><img class="grayscale" src="<?php echo $hp2_tile_1_bg_image['url']; ?>" alt="<?php echo $hp2_tile_1_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 2 (Instagram Tile) ?>
	<script type="text/javascript">
	    var instagramHP2Tile2 = new Instafeed({
	        get: 'user',
	        userId: 50320184,
	        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
	        target: 'instagram_hp_2_tile_2',
	        sortBy: 'most-recent',
	        resolution: 'low_resolution',
	        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
	        limit: 1
	    });
	    instagramHP2Tile2.run();
	</script>
	<div class="threecol grid clearfix" id="instagram_hp_2_tile_2"></div>

	<?php // Homepage Layout 2 Tile 3 (Static Image Tile) ?>
	<?php $hp2_tile_3_bg_image = get_field('hp2_tile_3_bg_image'); ?>
	<?php if( !empty($hp2_tile_3_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_3"><img class="grayscale" src="<?php echo $hp2_tile_3_bg_image['url']; ?>" alt="<?php echo $hp2_tile_3_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 4 (Static Image Tile) ?>
	<?php $hp2_tile_4_bg_image = get_field('hp2_tile_4_bg_image'); ?>
	<?php if( !empty($hp2_tile_4_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_4"><img class="grayscale" src="<?php echo $hp2_tile_4_bg_image['url']; ?>" alt="<?php echo $hp2_tile_4_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 5 (Twitter Feed Tile) ?>
	<?php $hp2_tile_5_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php if( !empty($hp2_tile_5_bg_image) ): ?>
		<div class="threecol grid grayscale" id="twitter_feed_tile" style="background-image: url(<?php echo $hp2_tile_5_bg_image['url']; ?>);">Twitter Carousel</div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 6 (Lookbook Tile) ?>
	<?php $hp2_tile_6_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php if( !empty($hp2_tile_6_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_6"><a href="/lookbook"><img class="grayscale" src="<?php echo $hp2_tile_6_bg_image['url']; ?>" alt="<?php echo $hp2_tile_6_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 7 (Follow Us Tile) ?>
	<?php $hp2_tile_7_bg_image = get_field('follow_us_tile_hp2_bg_image'); ?>
	<?php if( !empty($hp2_tile_7_bg_image) ): ?>
		<div class="sixcol grid grayscale clearfix hideme" id="follow_us_tile" style="background-image: url(<?php echo $hp2_tile_7_bg_image['url']; ?>);">
			<h2>Follow Us</h2>
			<ul class="clearfix">
				<li class="facebook"><a class="image-replacement" href="https://www.facebook.com/edhardy" target="_blank">Facebook (https://www.facebook.com/edhardy)</a></li>
				<li class="twitter"><a class="image-replacement" href="https://twitter.com/edhardy" target="_blank">Twitter (https://twitter.com/edhardy)</a></li>
				<li class="instagram"><a class="image-replacement" href="http://instagram.com/OfficialEdHardy" target="_blank">Instagram (http://instagram.com/OfficialEdHardy)</a></li>
				<li class="pinterest"><a class="image-replacement" href="http://www.pinterest.com/edhardyofficial/" target="_blank">Pinterest (http://www.pinterest.com/edhardyofficial/)</a></li>
			</ul>
		</div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 8 (Latest News Tile) ?>
	<?php $hp2_tile_8_bg_image = get_field('latest_news_tile_bg_image'); ?>
	<?php if( !empty($hp2_tile_8_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_8"><a href="#newsletter"><img class="grayscale" src="<?php echo $hp2_tile_8_bg_image['url']; ?>" alt="<?php echo $hp2_tile_8_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

<?php endif; ?>

<?php /////// Homepage Layout 3 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-3.php' ): ?>

	<?php // Homepage Layout 3 Tile 1 (Static Image Tile) ?>
	<?php $hp3_tile_1_bg_image = get_field('hp3_tile_1_bg_image'); ?>
	<?php if( !empty($hp3_tile_1_bg_image) ): ?>
		<div class="twelvecol grid clearfix" id="tile_1"><img class="grayscale" src="<?php echo $hp3_tile_1_bg_image['url']; ?>" alt="<?php echo $hp3_tile_1_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 2 (Lookbook Tile) ?>
	<?php $hp3_tile_2_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php if( !empty($hp3_tile_2_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_2"><a href="/lookbook"><img class="grayscale" src="<?php echo $hp3_tile_2_bg_image['url']; ?>" alt="<?php echo $hp3_tile_2_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 3 (Twitter Feed Tile) ?>
	<?php $hp3_tile_3_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php if( !empty($hp3_tile_3_bg_image) ): ?>
		<div class="threecol grid grayscale" id="twitter_feed_tile" style="background-image: url(<?php echo $hp3_tile_3_bg_image['url']; ?>);">Twitter Carousel</div>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 4 (Latest News Tile) ?>
	<?php $hp3_tile_4_bg_image = get_field('latest_news_tile_bg_image'); ?>
	<?php if( !empty($hp3_tile_4_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_4"><a href="#newsletter"><img class="grayscale" src="<?php echo $hp3_tile_4_bg_image['url']; ?>" alt="<?php echo $hp3_tile_4_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 5 (Instagram Tile) ?>
	<script type="text/javascript">
	    var instagramHP3Tile5 = new Instafeed({
	        get: 'user',
	        userId: 50320184,
	        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
	        target: 'instagram_hp_3_tile_5',
	        sortBy: 'most-recent',
	        resolution: 'low_resolution',
	        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
	        limit: 1
	    });
	    instagramHP3Tile5.run();
	</script>
	<div class="threecol grid clearfix" id="instagram_hp_3_tile_5"></div>

<?php endif; ?>

<?php // Which Page Template is being used? ?>
<?php $page_template_slug = get_page_template_slug( $post->ID ); ?>

<?php // Demo Mode Enabled? ?>
<?php $demo_mode_enabled = true; ?>

<?php /////// Homepage Layout 1 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-1.php' ): ?>

	<?php // Homepage Layout 1 Tile 1 (Static Image Tile) ?>
	<?php $hp1_tile_1_bg_image = get_field('hp1_tile_1_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_1_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_1"><img class="grayscale" src="<?php echo $hp1_tile_1_bg_image['url']; ?>" alt="<?php echo $hp1_tile_1_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 2 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<div class="threecol grid clearfix hideme" id="instagram_tile_1"></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 3 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<div class="threecol grid clearfix hideme" id="instagram_tile_2"></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 4 (Latest News Tile) ?>
	<?php $hp1_tile_4_bg_image = get_field('latest_news_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_4_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_4"><a href="#newsletter"><img class="grayscale" src="<?php echo $hp1_tile_4_bg_image['url']; ?>" alt="<?php echo $hp1_tile_4_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 5 (Lookbook Tile) ?>
	<?php $hp1_tile_5_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_5_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_5"><a href="/lookbook"><img class="grayscale" src="<?php echo $hp1_tile_5_bg_image['url']; ?>" alt="<?php echo $hp1_tile_5_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 6 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<div class="threecol grid clearfix hideme" id="instagram_tile_3"></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 7 (Static Image Tile) ?>
	<?php $hp1_tile_7_bg_image = get_field('hp1_tile_7_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_7_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_7"><img class="grayscale" src="<?php echo $hp1_tile_7_bg_image['url']; ?>" alt="<?php echo $hp1_tile_7_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 8 (Twitter Feed Tile) ?>
	<?php $hp1_tile_8_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_8_bg_image) ): ?>
		<div class="threecol grid grayscale" id="twitter_feed_tile" style="background-image: url(<?php echo $hp1_tile_8_bg_image['url']; ?>);">Twitter Carousel</div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 9 (About Tile) ?>
	<?php $hp1_tile_9_bg_image = get_field('about_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_9_bg_image) ): ?>
		<div class="threecol grid clearfix" id="about_tile"><a href="#about"><img class="grayscale" src="<?php echo $hp1_tile_9_bg_image['url']; ?>" alt="<?php echo $hp1_tile_9_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 10 (Static Image Tile) ?>
	<?php $hp1_tile_10_bg_image = get_field('hp1_tile_10_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_10_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_10"><img class="grayscale" src="<?php echo $hp1_tile_10_bg_image['url']; ?>" alt="<?php echo $hp1_tile_10_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 11 (Follow Us Tile) ?>
	<?php $hp1_tile_11_bg_image = get_field('follow_us_tile_hp1_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_11_bg_image) ): ?>
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
	<?php if( $demo_mode_enabled ): ?>
		<div class="threecol grid clearfix" id="instagram_tile_4"></div>
	<?php endif; ?>

<?php endif; ?>

<?php /////// Homepage Layout 2 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-2.php' ): ?>

	<?php // Homepage Layout 2 Tile 1 (Static Image Tile) ?>
	<?php $hp2_tile_1_bg_image = get_field('hp2_tile_1_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_1_bg_image) ): ?>
		<div class="sixcol grid clearfix" id="tile_1"><img class="grayscale" src="<?php echo $hp2_tile_1_bg_image['url']; ?>" alt="<?php echo $hp2_tile_1_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 2 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<div class="threecol grid clearfix" id="instagram_tile_1"></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 3 (Static Image Tile) ?>
	<?php $hp2_tile_3_bg_image = get_field('hp2_tile_3_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_3_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_3"><img class="grayscale" src="<?php echo $hp2_tile_3_bg_image['url']; ?>" alt="<?php echo $hp2_tile_3_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 4 (Static Image Tile) ?>
	<?php $hp2_tile_4_bg_image = get_field('hp2_tile_4_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_4_bg_image) ): ?>
		<div class="threecol grid clearfix hideme" id="tile_4"><img class="grayscale" src="<?php echo $hp2_tile_4_bg_image['url']; ?>" alt="<?php echo $hp2_tile_4_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 5 (Twitter Feed Tile) ?>
	<?php $hp2_tile_5_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_5_bg_image) ): ?>
		<div class="threecol grid grayscale" id="twitter_feed_tile" style="background-image: url(<?php echo $hp2_tile_5_bg_image['url']; ?>);">Twitter Carousel</div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 6 (Lookbook Tile) ?>
	<?php $hp2_tile_6_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_6_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_6"><a href="/lookbook"><img class="grayscale" src="<?php echo $hp2_tile_6_bg_image['url']; ?>" alt="<?php echo $hp2_tile_6_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 7 (Follow Us Tile) ?>
	<?php $hp2_tile_7_bg_image = get_field('follow_us_tile_hp2_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_7_bg_image) ): ?>
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
	<?php if( $demo_mode_enabled && !empty($hp2_tile_8_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_8"><a href="#newsletter"><img class="grayscale" src="<?php echo $hp2_tile_8_bg_image['url']; ?>" alt="<?php echo $hp2_tile_8_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

<?php endif; ?>

<?php /////// Homepage Layout 3 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-3.php' ): ?>

	<?php // Homepage Layout 3 Tile 1 (Static Image Tile) ?>
	<?php $hp3_tile_1_bg_image = get_field('hp3_tile_1_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp3_tile_1_bg_image) ): ?>
		<div class="twelvecol grid clearfix" id="tile_1"><img class="grayscale" src="<?php echo $hp3_tile_1_bg_image['url']; ?>" alt="<?php echo $hp3_tile_1_bg_image['alt']; ?>" /></div>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 2 (Lookbook Tile) ?>
	<?php $hp3_tile_2_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp3_tile_2_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_2"><a href="/lookbook"><img class="grayscale" src="<?php echo $hp3_tile_2_bg_image['url']; ?>" alt="<?php echo $hp3_tile_2_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 3 (Twitter Feed Tile) ?>
	<?php $hp3_tile_3_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp3_tile_3_bg_image) ): ?>
		<div class="threecol grid grayscale" id="twitter_feed_tile" style="background-image: url(<?php echo $hp3_tile_3_bg_image['url']; ?>);">Twitter Carousel</div>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 4 (Latest News Tile) ?>
	<?php $hp3_tile_4_bg_image = get_field('latest_news_tile_bg_image'); ?>
	<?php if( $demo_mode_enabled && !empty($hp3_tile_4_bg_image) ): ?>
		<div class="threecol grid clearfix" id="tile_4"><a href="#newsletter"><img class="grayscale" src="<?php echo $hp3_tile_4_bg_image['url']; ?>" alt="<?php echo $hp3_tile_4_bg_image['alt']; ?>" /></a></div>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 5 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<div class="threecol grid clearfix" id="instagram_tile_1"></div>
	<?php endif; ?>

<?php endif; ?>

<?php /////// Instagram Feed Testing ///////////////////////////////////////////////////////////////////////////// ?>

<script type="text/javascript">
    var instagramTile1 = new Instafeed({
        get: 'user',
        userId: 50320184,
        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
        target: 'instagram_tile_1',
        sortBy: 'random',
        resolution: 'low_resolution',
        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
        limit: 1
    });
    instagramTile1.run();
</script>

<script type="text/javascript">
    var instagramTile2 = new Instafeed({
        get: 'user',
        userId: 50320184,
        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
        target: 'instagram_tile_2',
        sortBy: 'random',
        resolution: 'low_resolution',
        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
	    after: function () {
	        var instagram_tile_2_img = jQuery("#instagram_tile_2").find('a');
	        jQuery(instagram_tile_2_img.slice(1, instagram_tile_2_img.length)).remove();
	    }
    });
    instagramTile2.run();
</script>

<script type="text/javascript">
    var instagramTile3 = new Instafeed({
        get: 'user',
        userId: 50320184,
        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
        target: 'instagram_tile_3',
        sortBy: 'random',
        resolution: 'low_resolution',
        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
	    after: function () {
	        var instagram_tile_3_img = jQuery("#instagram_tile_3").find('a');
	        jQuery(instagram_tile_3_img.slice(1, instagram_tile_3_img.length)).remove();
	    }
    });
    instagramTile3.run();
</script>

<script type="text/javascript">
    var instagramTile4 = new Instafeed({
        get: 'user',
        userId: 50320184,
        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
        target: 'instagram_tile_4',
        sortBy: 'random',
        resolution: 'low_resolution',
        template: '<a href="{{link}}" target="_blank"><img class="grayscale" src="{{image}}" alt="" /></a>',
	    after: function () {
	        var instagram_tile_4_img = jQuery("#instagram_tile_4").find('a');
	        jQuery(instagram_tile_4_img.slice(1, instagram_tile_4_img.length)).remove();
	    }
    });
    instagramTile4.run();
</script>

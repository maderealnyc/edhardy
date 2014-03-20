<?php // Which Page Template is being used? ?>
<?php $page_template_slug = get_page_template_slug( $post->ID ); ?>

<?php // Demo Mode Enabled? ?>
<?php $demo_mode_enabled = true; ?>

<?php /////// Instagram Feed Testing ///////////////////////////////////////////////////////////////////////////// ?>

<h3>Instagram Feed Testing</h3>
<!--
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'OfficialEdHardy',
        clientId: 'b8bbb9934df3402781645208fcfcdcca'
    });
    feed.run();
</script>
-->
<script type="text/javascript">
    var intagramTile2 = new Instafeed({
        get: 'user',
        userId: 50320184,
        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
        target: 'intagram_tile_2',
        sortBy: 'most-recent',
        resolution: 'low_resolution',
        template: '<a href="{{link}}" target="_blank"><img src="{{image}}" width="300" height="300"/></a>',
        limit: 1
    });
    intagramTile2.run();
</script>
<div id="intagram_tile_2"></div>

<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 50320184,
        accessToken: '50320184.467ede5.a99c8bbf270145c9ad8c2414e8e20bad',
        target: 'instafeed',
        sortBy: 'most-recent',
        resolution: 'low_resolution',
        template: '<a href="{{link}}" target="_blank"><img src="{{image}}" width="300" height="300"/></a>',
        limit: 4
    });
    userFeed.run();

    instagram_images = new array();
	instagram_images.push(userFeed[0]);
	document.write("instagram_images[0]" + instagram_images[0].name);

</script>
<div id="instafeed"></div>

<?php /////// Homepage Layout 1 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-1.php' ): ?>

	<?php if( $demo_mode_enabled ): ?><hr/><h4>Homepage Layout 1 Variables &amp; Demos</h4><hr/><?php endif; ?>

	<?php // Homepage Layout 1 Tile 1 (Static Image Tile) ?>
	<?php $hp1_tile_1_bg_image = get_field('hp1_tile_1_bg_image'); ?>
	<?php // Homepage Layout 1 Tile 1 (Static Image Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 1 (Static Image Tile) Background Image: $hp1_tile_1_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_1_bg_image) ): ?>
		<img src="<?php echo $hp1_tile_1_bg_image['url']; ?>" alt="<?php echo $hp1_tile_1_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 2 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 2 (Instagram Tile) : </p>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 3 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 3 (Instagram Tile) : </p>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 4 (Latest News Tile) ?>
	<?php $hp1_tile_4_bg_image = get_field('latest_news_tile_bg_image'); ?>
	<?php // Homepage Layout 1 Tile 4 (Latest News Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 4 (Latest News Tile) Background Image: $hp1_tile_4_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_4_bg_image) ): ?>
		<a href="#newsletter"><img src="<?php echo $hp1_tile_4_bg_image['url']; ?>" alt="<?php echo $hp1_tile_4_bg_image['alt']; ?>" /></a>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 5 (Lookbook Tile) ?>
	<?php $hp1_tile_5_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php // Homepage Layout 1 Tile 5 (Lookbook Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 5 (Lookbook Tile) Background Image: $hp1_tile_5_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_5_bg_image) ): ?>
		<a href="/lookbook"><img src="<?php echo $hp1_tile_5_bg_image['url']; ?>" alt="<?php echo $hp1_tile_5_bg_image['alt']; ?>" /></a>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 6 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 6 (Instagram Tile) : </p>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 7 (Static Image Tile) ?>
	<?php $hp1_tile_7_bg_image = get_field('hp1_tile_7_bg_image'); ?>
	<?php // Homepage Layout 1 Tile 7 (Static Image Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 7 (Static Image Tile) Background Image: $hp1_tile_7_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_7_bg_image) ): ?>
		<img src="<?php echo $hp1_tile_7_bg_image['url']; ?>" alt="<?php echo $hp1_tile_7_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 8 (Twitter Feed Tile) ?>
	<?php $hp1_tile_8_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php // Homepage Layout 1 Tile 8 (Twitter Feed Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 8 (Twitter Feed Tile) Background Image: $hp1_tile_8_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_8_bg_image) ): ?>
		<img src="<?php echo $hp1_tile_8_bg_image['url']; ?>" alt="<?php echo $hp1_tile_8_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 9 (About Tile) ?>
	<?php $hp1_tile_9_bg_image = get_field('about_tile_bg_image'); ?>
	<?php // Homepage Layout 1 Tile 9 (About Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 9 (About Tile) Background Image: $hp1_tile_9_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_9_bg_image) ): ?>
		<a href="#about"><img src="<?php echo $hp1_tile_9_bg_image['url']; ?>" alt="<?php echo $hp1_tile_9_bg_image['alt']; ?>" /></a>
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 10 (Static Image Tile) ?>
	<?php $hp1_tile_10_bg_image = get_field('hp1_tile_10_bg_image'); ?>
	<?php // Homepage Layout 1 Tile 10 (Static Image Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 10 (Static Image Tile) Background Image: $hp1_tile_10_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_10_bg_image) ): ?>
		<img src="<?php echo $hp1_tile_10_bg_image['url']; ?>" alt="<?php echo $hp1_tile_10_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 11 (Follow Us Tile) ?>
	<?php $hp1_tile_11_bg_image = get_field('follow_us_tile_hp1_bg_image'); ?>
	<?php // Homepage Layout 1 Tile 11 (Follow Us Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 11 (Follow Us Tile) Background Image: $hp1_tile_11_bg_image['url'];</p>
		<p><a href="https://www.facebook.com/edhardy" target="_blank">Facebook (https://www.facebook.com/edhardy)</a></p>
		<p><a href="https://twitter.com/edhardy" target="_blank">Twitter (https://twitter.com/edhardy)</a></p>
		<p><a href="http://instagram.com/OfficialEdHardy" target="_blank">Instagram (http://instagram.com/OfficialEdHardy)</a></p>
		<p><a href="http://www.pinterest.com/edhardyofficial/" target="_blank">Pinterest (http://www.pinterest.com/edhardyofficial/)</a></p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp1_tile_11_bg_image) ): ?>
		<img src="<?php echo $hp1_tile_11_bg_image['url']; ?>" alt="<?php echo $hp1_tile_11_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 1 Tile 12 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 1 Tile 12 (Instagram Tile) : </p>
	<?php endif; ?>

<?php endif; ?>

<?php /////// Homepage Layout 2 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-2.php' ): ?>

	<?php if( $demo_mode_enabled ): ?><hr/><h4>Homepage Layout 2 Variables &amp; Demos</h4><hr/><?php endif; ?>

	<?php // Homepage Layout 2 Tile 1 (Static Image Tile) ?>
	<?php $hp2_tile_1_bg_image = get_field('hp2_tile_1_bg_image'); ?>
	<?php // Homepage Layout 2 Tile 1 (Static Image Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 2 Tile 1 (Static Image Tile) Background Image: $hp2_tile_1_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_1_bg_image) ): ?>
		<img src="<?php echo $hp2_tile_1_bg_image['url']; ?>" alt="<?php echo $hp2_tile_1_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 2 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 2 Tile 2 (Instagram Tile) : </p>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 3 (Static Image Tile) ?>
	<?php $hp2_tile_3_bg_image = get_field('hp2_tile_3_bg_image'); ?>
	<?php // Homepage Layout 2 Tile 3 (Static Image Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 2 Tile 3 (Static Image Tile) Background Image: $hp2_tile_3_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_3_bg_image) ): ?>
		<img src="<?php echo $hp2_tile_3_bg_image['url']; ?>" alt="<?php echo $hp2_tile_3_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 4 (Static Image Tile) ?>
	<?php $hp2_tile_4_bg_image = get_field('hp2_tile_4_bg_image'); ?>
	<?php // Homepage Layout 2 Tile 4 (Static Image Tile) Demo ?>
	<?php  if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 2 Tile 4 (Static Image Tile) Background Image: $hp2_tile_4_bg_image['url'];</p>
	<?php endif; ?>
	<?php  if( $demo_mode_enabled && !empty($hp2_tile_4_bg_image) ): ?>
		<img src="<?php echo $hp2_tile_4_bg_image['url']; ?>" alt="<?php echo $hp2_tile_4_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 5 (Twitter Feed Tile) ?>
	<?php $hp2_tile_5_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php // Homepage Layout 2 Tile 5 (Twitter Feed Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 2 Tile 5 (Twitter Feed Tile) Background Image: $hp2_tile_5_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_5_bg_image) ): ?>
		<img src="<?php echo $hp2_tile_5_bg_image['url']; ?>" alt="<?php echo $hp2_tile_5_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 6 (Lookbook Tile) ?>
	<?php $hp2_tile_6_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php // Homepage Layout 3 Tile 6 (Lookbook Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 3 Tile 6 (Lookbook Tile) Background Image: $hp2_tile_6_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_6_bg_image) ): ?>
		<a href="/lookbook"><img src="<?php echo $hp2_tile_6_bg_image['url']; ?>" alt="<?php echo $hp2_tile_6_bg_image['alt']; ?>" /></a>
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 7 (Follow Us Tile) ?>
	<?php $hp2_tile_7_bg_image = get_field('follow_us_tile_hp2_bg_image'); ?>
	<?php // Homepage Layout 2 Tile 7 (Follow Us Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 2 Tile 7 (Follow Us Tile) Background Image: $hp2_tile_7_bg_image['url'];</p>
		<p><a href="https://www.facebook.com/edhardy" target="_blank">Facebook (https://www.facebook.com/edhardy)</a></p>
		<p><a href="https://twitter.com/edhardy" target="_blank">Twitter (https://twitter.com/edhardy)</a></p>
		<p><a href="http://instagram.com/OfficialEdHardy" target="_blank">Instagram (http://instagram.com/OfficialEdHardy)</a></p>
		<p><a href="http://www.pinterest.com/edhardyofficial/" target="_blank">Pinterest (http://www.pinterest.com/edhardyofficial/)</a></p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_7_bg_image) ): ?>
		<img src="<?php echo $hp2_tile_7_bg_image['url']; ?>" alt="<?php echo $hp2_tile_7_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 2 Tile 8 (Latest News Tile) ?>
	<?php $hp2_tile_8_bg_image = get_field('latest_news_tile_bg_image'); ?>
	<?php // Homepage Layout 2 Tile 8 (Latest News Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 2 Tile 8 (Latest News Tile) Background Image: $hp2_tile_8_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp2_tile_8_bg_image) ): ?>
		<a href="#newsletter"><img src="<?php echo $hp2_tile_8_bg_image['url']; ?>" alt="<?php echo $hp2_tile_8_bg_image['alt']; ?>" /></a>
	<?php endif; ?>

<?php endif; ?>

<?php /////// Homepage Layout 3 ///////////////////////////////////////////////////////////////////////////// ?>

<?php if( $page_template_slug == 'page-homepage-layout-3.php' ): ?>

	<?php if( $demo_mode_enabled ): ?><hr/><h4>Homepage Layout 3 Variables &amp; Demos</h4><hr/><?php endif; ?>

	<?php // Homepage Layout 3 Tile 1 (Static Image Tile) ?>
	<?php $hp3_tile_1_bg_image = get_field('hp3_tile_1_bg_image'); ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 3 Tile 1 (Static Image Tile) Background Image: $hp3_tile_1_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp3_tile_1_bg_image) ): ?>
		<img src="<?php echo $hp3_tile_1_bg_image['url']; ?>" alt="<?php echo $hp3_tile_1_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 2 (Lookbook Tile) ?>
	<?php $hp3_tile_2_bg_image = get_field('lookbook_tile_bg_image'); ?>
	<?php // Homepage Layout 3 Tile 2 (Lookbook Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 3 Tile 2 (Lookbook Tile) Background Image: $hp3_tile_2_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp3_tile_2_bg_image) ): ?>
		<a href="/lookbook"><img src="<?php echo $hp3_tile_2_bg_image['url']; ?>" alt="<?php echo $hp3_tile_2_bg_image['alt']; ?>" /></a>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 3 (Twitter Feed Tile) ?>
	<?php $hp3_tile_3_bg_image = get_field('twitter_feed_tile_bg_image'); ?>
	<?php // Homepage Layout 3 Tile 3 (Twitter Feed Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 3 Tile 3 (Twitter Feed Tile) Background Image: $hp3_tile_3_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp3_tile_3_bg_image) ): ?>
		<img src="<?php echo $hp3_tile_3_bg_image['url']; ?>" alt="<?php echo $hp3_tile_3_bg_image['alt']; ?>" />
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 4 (Latest News Tile) ?>
	<?php $hp3_tile_4_bg_image = get_field('latest_news_tile_bg_image'); ?>
	<?php // Homepage Layout 3 Tile 4 (Latest News Tile) Demo ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 3 Tile 4 (Latest News Tile) Background Image: $hp3_tile_4_bg_image['url'];</p>
	<?php endif; ?>
	<?php if( $demo_mode_enabled && !empty($hp3_tile_4_bg_image) ): ?>
		<a href="#newsletter"><img src="<?php echo $hp3_tile_4_bg_image['url']; ?>" alt="<?php echo $hp3_tile_4_bg_image['alt']; ?>" /></a>
	<?php endif; ?>

	<?php // Homepage Layout 3 Tile 5 (Instagram Tile) ?>
	<?php if( $demo_mode_enabled ): ?>
		<p>Homepage Layout 3 Tile 5 (Instagram Tile) : </p>
	<?php endif; ?>

<?php endif; ?>

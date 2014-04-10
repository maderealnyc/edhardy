<?php
/*
Template Name: Connect Template
*/
?>

<?php get_header(); ?>
<?php $connect_instagram_hashtag = get_field('connect_instagram_hashtag'); ?>

	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<div id="main" class="twelvecol first clearfix" role="main">

				<p><img src="<?php echo get_template_directory_uri(); ?>/library/images/star.png"/>CONNECT<img src="<?php echo get_template_directory_uri(); ?>/library/images/star.png"/></p>
				<p><?php echo '#' . $connect_instagram_hashtag; ?></p>
				<p>Hashtag your Instagram photos <strong><?php echo '#' . $connect_instagram_hashtag; ?></strong> and we’ll add you to our gallery!</p>
				<p>Follow us at <a href="http://instagram.com/OfficialEdHardy" target="_blank">instagram.com/OfficialEdHardy</a>.</p>

				<script type="text/javascript">
				    var connectFeed = new Instafeed({
				        get: 'tagged',
				        tagName: <?php echo "'" . $connect_instagram_hashtag . "'"; ?>,
				        clientId: 'f3b5503d3d114e28991618cc5e64815d',
				        target: 'connect_tiles',
				        resolution: 'low_resolution',
				        template: '<a href="{{link}}" target="_blank"><img src="{{image}}" data-instagram-id="{{id}}" /></a>',
						filter: function(image) {
							if (image.id === '695634921347231249_232954234') {
								return false;
							} else {
								return true;
							}
						}
				    });
				    connectFeed.run();
				</script>
				<div id="connect_tiles"></div>
			</div>

		</div>

	</div>

<?php get_footer(); ?>

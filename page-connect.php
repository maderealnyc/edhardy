<?php
/*
Template Name: Connect Template
*/
?>

<style type="text/css">

	#connect_title_box {
		display: block;
		position: fixed;
		z-index: 999;
		width: 600px;
		height: 300px;
		background-color: rgba(0,0,0,0.78);
		opacity: 0.78;
		filter: alpha(opacity=78);

		margin: 0px auto;
		text-align: center;
	}

	#connect_tiles img {
		width: 300px;
		height: 300px;
	}

	#load_more {
		width: 25%;
		text-align: center;
		margin: 0px auto;
		padding: 20px;
	}

	a#more-images:link {
		background: transparent url('<?php echo get_template_directory_uri(); ?>/library/images/more-images-arrow.png') center bottom no-repeat;
		background-position: 0 0;
		color: #c12f1a;
		text-decoration: none;
		padding-bottom: 16px;
		cursor: pointer;
	}

	a#more-images:hover {
		background: transparent url('<?php echo get_template_directory_uri(); ?>/library/images/more-images-arrow.png') center bottom no-repeat;
		background-position: 0 -16px;
		color: #d85240;
		text-decoration: none;
		padding-bottom: 16px;
		cursor: pointer;
	}

</style>

<?php get_header(); ?>
<?php $connect_instagram_hashtag = get_field('connect_instagram_hashtag'); ?>

	<div id="content">

		<div id="inner-content" class="wrap clearfix">

			<div id="main" class="twelvecol first clearfix" role="main">

				<div id="connect_title_box">
					<p><img src="<?php echo get_template_directory_uri(); ?>/library/images/star.png"/>&nbsp;CONNECT&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/library/images/star.png"/></p>
					<p><?php echo '#' . $connect_instagram_hashtag; ?></p>
					<p>Hashtag your Instagram photos <strong><?php echo '#' . $connect_instagram_hashtag; ?></strong> and we’ll add you to our gallery!</p>
					<p>Follow us at <a href="http://instagram.com/OfficialEdHardy" target="_blank">instagram.com/OfficialEdHardy</a>.</p>
				</div>

				<div id="connect_tiles"></div>

				<div id="load_more">
					
					<a id="more-images">MORE IMAGES</a>

					<script type="text/javascript">

						var moreImagesButton = document.getElementById('more-images');
						
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
							},
							after: function() {
								if (!this.hasNext()) {
							 		moreImagesButton.setAttribute('disabled', 'disabled');
								}
							}
						});

						moreImagesButton.addEventListener('click', function() {
						  connectFeed.next();
						});

						connectFeed.run();

					</script>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>

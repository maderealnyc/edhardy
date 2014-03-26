<?php /////// Footer Video (All 3 Homepage layouts) ///////////////////////////////////////////////////////////// ?>

<?php
	$footer_video_poster_image = get_field("footer_video_poster_image");
	$footer_video_youtube_url = get_field("footer_video_youtube_url");
?>

<?php if( !empty($footer_video_youtube_url) ): ?>

	<div class="twelvecol grid clearfix" id="footer_video">

			<video width="1200" height="680" style="width: 100%; height: 100%;" id="player1" preload="none" <?php if ( !wp_is_mobile() ) : echo 'poster="' . $footer_video_poster_image["url"] . '"'; endif; ?>>
			    <source type="video/youtube" src="<?php echo $footer_video_youtube_url; ?>" />
			</video>

			<script>
			jQuery(document).ready(function($) {
				// declare object for video
				var player = new MediaElementPlayer("#player1", {
					startVolume: 0.5, // initial volume when the player starts
					features: ["playpause","progress","tracks","volume"] //control bar features
				});
			});
			</script>

	</div>

<?php endif; ?>
<?php /////// Footer Video (All 3 Homepage layouts) ///////////////////////////////////////////////////////////// ?>

<?php
	$footer_video_poster_image = get_field('footer_video_poster_image');
	$footer_video_youtube_url = get_field('footer_video_youtube_url');
?>

<?php if( !empty($footer_video_youtube_url) ): ?>

	<div class="twelvecol grid clearfix" id="footer_video">

		<video width="1200" height="680" id="player1" poster="<?php echo $footer_video_poster_image['url']; ?>">
		    <source type="video/youtube" src="<?php echo $footer_video_youtube_url; ?>" />
		</video>
		
		<script>
		jQuery('video').mediaelementplayer({});
		</script>

	</div>

<?php endif; ?>


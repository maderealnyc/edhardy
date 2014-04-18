<div id="instagram-popup" class="mfp-hide">
	<header class="clearfix">
		<h3>INSTAGRAM</h3>

		<a href="http://instagram.com/OfficialEdHardy" title="view on instagram" target="_blank">view on instagram</a>
	</header>
	<?php echo do_shortcode('[new_royalslider id="6"]'); ?>
</div>

<script>
if (document.documentElement.clientWidth > 768) {
	jQuery('.instafeed-modal').magnificPopup({
		type:'inline',
		midClick: true,
		mainClass: 'mfp-fade'
	});
}

jQuery(document).ready(function () {

    jQuery('.instafeed-modal').click(function () {

        var alt = jQuery(this).attr('alt');

        switch (alt) {
            case 'ig-tile-2':
                jQuery('.royalSlider').royalSlider('goTo', 1);
                break;
            case 'ig-tile-3':
                jQuery('.royalSlider').royalSlider('goTo', 2);
                break;
            case 'ig-tile-4':
                jQuery('.royalSlider').royalSlider('goTo', 3);
                break;
            default:
                //do nothing
                break;
        }
    });

});
 </script>
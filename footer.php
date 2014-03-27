			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<div id="newsletter-popup" class="mfp-hide">
			<?php echo do_shortcode('[contact-form-7 id="101" title="Newsletter"]'); ?>
		</div>

		<script>
			jQuery('.nav-newsletter a').magnificPopup({
				type:'inline',
				midClick: true
			});
		</script>
	</body>

</html>

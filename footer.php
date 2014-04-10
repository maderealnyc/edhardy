			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
						<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> EDHARDYSHOP.COM</p>

				</div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<div id="newsletter-popup" class="mfp-hide">
			<?php echo do_shortcode('[contact-form-7 id="101" title="Newsletter"]'); ?>
		</div>

		<script>
		jQuery('.nav-newsletter a, a.newsletter-tile').magnificPopup({
			type:'inline',
			midClick: true,
			mainClass: 'mfp-fade',
			removalDelay: 300
		});
		</script>
	</body>
</html>
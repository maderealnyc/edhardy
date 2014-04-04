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
			midClick: true
		});
		</script>
	</body>
<style>
.blog #main { max-width: 675px !important; margin: 30px 0 30px 6.25% !important; padding: 0 !important; width: 56.25% !important; }
.blog article h1 { margin: 0; }
.blog article h1 a { color: #000; text-transform: uppercase; }
.blog article h1 a:hover { text-decoration: none; }
.blog article p { color: #646363; font-family: arial; font-size: 15px; margin-top: 0; }
.blog article { border-bottom: 1px dashed #C2C2C2; margin-bottom: 30px; }
.blog article a { color: #c12f1a; }
.blog article a:hover { color: #c12f1a; text-decoration: underline; }
.blog article a.excerpt-read-more { font-size: 10px; text-decoration: none; text-transform: capitalize; }
.blog article a.excerpt-read-more:hover { text-decoration: underline; }
.blog .entry-content img { margin-bottom: 15px; }

.pagination ul li a, .pagination ul li span { background: transparent url('/wp-content/themes/edhardy/library/images/blog/sprite-pagination.png') no-repeat; height: 30px; margin-right: 5px; min-width: inherit; width: 29px; }

.pagination ul li a:hover, .pagination ul li span.current { background-position: -30px 0; color: #c12f1a; }

.pagination ul li a.prev, .pagination ul li a.next { height: 11px; margin-top: 10px; padding: 0; text-indent: -9999px; width: 11px; }
.pagination ul li a.prev { background-position: 0 -31px; }
.pagination ul li a.next { background-position: -12px -31px; }
.pagination ul li a.prev:hover { background-position: 0 -42px; }
.pagination ul li a.next:hover { background-position: -12px -42px; }

.sidebar { margin-right: 6.25%; max-width: 300px; width: 25%; }
.sidebar #searchform .screen-reader-text { display: none; }
.sidebar #searchform input[type="text"] { background-color: #000; border: none; color: #a2a2a2; font-family: "Rockwell W01", serif; outline: none; padding: 10px; width: 85%; }
.sidebar ::-webkit-input-placeholder {
   color: #a2a2a2;
}
.sidebar :-moz-placeholder { /* Firefox 18- */
   color: #a2a2a2;  
}
.sidebar ::-moz-placeholder {  /* Firefox 19+ */
   color: #a2a2a2;  
}
.sidebar :-ms-input-placeholder {  
   color: #a2a2a2;  
}
.sidebar #searchform #searchsubmit { background: #000 url('/wp-content/themes/edhardy/library/images/blog/icon-search.png') no-repeat 10px center; border: none; margin: 0 0 0 -4px; min-width: 26px; outline: none; padding: 10px; text-indent: -9999px;  width: 15%; }

.widgettitle { border-bottom: 1px dashed #C2C2C2; color: #000; font-family: "Rockwell W01", serif; font-size: 1.75em; line-height: 1.4em; text-transform: uppercase; }
.widget ul { list-style-image:url('/wp-content/themes/edhardy/library/images/blog/icon-star.png'); margin-left: 15px; }
.widget ul li { color: #7a7a7a; }
.widget ul li a { color: #7a7a7a; font-family: "Rockwell W01", serif; font-size: 15px; text-decoration: none; }
.widget ul li a:hover { color: #c12f1a; }

@media screen and (max-width: 768px) {
	.blog #main { margin: 30px 10%; padding: 0 !important; width: 80% !important; }
	.sidebar { display: none; }


}
</style>
</html>

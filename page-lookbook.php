<?php
/*
Template Name: Lookbook
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<!--<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header>-->

								<section class="entry-content clearfix" itemprop="articleBody">
									<p><button id="trigger-overlay" type="button">Open Overlay</button></p>

									<?php the_content(); ?>
								</section>

								<footer class="article-footer">
									<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>

								</footer>
							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<?php //get_sidebar(); ?>

				</div>

			</div>

<div class="overlay overlay-scale">

	<div class="overlay-content">
		<button type="button" class="overlay-close">Close</button>


		<img style="text-align: center; display: table-cell; height: 511px; margin: 120px auto 0; width: 940px;" src="/wp-content/themes/edhardy/royalslider/lookbook/placeholder.png" />
	</div>
</div>
<script src="/wp-content/themes/edhardy/library/js/libs/classie.js"></script>
<script src="/wp-content/themes/edhardy/library/js/libs/demo1.js"></script>
<script>


</script>
<?php get_footer(); ?>

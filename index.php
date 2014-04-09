<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="eightcol first clearfix" role="main">

			<?php if (is_category()) { ?>
				<h1 class="archive-title h2"><span><?php _e( 'Category:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?></h1>

			<?php } elseif (is_tag()) { ?>
				<h1 class="archive-title h2"><span><?php _e( 'Tag:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?></h1>

			<?php } elseif (is_author()) {
				global $post;
				$author_id = $post->post_author;
			?>
				<h1 class="archive-title h2"><span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?></h1>

			<?php } elseif (is_day()) { ?>
				<h1 class="archive-title h2"><span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?></h1>

			<?php } elseif (is_month()) { ?>
				<h1 class="archive-title h2"><span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?></h1>

			<?php } elseif (is_year()) { ?>
				<h1 class="archive-title h2"><span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?></h1>

			<?php } elseif (is_search()) { ?>
				<h1 class="archive-title h2"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

			<?php } ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

					<header class="article-header">

						<h2 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

					</header>

					<section class="entry-content clearfix">

						<?php if ( has_post_thumbnail() ) : ?>
							<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(full); ?></a>
						<?php endif; ?> 

						<?php echo get_the_excerpt(); ?> <a class="read-more" href="<?php the_permalink() ?>">Read More...</a>

					</section>

					<?php // comments_template(); // uncomment if you want to use them ?>

				</article>

			<?php endwhile; ?>

			<?php if ( function_exists( 'bones_page_navi' ) ) { ?>

				<?php bones_page_navi(); ?>

				<?php } else { ?>

						<nav class="wp-prev-next">

								<ul class="clearfix">

									<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>

									<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>

								</ul>

						</nav>

				<?php } ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry clearfix">

					<header class="article-header">

						<h2><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h2>

					</header>

					<section class="entry-content">

						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>

					</section>
				</article>

			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>

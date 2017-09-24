<?php

/**
 * Template Name: Event Page
 */
get_header(); ?>
	<section class="row" id="event_page">
	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content/content', 'page-event' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</section><!-- /row -->
<?php
// get_sidebar();
get_footer();


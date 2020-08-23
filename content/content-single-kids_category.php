<section class="container">
	<section class="row">
		<h3><?php the_title(); ?></h3>
		<?php

		$posts = get_posts([
			'posts_per_page' => -1,
			'post_type' => 'kidz_content',
			'meta_query' => [
				[
					'key' => 'kids_category', // name of custom field
					'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
					'compare' => 'LIKE',
				],
			],
		]);

		if ($posts) : ?>
			<section class="row">

				<?php foreach ($posts as $post) : // variable must be called $post (IMPORTANT)
				?>
					<?php setup_postdata($post); ?>
					<section class="col-md-4">

						<section class="post-wrapper card">
							<h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h3>
							<section class="post-content">
							</section>
						</section>
					</section>
				<?php endforeach;
				wp_reset_postdata(); ?>
			</section>
		<?php endif; ?>
	</section>
</section>
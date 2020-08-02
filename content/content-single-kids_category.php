<section class="container">
	<section class="row">

		<?php

$posts = get_posts([
	'posts_per_page' => -1,
	'post_type' => 'product',
	'meta_query' => [
		[
			'key' => 'subcategory_name', // name of custom field
			'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
			'compare' => 'LIKE',
		],
	],
]);

if ($posts): ?>

			<?php foreach ($posts as $post): // variable must be called $post (IMPORTANT)
	?>
						<?php setup_postdata($post);?>

			        <section class="post-wrapper">
			                <h3><a href="<?php the_permalink()?>"> <?php the_title();?></a></h3>
			                <section class="post-content">
			                        <?php the_content();?>
			                </section>
			        </section>
			    			<?php endforeach;
wp_reset_postdata();?>
		<?php endif;?>
</section>
</section>

<?php get_header(); ?>

<div class="content">
	<?php if(have_posts()): ?>
		<?php get_template_part('content/content','single'); ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
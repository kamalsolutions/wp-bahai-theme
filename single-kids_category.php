<?php get_header();?>

    <section class="container">

            <?php if (have_posts()): ?>
            	<?php get_template_part('content/content', 'single-kid');?>
            <?php endif?>

    </section>

<?php get_footer();?>

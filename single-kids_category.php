<?php get_header(); ?>

<section class="container">

    <?php if (have_posts()) : ?>
        <?php get_template_part('content/content-single-kids_category'); ?>
    <?php endif ?>

</section>

<?php get_footer(); ?>
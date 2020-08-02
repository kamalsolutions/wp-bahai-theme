<?php
/*
 *Template Name: Page Kid
 */
get_header();?>
            <?php if (have_posts()): ?>
                <?php get_template_part('content/content', 'page-kid');?>
            <?php endif?>
<?php get_footer();?>
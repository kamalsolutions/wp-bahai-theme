<?php 
 /*
*Template Name: Gallery
 */
get_header(); ?>

            <div class="container"><?php if(have_posts()): ?>
                <?php get_template_part('templates/content','page-gallery'); ?>
            <?php endif ?>
            </div>



        <section class="container">
            <ul class="pagination center-text">

                    <li><?php previous_posts_link('Previous Page'); ?></li>

                    <li><?php next_posts_link('Next Page'); ?></li>
                </ul>
        </section>

<?php get_footer(); ?>
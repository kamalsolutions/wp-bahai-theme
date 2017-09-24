<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php while(have_posts()):the_post(); ?>
            <section class="small-nav">
            <span class="xs-small"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Home </a> / <?php the_title() ?> <?php edit_post_link('/ edit','<small class="edit">','</small>') ?></span>
        </section>
        <section class="post-wrapper" >
                <h3><a href="<?php the_permalink()?>"> <?php the_title(); ?></a></h3>
                <section class="post-content">
                        <?php the_field('description')?>
                </section>
        </section>
    <?php endwhile;  wp_reset_postdata(); ?>
</article>

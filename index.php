<?php get_header(); ?>
<!-- latest post preview -->
<section id="index">
<section  class="jumbotron col-md-12">
    <section class="col-md-12">
    <?php  
    if(has_post_thumbnail()){
        $args = array( 'numberposts' => 1 );
        $lastposts = get_posts( $args );
        foreach($lastposts as $post) : setup_postdata($post); 
    ?>

    <section class="col-sm-4 col-md-6">
        <section class="img-responsive">
        <?php //the_post_thumbnail('featured-image');
        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
        echo '<img src="' . $image_src[0]  . '" width="100%"  />';
        ?>
        </section>
    </section>

    <section class="col-sm-4 col-md-6">
        <h2 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    </section>
            <?php endforeach;  ?>
            <?php   }else{
            $args = array( 'numberposts' => 1 );
            $lastposts = get_posts( $args );
            foreach($lastposts as $post) : setup_postdata($post); ?>
            <section class="col-sm-4 col-md-6">
        <section class="img-responsive">
        <?php //the_post_thumbnail('featured-image');
        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
        echo '<img src="' . $image_src[0]  . '" width="100%"  />';
        ?>
        </section>
    </section>

    <section class="col-sm-4 col-md-6">
        <h2 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    </section>
<?php endforeach;  ?>
<?php }; ?>
    </section>
</section>

<!-- blog posts
======================= -->
    <section class="container">
        <section class="blog-post-preview">
        <?php get_template_part('content/content') ?>
        </section>
    </section>
</section>
<!-- /end blog posts -->

<!-- pagination
======================= -->
<section class="row">
    <section class="container">
    <ul class="pagination center-text">
        <li><?php previous_posts_link('Previous Page'); ?></li>
        <li><?php next_posts_link('Next Page'); ?></li>
    </ul>
    </section>
</section>
<?php get_footer(); ?> 
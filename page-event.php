<?php 
 /*
*Template Name: Events
 */
get_header(); ?>
<!-- <div class="content">
    <?php #if(have_posts()): ?>
        <?php# get_template_part('content/content','page'); ?>
    <?php #endif; ?>
</div> -->

    <section class="row">

<section class="container">
    <div class="jumbotron col-md-12" >
    <?php   if(has_post_thumbnail()){
  $args = array( 'numberposts' => 1,'post_type'=>'event'  );
  $lastposts = get_posts( $args );
  foreach($lastposts as $post) : setup_postdata($post); ?>
            <div class="col-sm-4 col-md-6">

                <div class="img-responsive"><?php the_post_thumbnail('featured-image'); ?></div>
            </div>
                            <div class="col-sm-4 col-md-6 lead "style="text-shadow: black 0.1em 0.1em 0.2em">
    <h4 class="post-title page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php the_excerpt(); ?>
                                </div>
  <?php endforeach; ?>


    <?php   }else{

          $args = array( 'numberposts' => 1,'post_type'=>'event' );
          $lastposts = get_posts( $args );
          foreach($lastposts as $post) : setup_postdata($post); ?>
            <h4 class="post-title page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
          <?php endforeach; ?>
<?php }; ?>
            </div>


</section>
        
            <div class="container"><?php if(have_posts()): ?>
                <?php get_template_part('templates/content','page-event'); ?>
            <?php endif ?>
            </div>
    </section>
<?php get_footer(); ?>
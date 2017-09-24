


<section class="blog-wrapper" >

<section class="latest container">
    <section class="col-md-12 latest-title">
          <div class="col-md-4"></div>
          <div class="col-md-4">
              <h2 class="text-center">Galleries</h2>
          </div>
            <div class="col-md-4"></div>
    </section>

    <section>
      
    <?php 

$args= array(
     'post_type' => 'envira',
     'post_per_page'=> $num_posts
);

$query = new wp_query( $args );
?>


<?php if ($query -> have_posts()) : while( $query->have_posts()) : $query -> the_post(); ?>

             <div class="col-lg-4  col-sm-6">
        <div class="thumbnail">
            <h4 class="post-title page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>


                  </div>

      </div>

<?php endwhile; endif; wp_reset_postdata(); ?>
   
    </section>
      
</section>

</section>

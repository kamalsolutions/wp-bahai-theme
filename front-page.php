<?php get_header(); ?>


<section class="row">
    <section class="container">
    <?php if ( function_exists('insert_bknewsticker') ) { insert_bknewsticker(); } ?> 
    </section>
</section>
<!-- HOME BANNER
========================== -->
<section id="front-page">
<section class="hero jumbotron row">
   
    <section>
     <!-- video
    ================= -->
            <section class="hero-video col-md-6 col-xs-12" style="padding-left:3% !important">
        <iframe width="100%"  height="315" src="https://player.vimeo.com/video/191397482?dnt=1"></iframe>
            </section>
            <!-- video summary -->
            <section class="hero-video-summary col-md-6 col-xs-12">
            <p > This is a glimpse of what happened during the Accra-Tema Junior Youth festival held in May 2015. Do you have a Junior Youth group? Share your experience with us at <a href="mailto:info@bahaiyouthgh.info">info@bahaiyouthgh.info</a>. <br>You can find more about the JYSEP on <a href="http://www.ruhi.org/materials/list.php#jy"><pan>Ruhi Institute</span></a>. 

 

You can also find out more about the Baha'i Faith on <a href="www.bahai.org">www.bahai.org</a>.</p>
            </section>

    </section>
</section>
<!-- /end -->

<!-- Latest on our blog -->
<section class="row">
    <!-- latest title -->
    <section class="col-md-12">


        <section class="col-md-12 section-title"><h3>Latest On Our Blog</h3></section>

 
    </section>
    <section class="container">
 
            <?php
            $args = array( 'numberposts' => 3 );
            $lastposts = get_posts( $args );
            foreach($lastposts as $post) : setup_postdata($post); ?>
                <section class="col-md-4 ">
                 <section class=" latest-post-content-wrapper">
                  <section class="latest-post-content-title">
                     <h4 class="post-title page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  </section>
                 

                    <section class="single-post-content-excerpt">
                    <?php the_excerpt(); ?>
                    </section>
                     </section>
                </section>
            <?php endforeach; ?>
    </section>
    </section>
</section>
<?php get_footer(); ?>

<section class="row">
    <?php while(have_posts()):the_post(); ?>

        <section class=" col-md-4 col-sm-6 col-xs-12">
            <section class=" single-post-preview">
            <!-- preview image section
            ============== -->
    
            <!-- end/ -->
            <!-- preview section title
            ============== -->
               <section class="single-post-preview-title">
                    <h3><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                    <ul class="single-post-preview-meta list-inline">
                       
                        <li class="small"><span class="fa fa-calendar"></span>&nbsp;<?php the_time('F j, Y') ?></li>
                        <li class="small"><span class="fa fa-user"></span>&nbsp; <?php the_author(); ?></li>
                    </ul>
                </section>
                <!-- /end -->

                <!-- preview section excerpt
            ============== -->
             
        </section>
    </section> 
    <?php endwhile; ?>   
</section>
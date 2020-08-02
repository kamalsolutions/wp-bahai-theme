


<section class="blog-wrapper" >
        <section class="row jumbotron">
          <h3 class="text-center text-capitalize">the kids playground</h3>
        </section><!-- jumbotron end -->

        <section class="row">
          <p class="text-center">

          </p>
        </section>
        <!--==== /row  ====-->
      <div class="container">
            <?php

$posts = get_posts(array(
	'numberposts' => -1,
	'post_type' => 'kids_category',

));

if ($posts): ?>

          <section class="row kids__categories">



        <?php foreach ($posts as $post):
	setup_postdata($post);
	?>

									           <div class="col-md-3 col-sm-12">
									              <img src="" alt="" class="img-thumbnail">
									              <h3><?php the_title();?></h3>
									              <a href="<?php the_permalink();?>" class="">more --></a>
									           </div>
									           <!-- /  -->
									  <?php endforeach;?>
    </section>
    <?php endif;
wp_reset_postdata();?>
        <!--===== / row .kids__categories  ==========-->
      </div>


</section>

<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="page">
        <?php $args =array(
        'post_type'=>'event');
$query= new WP_QUERY($args);
         ?>
    <?php if($query->have_posts()):while($query->have_posts()) : $query->the_post();?>
            
        <section class="blog-wrapper">
          <div class="col-lg-4  col-sm-6">
                  <div class="thumbnail" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <?php if(has_post_thumbnail()){
                                            the_post_thumbnail('thumbnail');
                                        }else{ ?>
                                            <img src="..." alt="" class="img-responsive img-thumbnail" />

                                            <?php } ?>

                <h3 class="post-title"><a href="<?php the_permalink()?>"> <?php the_title(); ?></a></h3>
                <!-- edit link --><h6><?php edit_post_link('edit','<small class="edit">','</small>') ?> <span><?php echo get_the_date(); ?></span></h6>

                <section class="post-content">
                        <?php the_excerpt(); ?>

                        <br>


                </section>


                  </div>
            </div>
        </section>
        <?php   endwhile; endif; wp_reset_postdata(); ?>
</article>

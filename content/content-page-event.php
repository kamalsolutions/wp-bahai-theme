<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title text-center">Our ', '</h2>' ); ?>
	</header><!-- .entry-header -->
    	<section class="container">	
		<section class="col-md-12">
		<?php
        $numb_post=3;
        $args=array(
            'post_type'=>'event',
            'post_per_page'=>$numb_post
        );
			$query= new WP_Query($args);
			?>
<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
        
		<section class="col-md-4 ">
                <section class=" latest_post_content_wrapper">
                 <section class="thumbnail">

                 <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <?php else: ?>
                    <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/events.jpg" />
                 <?php endif; ?>
                  <section class="latest_post_content_title ">
                     <h4 class="post_title page_header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                     <h6> 
                     <ul class="list-inline"> 
                        <li> <span class="fa fa-calendar"></span> <?php the_field('date'); ?></li>
                        <li></li>
                     </ul>
                     </h6>
                  </section>
                 

                    <section class="single_post_content_excerpt">
                    <?php echo strip_tags(the_excerpt()); ?>
                    </section>
                     </section>
                     </section>
                </section>


                
<?php endwhile;endif; wp_reset_postdata(); ?>


			</section>
		</section>
	</section>
</article>


<?php


?>
<section class="row" id="single_event_page">
	<section class="container">

	<section class="col-md-8 col-md-offset-2">
		       <section class="content-mini-nav breadcrumb">
                <span class="xs-small"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Home </a> /<a href="<?php echo esc_url( home_url( '/events' ) ); ?>"> Events </a> / <?php the_title() ?> <?php edit_post_link('/ edit','<small class="edit">','</small>') ?></span>
            </section>
	</section>

<section class="col-md-8 col-md-offset-2">
<section class="thumbnail">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h3><?php the_title();?></h3>
		<h5> <span class="fa fa-calendar"></span>&nbsp;<?php the_field('date')?></h5>
	</header><!-- .entry-header -->

	<section class="content">
		<?php the_content(); ?>
	</section>	
	
	<footer class="entry-footer">
		<?php //_s_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
</section><!-- /thumbnail -->

</section><!-- /md-12 -->
</section><!-- /container -->
</section><!-- /row -->
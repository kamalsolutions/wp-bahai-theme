
<section class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
  <?php while(have_posts()):the_post(); ?>
    <section class="container">
        <section class="single-page-content col-md-8">
<!-- content mini nav
=========== ======================-->
            <section class="content-mini-nav">
                <span class="xs-small"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Home </a> / <?php the_title() ?> <?php edit_post_link('/ edit','<small class="edit">','</small>') ?></span>
            </section>
            <!-- /end -->
<!-- single page content
=========== ======================-->
            <section class="single-page-content-wrapper">
                <section class="single-page-content-title">
                    <h3><a href="<?php the_permalink()?>"> <?php the_title(); ?></a></h3>
                </section>

                <section class="single-page-content-content">
                    <?php the_content(); ?>
                </section>
            </section>
            <!-- end/ -->
            </section>

            <section class="col-md-4"></section>
        </section>
    </section>
<?php endwhile; ?>

<section class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php while(have_posts()):the_post(); ?>
    <section class="container">
        <section class="single-post-content col-md-8">
<!-- content mini nav
=========== ======================-->
            <section class="content-mini-nav">
                <span class="xs-small"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Home </a> / <?php the_title() ?> <?php edit_post_link('/ edit','<small class="edit">','</small>') ?></span>
            </section>
            <!-- /end content-mini-nav-->
<!-- single page content
=========== ======================-->
            <section class="single-post-content-wrapper">
                <section class="single-post-content-title">
                    <h3><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                    <ul class="single-post-content-meta list-inline">
                        <li class="small"><span class="fa fa-tag"></span>&nbsp;<?php the_category(','); ?></li>
                        <li class="small"><span class="fa fa-calendar"></span>&nbsp;<?php the_time('F j, Y') ?></li>
                        <li class="small"> <?php the_author(); ?></li>
                    </ul>
                </section>

                <section class="single-post-content-content">
                    <?php  the_content(); ?>
                </section>
            </section>
            <!-- end/ single-post-content-wrapper -->
            </section>
            <!-- end single-post-content / -->

<!-- sidebar
========================= -->
        <section class="single-post-sidebar-content">
            
        </section>
        <!-- /end single-post-sidebar-content -->
        </section>
    </section>
<?php endwhile; ?>




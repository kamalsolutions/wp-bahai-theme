<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<!-- #wrapper -->
<div id="wrapper">

<section id="navigation" class="navbar">
          <div class="navbar-header ">
              <div class="navbar-brand" style="margin-top: -10px"><span><img src="<?php bloginfo('template_directory');?>/assets/img/logo-2.png"  title="bahai youth logo" alt="logo" class="logo img-responsive" /></div>
               <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">

                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
           </div>
          				<div class="collapse navbar-collapse  col-md-12 text-center">
                      <?php wp_nav_menu( array( 'theme_location' => 'primary',  'container'=>false,
                        'menu'=>'primary-menu',
                        'menu_class'=>'nav navbar-nav ', 'walker'=> new  wp_bootstrap_navwalker ) ); ?>
                     

                    </div>
</section>
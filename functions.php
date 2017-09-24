<?php 
if(! isset($content_width))
    $content_width=654; /* pixels */;

function theme_support(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    // add_image_size('featured-image',500,315,false);

} add_action('after_setup_theme','theme_support');


function theme_styles(){
    //css
    wp_enqueue_style('bootstraps-style',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstraps-style',get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_script('bootstraps-js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),'',true);
    wp_enqueue_style('main-style',get_template_directory_uri().'/style.css');

    } add_action('wp_enqueue_scripts','theme_styles');

// This theme uses wp_nav_menu() in two locations.
register_nav_menu('primary','primary');

  //adding walker class to functions for responsive
  require_once dirname(__File__).'/wp_bootstrap_navwalker.php';

//hook plugins into theme
 // include_once dirname( __FILE__ ).'/wp-bahai-plugins.php';

//hook plugins into theme

function theme_widgets_init(){

register_sidebar( array(
'name' => __( '1st Widget', 'bahai' ),
'id' => 'widget-1',
'before_widget'=>'<div class="main-widgets">',
'after_widget'=>'</div>',

'before_title'=>'<h1 class="widget-title">',
'after_title'=>'</h1>'
) );

register_sidebar( array(
'name' => __( '2nd  Widget', 'bahai' ),
'id' => 'widget-2',
'before_widget'=>'<div class="main-widgets">',
'after_widget'=>'</div>',

'before_title'=>'<h1 class="widget-title">',
'after_title'=>'</h1>'
) );

register_sidebar( array(
'name' => __( '3rd  Widget', 'bahai' ),
'id' => 'widget-3',
'before_widget'=>'<div class="main-widgets">',
'after_widget'=>'</div>',

'before_title'=>'<h1 class="widget-title">',
'after_title'=>'</h1>'
) );



register_sidebar( array(
'name' => __( 'Footer  Widget', 'bahai' ),
'id' => 'widget-footer',
'before_widget'=>'<div class="main-widgets">',
'after_widget'=>'</div>',

'before_title'=>'<h1 class="widget-title">',
'after_title'=>'</h1>'
) );



}

add_action( 'widgets_init', 'theme_widgets_init' );

function bahai_theme_customizer($wp_customize){
$wp_customize->add_section('footer_settings_section',array(
'title'=>'Footer Settings'
));

$wp_customize->add_setting('footer_setting',array(
'default'=> 'Add some text',
'sanitize_callback'=>'bahai_theme_sanitize_text'
));

$wp_customize->add_control('footer_setting',array(
'label'=>"Footer text:",
'section'=>'footer_settings_section',
'type'=>'textarea'
));

function bahai_theme_sanitize_text($input){

return wp_kses_post(
force_balance_tags($input,array('strong'=>array(), 'a'=>array('href'))));

}

}add_action('customize_register','bahai_theme_customizer');

function new_excerpt_length($length){
return 40;
}
add_filter( 'excerpt_length', 'new_excerpt_length',999);

function new_excerpt_more( $more ) {
return '<p class="read-more-excerpt" ><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __(' <span class="fa fa-arrow-circle-right"></span> Read More', 'your-text-domain') . '</a></p>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
 ?>
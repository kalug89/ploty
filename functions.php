




<?php





/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer left sidebar',
		'id'            => 'home_left',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

  register_sidebar( array(
    'name'          => 'Footer center sidebar',
    'id'            => 'home_center',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer right sidebar',
    'id'            => 'home_right',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>









<?php
show_admin_bar( true );

function my_function_admin_bar(){
	return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


add_theme_support('post-thumbnails');

function addScript() {

wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/scrolling-nav.css');
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() .
  '/js/bootstrap.min.js', array('jquery'), null. true);
wp_enqueue_script('jquery_easing_min', get_stylesheet_directory_uri() .
  '/js/jquery.easing.min.js', array('jquery'), null. true);
wp_enqueue_script('scrolling-nav', get_stylesheet_directory_uri() .
  '/js/scrolling-nav.js', array('jquery'), null. true);
}
add_action('wp_enqueue_scripts', 'addScript');


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );









?>

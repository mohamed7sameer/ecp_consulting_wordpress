<?php



include 'inc/bootstrap.php';
include 'inc/widget_website.php';
include 'inc/advanced_custom_field.php';
include 'inc/post_type.php';


/*
** function to add all menus
** register_nav_menus( array $locations = array() )
*/
register_nav_menus(array(
    'main-menu' => 'Main Menu'
));

// functions.php
/*
** helper function to support Featured Image
** added by @mohamed samir
** add_theme_support( string $feature, mixed $args )
*/
add_theme_support('post-thumbnails');



/*
** function to add  menus
** added by @mohamed samir
** wp_nav_menu( array $args = array() )
*/
function get_menu(){
    $args = array(
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
      );

    wp_nav_menu($args);
}





/*
** function to add my custom style
** added by @mohamed samir
** wp_enqueue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' )
** get_template_directory_uri()
** add_action( string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1 )
*/

function add_styles(){
    wp_enqueue_style('bootstrap5',get_template_directory_uri() . '/assets/css/libs/bootstrap.min.css');
    wp_enqueue_style('fontawesome',get_template_directory_uri() . '/assets/css/libs/all.min.css');
    wp_enqueue_style('slick',get_template_directory_uri() . '/assets/css/libs/slick.css');
    wp_enqueue_style('style-theme',get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts','add_styles');






/*
** function to add my custom style
** added by @mohamed samir
** wp_enqueue_script( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
*/
/*
<script src="/js/libs/bootstrap.bundle.min.js"> </script>
<script src="/js/libs/jquery-3.6.0.min.js"> </script>
<script src="/js/libs/slick.min.js"> </script>
<script src="/js/libs/jquery.hotspot.js"></script>
<script src="/js/libs/jquery.scrollUp.min.js">   </script>
<script src="/js/scripts.js"></script>
*/

function add_script(){
    wp_enqueue_script('bootstrap-bundle',get_template_directory_uri() . '/assets/js/libs/bootstrap.bundle.min.js',array(),false,true);
    wp_enqueue_script('jquery-theme',get_template_directory_uri() . '/assets/js/libs/jquery-3.6.0.min.js',array(),false,true);
    wp_enqueue_script('slick',get_template_directory_uri() . '/assets/js/libs/slick.min.js',array(),false,true);
    wp_enqueue_script('hotspot',get_template_directory_uri() . '/assets/js/libs/jquery.hotspot.js',array(),false,true);
    wp_enqueue_script('scrollUp',get_template_directory_uri() . '/assets/js/libs/jquery.scrollUp.min.js',array(),false,true);
    wp_enqueue_script('iso-top',get_template_directory_uri() . '/assets/js/libs/isotope.pkgd.min.js',array(),false,true);
    wp_enqueue_script('script-theme',get_template_directory_uri() . '/assets/js/scripts.js',array(),false,true);

}
add_action('wp_enqueue_scripts','add_script');


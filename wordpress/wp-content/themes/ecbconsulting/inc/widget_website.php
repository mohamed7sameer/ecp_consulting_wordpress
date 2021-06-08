<?php


function add_widget_to_theme(){
    register_sidebar(array(
        'name'          => 'Footer Column #1',
        'id'            => 'footer-col-1',
        'class'            => 'footer-col-1',
        'description'   => 'Data Footer Column #1',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="co-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'Footer Column #2',
        'id'            => 'footer-col-2',
        'class'            => 'footer-col-2',
        'description'   => 'Data Footer Column #2',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="co-title">',
        'after_title'   => '</h3>',
    ));

}

add_action('widgets_init','add_widget_to_theme')

?>
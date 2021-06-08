<?php


function creat_post_type(){
$labels = array(
    'name' => 'Projects',
    'menu_name' => 'Projects',
    'add_new' => 'Add New Project',
    'all_items' => 'All Projects',
    'search_items' => 'Search Projects',
    'not_found' => 'Not Found Projects',
    'not_found_in_trash' => 'Not Found Project In Trash'

);
register_post_type('project',array(
    'public' => true,
    'labels' => $labels,
    'menu_position' => 2,
    'menu_icon' => 'dashicons-smiley',
    'supports' => array(
        'title','thumbnail', 'revisions'
    ),
    'rewrite' => array(
        'slug' => 'project'
    )
));
}

add_action('init','creat_post_type');



function create_taxonomy(){

    $labels = array(
        'name' => 'Services Project',
        'menu_name' => 'Services Project',
        'add_new_item' => 'Add New Services Project',
        'edit_item' => 'Edit Services Project',
        'search_items' => 'Search Services Project',
        'not_found' => 'Not Found Services Project',
        'not_found_in_trash' => 'Not Found Services Project In Trash'

    );

    register_taxonomy('services-project','project',array(
        'hierarchical' => true,
        'labels' => $labels
    ));


    $labels = array(
        'name' => 'What We Do Project',
        'menu_name' => 'What We Do Project',
        'add_new_item' => 'Add New What We Do Project',
        'edit_item' => 'Edit What We Do Project',
        'search_items' => 'Search What We Do Project',
        'not_found' => 'Not Found What We Do Project',
        'not_found_in_trash' => 'Not Found What We Do Project In Trash'

    );

    register_taxonomy('what-we-do-project','project',array(
        'hierarchical' => true,
        'labels' => $labels
    ));

}

add_action('init','create_taxonomy');





?>
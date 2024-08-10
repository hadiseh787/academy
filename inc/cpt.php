<?php

/*------custom post type--------*/
function trent_register_post_type($singular, $plural, $supports, $label = '')
{
    $labels = array(
        'name' => $plural,
        'singular_name' => $singular,
        'add_name' => 'Add New',
        'add_new_item' => 'Add New ' . $singular,
        'edit' => 'Edit',
        'edit_item' => 'Edit ' . $singular,
        'view' => 'View ' . $singular,
        'view_item' => 'View ' . $singular,
        'search_term' => 'Search ' . $plural,
        'parent' => 'Parent ' . $singular,
        'not_found' => 'No ' . $plural . ' found',
        'not_found_in_trash' => 'No ' . $plural . ' in Trash',
        'menu_name' => $label,
    );

    $args = array(
        'labels' => $labels,
        'label' => $label,
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'show_in_nav_menu' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-info',
        'can_export' => true,
        'delete_with_user' => false,
        'query_var' => true,
        'capability_type' => 'page',
        'map_meta_cap' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'taxonomies' => array('category'),
        'rewrite' => array(
            'slug' => mb_strtolower($plural),
            'with_front' => true,
            'pages' => true,
            'feeds' => false,
        ),
        'supports' =>  $supports
    );
    register_post_type(mb_strtolower($plural), $args);
}

function watch_register_post_type()
{
    trent_register_post_type('اساتید', 'professors', array(
        'thumbnail', 'title', 'editor', 'excerpt', 'comments'
    ), 'اساتید');

    trent_register_post_type('منتورها', 'mentors', array(
        'thumbnail', 'title', 'editor', 'excerpt', 'comments'
    ), 'منتورها');

    trent_register_post_type('دوره ها', 'courses', array(
        'thumbnail', 'title', 'editor', 'excerpt', 'comments'
    ), 'دوره ها');

    trent_register_post_type('مدرک ها', 'cert', array(
        'thumbnail', 'title', 'editor', 'excerpt', 'comments'
    ), 'مدرک ها');

    trent_register_post_type('مینی دوره', 'mini-courses', array(
        'thumbnail', 'title', 'editor', 'excerpt', 'comments'
    ), 'مینی دوره');
}

add_action('init', 'watch_register_post_type');

add_action('init', function () {
    watch_register_post_type();
    flush_rewrite_rules();
});
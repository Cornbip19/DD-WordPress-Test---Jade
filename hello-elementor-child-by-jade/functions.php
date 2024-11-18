<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style-1', get_stylesheet_directory_uri() . '/asset/style.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



function create_custom_post_type() {
    $labels = array(
        'name'               => _x( 'Deer Tests', 'post type general name',  ),
        'singular_name'      => _x( 'Deer Test', 'post type singular name', '' ),
        'menu_name'          => _x( 'Deer Tests', 'admin menu', '' ),
        'name_admin_bar'     => _x( 'Deer Test', 'add new on admin bar', '' ),
        'add_new'            => _x( 'Add New', 'Deer Test', '' ),
        'add_new_item'       => __( 'Add New Deer Test', '' ),
        'new_item'           => __( 'New Deer Test', '' ),
        'edit_item'          => __( 'Edit Deer Test', '' ),
        'view_item'          => __( 'View Deer Test', '' ),
        'all_items'          => __( 'All Deer Tests', '' ),
        'search_items'       => __( 'Search Deer Tests', '' ),
        'parent_item_colon'  => __( 'Parent Deer Tests:', '' ),
        'not_found'          => __( 'No Deer Tests found.', '' ),
        'not_found_in_trash' => __( 'No Deer Tests found in Trash.', '' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'deer-test' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'deer_test', $args );
}
add_action( 'init', 'create_custom_post_type' );



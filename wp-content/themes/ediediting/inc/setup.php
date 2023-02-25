<?php

/**
 * Essential theme supports
 *
 * @package edi
 */
function theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    /** custom background **/
    // $bg_defaults = array(
    //     'default-image'          => '',
    //     'default-preset'         => 'default',
    //     'default-size'           => 'cover',
    //     'default-repeat'         => 'no-repeat',
    //     'default-attachment'     => 'scroll',
    // );
    // add_theme_support('custom-background', $bg_defaults);

    /** custom header **/
    // $header_defaults = array(
    //     'default-image'          => '',
    //     'width'                  => 300,
    //     'height'                 => 60,
    //     'flex-height'            => true,
    //     'flex-width'             => true,
    //     'default-text-color'     => '',
    //     'header-text'            => true,
    //     'uploads'                => true,
    // );
    // add_theme_support('custom-header', $header_defaults);

    /** custom log **/
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

/**
 * Register Menu
 */

function register_my_menu()
{
    register_nav_menu('main-menu', 'Main Menu');
}
add_action('init', 'register_my_menu');

/**
 * Register Custom Post Type for Portfolio Items
 */

 /**
 * Register a custom post type called "Portfolio".
 *
 * @see get_post_type_labels() for label keys.
 */
// Register custom post type "portfolio"
function register_portfolio_post_type() {
    $labels = array(
        'name'               => __( 'Portfolio', 'text-domain' ),
        'singular_name'      => __( 'Portfolio', 'text-domain' ),
        'menu_name'          => __( 'Portfolio', 'text-domain' ),
        'name_admin_bar'     => __( 'Portfolio', 'text-domain' ),
        'add_new'            => __( 'Add New', 'text-domain' ),
        'add_new_item'       => __( 'Add New Portfolio', 'text-domain' ),
        'new_item'           => __( 'New Portfolio', 'text-domain' ),
        'edit_item'          => __( 'Edit Portfolio', 'text-domain' ),
        'view_item'          => __( 'View Portfolio', 'text-domain' ),
        'all_items'          => __( 'All Portfolio', 'text-domain' ),
        'search_items'       => __( 'Search Portfolio', 'text-domain' ),
        'parent_item_colon'  => __( 'Parent Portfolio:', 'text-domain' ),
        'not_found'          => __( 'No portfolios found.', 'text-domain' ),
        'not_found_in_trash' => __( 'No portfolios found in Trash.', 'text-domain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'thumbnail', 'custom-fields' ),
        'taxonomies'         => array( 'portfolio_category' )
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'register_portfolio_post_type' );

// Register custom taxonomy "portfolio_category"
function register_portfolio_taxonomy() {
    $labels = array(
        'name'              => __( 'Portfolio Categories', 'text-domain' ),
        'singular_name'     => __( 'Portfolio Category', 'text-domain' ),
        'search_items'      => __( 'Search Portfolio Categories', 'text-domain' ),
        'all_items'         => __( 'All Portfolio Categories', 'text-domain' ),
        'parent_item'       => __( 'Parent Portfolio Category', 'text-domain' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:', 'text-domain' ),
        'edit_item'         => __( 'Edit Portfolio Category', 'text-domain' ),
        'update_item'       => __( 'Update Portfolio Category', 'text-domain' ),
        'add_new_item'      => __( 'Add New Portfolio Category', 'text-domain' ),
        'new_item_name'     => __( 'New Portfolio Category Name', 'text-domain' ),
        'menu_name'         => __( 'Portfolio Categories', 'text-domain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio_category' ),
    );

    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}
add_action( 'init', 'register_portfolio_taxonomy' );
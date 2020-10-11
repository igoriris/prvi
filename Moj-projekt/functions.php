<?php
//Load stylesheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', 
    array(), false, 'all');
    wp_enqueue_style('main');


}
add_action('wp_enqueue_scripts', 'load_css');


//Load javascript
function load_js ()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' , 'jquery' , false , true);
    wp_enqueue_style('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Menus

register_nav_menus( 

    [

        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    ]
 );

// Custom Image Sizes

add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);





/*function my_post_type ()
{
    $args = [

        'labels' => [

            'name' => 'Restorani',
            'singular_name' => 'Restoran',
        ],
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-users' ,
        'supports' => array ('title', 'editor' , 'thumbnail','custom-fields'),

    ];

    register_post_type( 'restorani', $args );
}
add_action('init', 'my_post_type');


function my_taxonomy()
{
    $args = array(

        'labels' => array (

            'name' => 'Gradovi',
            'singular_name' => 'Grad',
            'menu_name' => 'Gradovi',
        ),
        'hierarchical' => true,
        'public' => true,
    );

    register_taxonomy( 'Grad', 'restorani', $args);

}
add_action('init', 'my_taxonomy');
*/




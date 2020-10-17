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
add_theme_support( 'custom-logo' );
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


function wpb_postsbycategory() {
    // the query
    $the_query = new WP_Query( array( 'category_name' => 'gradovi', 'posts_per_page' => 10 ) ); 
     
    // The Loop
    if ( $the_query->have_posts() ) {
        $string .= '<ul class="postsbycategory widget_recent_entries">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
                if ( has_post_thumbnail() ) {
                $string .= '<li>';
                $string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail($post_id, array( 50, 50) ) . get_the_title() .'</a></li>';
                } else { 
                // if no featured image is found
                $string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
                }
                }
        } else {
        // no posts found
    }
    $string .= '</ul>';
     
    return $string;
     
    /* Restore original Post Data */
    wp_reset_postdata();
    }
    // Add a shortcode
    add_shortcode('categoryposts', 'wpb_postsbycategory');
     
    // Enable shortcodes in text widgets
    add_filter('widget_text', 'do_shortcode');


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




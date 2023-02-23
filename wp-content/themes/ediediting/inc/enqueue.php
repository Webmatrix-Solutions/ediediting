<?php 
/**
 * To Enqueue all styles and scripts of theme's core files
 */

 function enqueue_edi_styles() {
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/style.css', array());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array());
    wp_enqueue_style( 'all.min', get_template_directory_uri() . '/css/all.min.css', array());
    wp_enqueue_style( 'line-awesome', 'https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css', array());
    //wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array());
    wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/gallery.css', array());
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array());
    wp_enqueue_style( 'style-scss', get_template_directory_uri() . '/css/style.scss', array());
}
add_action( 'wp_enqueue_scripts', 'enqueue_edi_styles' );



?>
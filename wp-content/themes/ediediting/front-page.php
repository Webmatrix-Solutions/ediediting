<?php

/**
 * Template Name: Front Page
 * 
 * @package edi
 */

get_header();


// Include Homepage Slider // 
include get_template_directory() . '/partials/_slider.php'; 

// Include About Us Section // 
include get_template_directory() . '/partials/_about-us.php';

// Include Services Section // 
include get_template_directory() . '/partials/_services.php';

// Include Services Section // 
include get_template_directory() . '/partials/_technology.php';

// Include Services Section // 
include get_template_directory() . '/partials/_process.php';

// Include Portfolio Section // 
include get_template_directory() . '/partials/_portfolio.php';

// Include Testimonials Section // 
include get_template_directory() . '/partials/_testimonials.php';

// Include Clients Section // 
include get_template_directory() . '/partials/_clients.php';

// Include Clients Section // 
include get_template_directory() . '/partials/_blog.php';

// Include Clients Section // 
include get_template_directory() . '/partials/_contact-us.php';



get_footer(); ?>
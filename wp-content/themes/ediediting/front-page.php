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



get_footer(); ?>
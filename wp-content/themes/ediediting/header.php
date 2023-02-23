<?php

/**
 * This is main header template for the Website
 * 
 * @package edi
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?> || <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet" media="all">
    <?php wp_head(); ?>
</head>

<style>
    a {
        text-decoration: none;
    }
</style>

<body>

    <header class="header-wrapper">

        <!-- Include Top Header -->
        <?php include get_template_directory() . '/partials/_top-header.php'; ?>

        <!-- Include Navbar -->
        <?php include get_template_directory() . '/partials/_navbar.php'; ?>


    </header>
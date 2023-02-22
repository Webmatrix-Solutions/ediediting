<?php
/**
 * This is main header template for the Website
 * 
 * @package edi
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?> || <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
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

        <div class="main-menu">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo-wrap">
                            <a class="navbar-brand" href="index.html">
                                <img class="img-fluid" src="images/logo.svg" alt="">
                            </a>
                        </div>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="active">
                                    <a href="services.html">Services </a>
                                </li>
                                <li>
                                    <a href="expertise.html">Expertise </a>
                                </li>
                                <li>
                                    <a href="case-studies.html">Case Studies </a>
                                </li>
                                <li>
                                    <a href="company.html">Company</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="careers.html">Careers</a>
                                </li>
                            </ul>

                        </div>

                        <div class="login-btn-wrap">
                            <a class="btn btn-info" href="#"> Lets Talk <i class="fa-solid fa-paper-plane"></i></a>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                        </button>

                    </nav>
                </div>
            </div>
        </div>
    </header>
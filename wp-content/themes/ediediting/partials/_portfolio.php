<?php

/**
 * This Template will display the Portfolio Section for the Website
 * 
 * @package edi
 */
?>

<section id="gallery" class="our-protfolio-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <div class="comon-title">
                    <h3>Our <span>Portfolio</span></h3>
                    <br>
                    <p>Lorem Media is a full-service social media agency. We offer businesses innovative solutions that deliver the right type of audience to you in the most effective strategies possible.</p>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div id="image-gallery">
                    <div class="row">
                        <div class="isotope-wrapper">
                            <div class="isotope-toolbar">
                                <ul>
                                    <!-- <li>
                                        <button class="isotope-toolbar-btn active" data-type="*" name="isotope-filter">
                                            <span>See All</span>
                                        </button>
                                    </li> -->
                                    <?php
                                    // Query the custom taxonomy 'portfolio_category'
                                    /*$terms = get_terms(array(
                                            'taxonomy' => 'portfolio_category',
                                            'hide_empty' => true,
                                        ));

                                        // Loop through the terms and display them as filter buttons
                                        foreach ($terms as $term) {
                                            echo '<li><button class="isotope-toolbar-btn" data-type="' . $term->slug . '" name="isotope-filter"><span>' . $term->name . '</span></button></li>';
                                        }
                                    */ ?>
                                </ul>
                            </div>

                            <div class="isotope-box row">
                                <?php
                                // Query the custom post type 'portfolio'
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'posts_per_page' => -1,
                                );
                                $query = new WP_Query($args);

                                // Loop through the posts and display them as gallery items
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($query->ID), 'large'); ?>

                                    <div class="isotope-item col-12 col-sm-6 col-md-6 col-lg-4 mb-4" data-type="Graphics-Design">
                                        <div class="img-wrapper">
                                            <a href="<?php echo $image[0]; ?>"><img src="<?php echo $image[0]; ?>" class="img-responsive"></a>
                                            <div class="img-overlay">
                                                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/images/gallery-zoom-icon.png"></div>
                                            </div>
                                        </div>
                                    </div>

                                <?php  } ?>

                                <?php
                                // Reset the post data
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
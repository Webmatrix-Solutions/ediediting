<?php

/**
 * This Template is for Testimonials Section
 * 
 * @package edi
 */
?>

<section class="testimonials-wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-4">
                <div class="testimonials-left-wrap">
                    <div id="testimonials-slider" class="owl-carousel">

                        <?php
                        // Query the custom post type 'portfolio'
                        $args = array(
                            'post_type' => 'testimonials',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query($args);

                        // Loop through the posts and display them as gallery items
                        while ($query->have_posts()) {
                            $query->the_post();
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($query->ID), 'large');
                            $star_rating_image = get_field('star_rating_image'); ?>
                            <div class="testimonials-slider-item">
                                <div class="testimonials-wrap">
                                    <div class="auth-img">
                                        <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="">
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                    <div class="rating-img">
                                        <img class="img-fluid" src="<?= $star_rating_image['url']; ?>" alt="">
                                    </div>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        <?php }
                        // Reset the post data
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="testimonials-right-img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/testimonials-right-img1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
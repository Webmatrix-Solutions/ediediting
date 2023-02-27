<?php

/**
 * Template Name: Blog Page
 * 
 * @package edi
 */

get_header(); ?>


<section class="blog-wrapper">
    <div class="container">
        <div class="row">

            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 2,
                'orderby' => 'DESC',
            );
            // WP Query to get all the posts
            $arr_posts = new WP_Query($args);

            // Get the Post date
            $post_month = get_the_date('M');
            $post_date = get_the_date('j');
            // The Loop
            while ($arr_posts->have_posts()) : $arr_posts->the_post();
                // Get Post Featured Image //
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($arr_posts->ID), 'large'); ?>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="">
                        </div>
                        <div class="blog-contant">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
                            <div class="read-more-date">
                                <ul>
                                    <li>
                                        <a class="read-btn" href="<?php the_permalink(); ?>">Read more...</a>
                                    </li>
                                    <li><?= get_the_date('F j, Y'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            // Reset Query
            wp_reset_query(); ?>

        </div>
    </div>
</section>


<?php
include get_template_directory() . '/partials/_contact-us.php';


get_footer(); ?>
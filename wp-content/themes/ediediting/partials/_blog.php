<?php

/**
 * This template is for displaying the list of blogs like an archive
 * 
 * @package edi
 */
?>

<section class="blog-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="comon-title">
                    <h4>OUR BLOG</h4>
                    <h3>latest articles from </h3>
                    <h3>our <span>buddies</span></h3>
                </div>
            </div>
            <div class="col-12 col-md-8 mb-4">
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
                        <div class="col-12 col-md-6 mb-4">
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
            <div class="col-12 col-md-4">
                <div class="blog-right-sidebar">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 4,
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
                        <div class="blog-list">
                            <div class="blog-img">
                                <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="">
                            </div>
                            <div class="right-content">
                                <p><?= get_the_date('F j, Y'); ?></p>
                                <h5><?php the_title(); ?></h5>
                            </div>
                        </div>
                    <?php endwhile;
                    // Reset Query
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
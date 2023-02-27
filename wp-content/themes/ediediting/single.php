<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package edi
 */

get_header(); ?>

<?php
while (have_posts()) : the_post(); ?>

    <section class="blog-details-wraper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-9 mb-4 mb-md-0">
                    <div class="blog-single-wraper">
                        <h1> <?php the_title(); ?> </h1>
                        <div class="entry-meta">
                            <span class="posted-on">Posted on <a href="#"><time class="entry-date"><?= get_the_date('F j, Y'); ?></time></a></span>
                            <span class="byline"> by <span class="meta-author"><a href="#"><?php the_author_meta('display_name'); ?></a></span></span>
                        </div>
                        <div class="blog-img">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/blog-img1.jpg" alt="">
                            <div class="blog-date">
                                <p><?= get_the_date('j, F'); ?></p>
                                <p><?= get_the_date('Y'); ?></p>
                            </div>
                        </div>
                        <?php the_content(); ?>

                        <div class="blog-prev-next-wraper d-flex">
                            <div class="col-6">
                                <a class="prev-post" href="#"><i class="fa fa-chevron-left"></i>Previous Post</a>
                            </div>
                            <div class="col-6 text-right">
                                <a class="next-post" href="#">Next Post<i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="comment-respond">
                            <h3>Leave a Reply</h3>
                            <form class="comment-form">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label>Comment</label>
                                        <textarea class="form-control" id="" name="" rows="8" required="required"></textarea>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label>Name </label>
                                        <input class="form-control" id="" name="" type="text" value="" required="required">
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label>Email </label>
                                        <input class="form-control" id="" name="" type="email" value="" required="required">
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label>Website </label>
                                        <input class="form-control" id="" name="" type="text" value="" required="required">
                                    </div>
                                    <div class="col-12">
                                        <input class="btn btn-info" type="submit" name="" value="Post Comment">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="blog-sidebar">
                        <div class="recent-posts">
                            <h4 class="blog-sidebar-title">LATEST POSTS</h4>
                            <ul class="recent-posts-list">

                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 5,
                                    'orderby' => 'DESC',
                                );
                                // WP Query to get all the posts
                                $arr_posts = new WP_Query($args);
                                // The Loop
                                while ($arr_posts->have_posts()) : $arr_posts->the_post();
                                    // Get Post Featured Image //
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($arr_posts->ID), 'large'); ?>
                                    <li>
                                        <div class="blog-posts-wrap">
                                            <div class="blog-img">
                                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/blog-img1.jpg" alt="">
                                            </div>
                                            <div class="blog-right-text">
                                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                <p><?= get_the_date('F j, Y'); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile;
                                // Reset Query
                                wp_reset_query(); ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
endwhile;
?>

<?php get_footer(); ?>
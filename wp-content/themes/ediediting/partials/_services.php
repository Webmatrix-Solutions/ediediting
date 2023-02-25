<?php

/**
 * Template for Services
 * 
 * @package edi
 */
?>

<?php
$section_image = get_field('section_image');
$services_sub_title = get_field('services_sub_title');
$services_title = get_field('services_title');
?>

<section class="services-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="comon-title">
                    <h4><?= esc_html($services_sub_title); ?></h4>
                    <h3><?= $services_title; ?> </h3>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="services-right-img">
                    <img class="img-fluid" src="<?= $section_image['url']; ?>" alt="">
                </div>
            </div>

            <?php if (have_rows('services_list')) : ?>
                <?php while (have_rows('services_list')) : the_row();

                    $services_image = get_sub_field('services_image');
                    $services_hover_image = get_sub_field('services_hover_image');
                    $services_title = get_sub_field('services_title');
                    $services_description = get_sub_field('services_description');
                    $button = get_sub_field('button'); ?>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="services-list">
                            <div class="icon">
                                <img class="img-fluid normal-icon" src="<?= $services_image['url']; ?>" alt="">
                                <img class="img-fluid hover-icon" src="<?= $services_hover_image['url']; ?>" alt="">
                            </div>
                            <h4><?= $services_title; ?> </h4>
                            <div class="srv-content">
                                <p><?= $services_description; ?></p>
                                <?php if ($button) :
                                    $button_url = $button['url'];
                                    $button_title = $button['title']; ?>
                                    <a class="btn btn-outline-light" href="<?= esc_url($button_url); ?>"><?= esc_html($button_title); ?> <i class="fa-solid fa-paper-plane"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
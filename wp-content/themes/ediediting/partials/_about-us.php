<?php

/**
 * This Template is for Homepage About Us
 * 
 * @package edi
 */
?>

<?php
$main_image = get_field('main_image');
$section_sub_title = get_field('section_sub_title');
$section_title = get_field('section_title');

?>

<section class="about-us-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="about-left-img">
                    <img class="img-fluid" src="<?= $main_image['url']; ?>" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="about-right-content">
                    <div class="comon-title mb-4">
                        <h4><?= $section_sub_title; ?></h4>
                        <h3><?= $section_title; ?></h3>
                    </div>
                    <?php if (have_rows('section_buttons')) : ?>
                        <ul>
                            <?php while (have_rows('section_buttons')) : the_row();
                                $button = get_sub_field('buttons');
                                $section_button_style = get_sub_field('section_button_style'); ?>
                                <li>
                                    <a class="btn <?= $section_button_style == 1 ? 'btn-outline-dark' : 'btn-dark'; ?>" href="<?= esc_url($button['url']); ?>"><?= esc_html($button['title']); ?> <i class="fa-solid fa-paper-plane"></i> </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (have_rows('about_us_tiles')) : ?>

                <?php while (have_rows('about_us_tiles')) : the_row();

                    $tile_icon_image = get_sub_field('tile_icon_image');
                    $tile_heading = get_sub_field('tile_heading');
                    $tile_description = get_sub_field('tile_description');
                    $tile_button = get_sub_field('tile_button'); ?>

                    <div class="col-12 col-md-6 mb-4">
                        <div class="about-bottom-list">
                            <div class="icon">
                                <img class="img-fluid" src="<?= $tile_icon_image['url']; ?>" alt="">
                            </div>
                            <h4><?= esc_html($tile_heading); ?></h4>
                            <p><?= esc_html($tile_description) ?></p>
                            <a class="btn btn-outline-dark" href="<?= esc_url($tile_button['url']); ?>"><?= esc_html($tile_button['title']); ?> <i class="fa-solid fa-paper-plane"></i></a>
                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </div>
</section>
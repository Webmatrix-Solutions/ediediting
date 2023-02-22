<?php

/**
 * Template for Top Header
 * 
 * @package edi
 */

// Get acf field value //
$text = get_field('short_text', 'option');
$button = get_field('button', 'option');
?>

<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="left-content">
                    <p><?= $text; ?>
                        <?php if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title']; ?>
                            <a class="btn btn-info" href="<?= esc_url($button_url); ?>"> <?= esc_html($button_title); ?> <i class="fa-solid fa-paper-plane"></i> </a>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="social-icon">
                    <?php if (have_rows('social_icons', 'option')) : ?>
                        <ul>
                            <?php while (have_rows('social_icons', 'option')) : the_row();
                                $icon_img = get_sub_field('icon_image', 'option');
                                $icon_url = get_sub_field('icon_url', 'option'); ?>
                                <li>
                                    <a href="<?= $icon_url; ?>">
                                        <?= $icon_img; ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
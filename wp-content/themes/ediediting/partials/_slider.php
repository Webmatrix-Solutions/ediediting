<?php

/**
 * Homepage Slider
 */
?>

<section class="banner-wrapper">
    <?php if (have_rows('slider')) : ?>
        <div id="banner-slider" class="owl-carousel">
            <?php while (have_rows('slider')) : the_row();
                $banner_image = get_sub_field('banner_image');
                $banner_text = get_sub_field('text');
                $banner_title = get_sub_field('banner_title');
                $banner_btn =  get_sub_field('button');
            ?>
                <div class="banner-slider-wrap">
                    <img class="img-fluid" src="<?= $banner_image['url']; ?>">
                    <div class="banner-content-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <h4><?= $banner_text; ?></h4>
                                    <h3><?= $banner_title; ?></h3>

                                    <?php if ($banner_btn) :
                                        $banner_btn_url = $banner_btn['url'];
                                        $banner_btn_title = $banner_btn['title'];
                                    ?>
                                        <a class="btn btn-info" href="<?= esc_url($banner_btn_url); ?>"> <?= esc_html($banner_btn_title); ?> <i class="fa-solid fa-paper-plane"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>
<?php

/**
 * Homepage Slider
 */
?>

<section class="technology-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <div class="comon-title">
                    <h4><?php the_field('sub_title'); ?></h4>
                    <h3><?php the_field('title'); ?></h3>
                </div>
            </div>
            <div class="col-12">
                <?php if (have_rows('technology_logo')) : ?>

                    <div id="technology-slider" class="owl-carousel">
                        <?php while (have_rows('technology_logo')) : the_row();
                            $logo = get_sub_field('logo'); ?>

                            <div class="technology-slider-items">
                                <div class="technology-logo">
                                    <img src="<?= $logo['url']; ?>" alt="">
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>

</section>
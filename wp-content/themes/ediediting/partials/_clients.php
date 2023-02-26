<?php

/**
 * This Template is for Displaying the template
 * 
 * @package edi
 */
?>

<section class="extended-family-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 text-center">
                <div class="comon-title">
                    <h4><?php the_field('clients_sub_title'); ?></h4>
                    <h3><?php the_field('clients_title'); ?></h3>
                </div>
            </div>
            <div class="col-12">
                <div id="extended-family-slider" class="owl-carousel">

                    <?php if (have_rows('clients_image')) : ?>
                        <?php while (have_rows('clients_image')) : the_row();
                            $clients_logo = get_sub_field('clients_logo'); ?>

                            <div class="extended-family-slider-items">
                                <div class="extended-family-logo">
                                    <img src="<?php echo $clients_logo['url']; ?>" alt="">
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php

/**
 * The template used for displaying page content in page.php
 *
 * @package edi
 */
get_header();

$toggle_box_shadow = get_field('toggle_box_shadow');
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <section class="company-wrapper main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="cms-content <?= $toggle_box_shadow == 1 ? 'shadow p-3 rounded' : ''; ?>">

                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
<?php } ?>


<?php

$toggle_tech_slider = get_field('toggle_tech_slider');

if ($toggle_tech_slider == 1) {

    include get_template_directory() . '/partials/_technology.php';
}


include get_template_directory() . '/partials/_contact-us.php';






get_footer(); ?>
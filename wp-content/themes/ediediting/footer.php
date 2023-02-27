<?php

/**
 * This template will display the main footer for the template
 * 
 * @package edi
 */
?>

<footer class="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-2 mb-3">
                <div class="footer-inner-wrap">
                    <h3><?php the_field('quick_link_title', 'option'); ?></h3>
                    <div class="footer-menu">
                        <?php if (have_rows('menu_items', 'option')) : ?>
                            <ul>
                                <?php while (have_rows('menu_items', 'option')) : the_row();
                                    $items = get_sub_field('items', 'option'); ?>
                                    <li>
                                        <a href="<?= esc_url($items['url']); ?>"><?= esc_html($items['title']); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="footer-inner-wrap">
                    <h3><?php the_field('services_link_title', 'option'); ?></h3>

                    <div class="footer-menu">
                        <?php if (have_rows('service_items', 'option')) : ?>
                            <ul>
                                <?php while (have_rows('service_items', 'option')) : the_row();
                                    $items = get_sub_field('services_items_link', 'option'); ?>
                                    <li>
                                        <a href="<?= esc_url($items['url']); ?>"><?= esc_html($items['title']); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 mb-3">
                <div class="footer-inner-wrap">
                    <h3><?php the_field('resource_title', 'option'); ?></h3>
                    <div class="footer-menu">
                        <?php if (have_rows('resources_link', 'option')) : ?>
                            <ul>
                                <?php while (have_rows('resources_link', 'option')) : the_row();
                                    $items = get_sub_field('resources_links', 'option'); ?>
                                    <li>
                                        <a href="<?= esc_url($items['url']); ?>"><?= esc_html($items['title']); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 mb-3 footer-newsletter">
                <div class="footer-inner-wrap">
                    <div class="newsletter-wrap mb-4">
                        <form>
                            <div class="newsletter-frm">
                                <div class="input-text">
                                    <input class="form-control" type="text" name="" placeholder="Email Address">
                                </div>
                                <div class="submit">
                                    <input class="btn btn-info" type="submit" name="" value="SUBSCRIBE NOW">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="footer-social-icon">

                        <?php if (have_rows('social_icons', 'option')) : ?>
                            <ul>

                                <?php while (have_rows('social_icons', 'option')) : the_row();
                                    $items = get_sub_field('icons', 'option');
                                    $link = get_sub_field('link', 'option'); ?>
                                    <li>
                                        <a href="<?= esc_url($link['url']); ?>">
                                            <?= $items; ?>
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

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="foot-copy">
                        <p>&copy; Copyright 2023 | All Right Reserved</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="policy-menu">
                        <ul>
                            <li>
                                <a href="#">Terms of use</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/popper.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/external.js"></script>
<?php wp_footer(); ?>

</body>

</html>
<?php

/**
 * Template for Site's main navbar
 */
?>

<?php
$logo = get_field('logo', 'option');
$header_btn = get_field('menu_button', 'option');
?>

<div class="main-menu">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo-wrap">
                    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                        <img class="img-fluid" src="<?= $logo['url']; ?>" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => 'ul',
                            'menu_class' => 'navbar-nav'
                        ));
                        ?>
                    </div>
                </div>

                <?php if ($header_btn) :
                    $btn_url = $header_btn['url'];
                    $btn_text = $header_btn['title'];
                ?>
                    <div class="login-btn-wrap">
                        <a class="btn btn-info" href="<?= esc_url($btn_url); ?>"> <?= esc_html($btn_text); ?> <i class="fa-solid fa-paper-plane"></i></a>
                    </div>
                <?php endif; ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

            </nav>
        </div>
    </div>
</div>
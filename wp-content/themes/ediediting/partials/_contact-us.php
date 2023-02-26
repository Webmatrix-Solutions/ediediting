<?php

/**
 * This template is for showing the default contact section with form
 * 
 * @package edi
 */
?>

<section class="contact-us-wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-4">
                <div class="contact-left-wrap">
                    <div class="comon-title mb-4">
                        <h3><?php the_field('heading', 'option'); ?></h3>
                        <p><?php the_field('description', 'option'); ?></p>
                    </div>
                    <div class="row">

                        <?php if (have_rows('email', 'option')) : ?>
                            <?php while (have_rows('email', 'option')) : the_row();
                                $email_type = get_sub_field('email_type', 'option');
                                $email_id = get_sub_field('email_id', 'option'); ?>

                                <div class="col-12 col-md-6 mb-3">
                                    <div class="contact-info-list">
                                        <h5><a href="mailto:<?= $email_id; ?>"><?= $email_id; ?></a></h5>
                                        <p><?= $email_type; ?></p>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('contact_number', 'option')) : ?>
                            <?php while (have_rows('contact_number', 'option')) : the_row();
                                $phone_text = get_sub_field('phone_text', 'option');
                                $phone_number = get_sub_field('phone_number', 'option'); ?>

                                <div class="col-12 col-md-6 mb-3">
                                    <div class="contact-info-list">
                                        <h5><a href="tel:<?= $phone_number; ?>"><?= $phone_number; ?></a></h5>
                                        <p><?= $phone_text; ?></p>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <div class="our-office-wrap">
                        <?php
                        $main_title = get_field('title', 'option');
                        $address = get_field('address_details', 'option');
                        ?>
                        <h4><?= $main_title; ?></h4>
                        <h5><?= $address; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="contact-form-sec">
                    <div class="comon-title mb-3">
                        <?php
                        $contact_title = get_field('contact_title', 'option');
                        $contact_description = get_field('contact_description', 'option');
                        ?>
                        <h3><?= $contact_title; ?></h3>
                        <p><?= $contact_description; ?></p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="192" title="Contact us"]'); ?>
                    <!-- <form>
                        <div class="form-group mb-3">
                            <input type="text" id="" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" id="" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" id="" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" rows="4" id="comment" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-info" type="submit" name="submit" value="Send Message">
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</section>
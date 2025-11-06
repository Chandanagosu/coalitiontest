<?php
/*
Template Name: Homepage
*/
get_header();
?>

<main class="homepage">
    <section class="hero">
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to our website! This is a custom homepage built for the Coalition test task. 
               All content here can be managed through WordPress.</p>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Phone: <?php echo esc_html(get_option('coalition_phone')); ?></p>
            <p>Address: <?php echo esc_html(get_option('coalition_address')); ?></p>
            <p>Fax: <?php echo esc_html(get_option('coalition_fax')); ?></p>
            <p>Follow us: <?php echo wp_kses_post(get_option('coalition_social')); ?></p>

            <?php
            // Show Contact Form 7 form (optional)
            if (shortcode_exists('contact-form-7')) {
                echo do_shortcode('[contact-form-7 id="123" title="Contact form"]');
            }
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

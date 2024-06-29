<?php get_header(); ?>
<div class="page"
    style="background-image: linear-gradient(rgba(22, 27, 45, 0.9), rgba(22, 27, 45, 0.9)), url(<?php echo esc_url(get_theme_mod('background_image_setting', get_template_directory_uri() . '/assets/img/banner1.jpg')); ?>)">
    <div class="page__header">
        <h1 class="page__title animate__animated animate__zoomIn">Page not found</h1>
    </div>
</div>

<section class="section section-light">
    <div class="section__content">
        <div>
            <h3 class="fw-bold mb-4 color-blue">The link you followed is broken. Page not found! <a
                    href="<?php echo get_site_url() ?>" class="color-gold">Go to homepage</a></h3>
        </div>
    </div>
</section>
<?php get_footer(); ?>
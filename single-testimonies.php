<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        global $post;
        ?>
        <div class="page"
            style="background-image: linear-gradient(rgba(22, 27, 45, 0.9), rgba(22, 27, 45, 0.9)), url(<?php echo esc_url(get_theme_mod('background_image_setting', get_template_directory_uri() . '/assets/img/banner1.jpg')); ?>)">
            <div class="page__header">
                <h1 class="page__title animate__animated animate__zoomIn">Testimony</h1>
            </div>
            <p class="page__share">Share this</p>
            <div class="page__icons">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" class="page__icon"
                    target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="http://www.twitter.com/share?url=<?php the_permalink() ?>" class="page__icon" target="_blank"><i
                        class="bi bi-twitter-x"></i></a>
                <a href="whatsapp://send?text=<?php the_permalink() ?>" class="page__icon" target="_blank"><i
                        class="bi bi-whatsapp"></i></a>
            </div>
        </div>
        <div class="section section-light">
            <div class="article__content">
                <div class="section__title single__title animate__animated animate__fadeIn">
                    <h1 class="heading-1 color-blue single-heading"><?php the_title(); ?></h1>
                    <span class="dash"></span>
                    <span><span><a href="<?= get_site_url() ?>/testimonies/" class="color-gold">Testimonies</a></span> | <span
                            class="color-grey">Published: </span> <span
                            class="color-gold"><?php the_time('d M y'); ?></span></span>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    endwhile;
else : ?>
    <section class="section section-light">
        <p class="not-found__text">Sorry, no post found!</p>
    </section>
    <?php
endif;
?>
<section class="section single__pagination">
    <div class="article__content">
        <div class="d-flex justify-content-between align-items-center">
            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>
            <?php if (! empty($prev_post)) : ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="post-nav__link prev color-gold fw-bold">&larr;
                    Previous</a>
            <?php endif; ?>
            <?php if (! empty($next_post)) : ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="post-nav__link next color-gold fw-bold">Next
                    &rarr;</a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
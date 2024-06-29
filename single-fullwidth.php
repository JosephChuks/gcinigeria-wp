<?php
/*
Template Name: Default Fullwidth
*/
?>

<?php get_header(); ?>
<div class="page"
    style="background-image: linear-gradient(rgba(22, 27, 45, 0.9), rgba(22, 27, 45, 0.9)), url(<?php echo esc_url(get_theme_mod('background_image_setting', get_template_directory_uri() . '/assets/img/banner1.jpg')); ?>)">
    <div class="page__header">
        <h1 class="page__title animate__animated animate__zoomIn"><?php the_title(); ?></h1>
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
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        global $post;
        ?>
        <?php the_content(); ?>
    <?php
    endwhile;
else : ?>
    <div class="not-found">
        <p class="not-found__text">Sorry, no post found!</p>
    </div>
    <?php
endif;
?>

<?php get_footer(); ?>
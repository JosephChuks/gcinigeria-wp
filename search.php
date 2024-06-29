<?php get_header(); ?>
<div class="page"
    style="background-image: linear-gradient(rgba(22, 27, 45, 0.9), rgba(22, 27, 45, 0.9)), url(<?php echo esc_url(get_theme_mod('background_image_setting', get_template_directory_uri() . '/assets/img/banner1.jpg')); ?>)">
    <div class="page__header">
        <h1 class="page__title animate__animated animate__zoomIn">Search</h1>
    </div>
</div>

<section class="section section-light">
    <div class="section__title locate__title">
        <h1 class="heading-1 color-blue">Search Results Page</h1>
        <span class="dash"></span>
        <p class="color-grey"><?php
        printf(esc_html__('You searched for: %s', 'gcinigeria-wp'), '<span class="color-gold fw-bold">' . get_search_query() . '</span>');
        ?></p>
    </div>
    <div class="article__content">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="article" id="post-<?php the_ID(); ?>">
                    <div class="article__img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri() ?>/screenshot.png" alt="<?php the_title(); ?>"
                                class="section__card-img">
                        <?php endif; ?>
                    </div>
                    <div class="article__contents">
                        <h3 class="fw-bold mb-4 color-blue article__title"><?php the_title(); ?>
                            <?php
                            $categories = get_the_category();
                            if (! empty($categories)) {
                                echo ' - <span class="color-gold" style="font-weight:normal">' . esc_html($categories[0]->name) . '</span>';
                                }
                            ?></h3>
                        <div class="article__excerpt"><?php the_excerpt(); ?></div>
                    </div>
                </a>

                <?php
            endwhile;
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('&larr; Previous', 'gcinigeria-wp'),
                'next_text' => __('Next &rarr;', 'gcinigeria-wp'),
            ));

        else : ?>
            <div class="not-found">
                <p class="not-found__text">Sorry, no posts were found!</p>
            </div>
            <?php
        endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>
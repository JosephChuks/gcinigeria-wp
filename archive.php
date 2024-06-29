<?php get_header(); ?>
<div class="page"
    style="background-image: linear-gradient(rgba(22, 27, 45, 0.9), rgba(22, 27, 45, 0.9)), url(<?php echo esc_url(get_theme_mod('background_image_setting', get_template_directory_uri() . '/assets/img/banner1.jpg')); ?>)">
    <div class="page__header">
        <h1 class="page__title animate__animated animate__zoomIn">
            <?php
            if (is_category()) {
                single_cat_title();
                $cat_id = get_query_var('cat');
                $link = get_category_link($cat_id);
                }
            elseif (is_tag()) {
                single_tag_title();
                $tag_id = get_query_var('tag_id');
                $link = get_tag_link($tag_id);
                }
            elseif (is_author()) {
                the_post();
                $author_id = get_the_author_meta('ID');
                $link = get_author_posts_url($author_id);
                echo 'Author Posts: ' . get_the_author();
                rewind_posts();
                }
            elseif (is_day()) {
                echo 'Daily Posts: ' . get_the_date();
                $link = get_site_url();
                }
            elseif (is_month()) {
                echo 'Monthly Posts: ' . get_the_date(_x('F Y', 'monthly archives date format', 'gcinigeria-wp'));
                $link = get_site_url();
                }
            elseif (is_year()) {
                echo 'Yearly Posts: ' . get_the_date(_x('Y', 'yearly archives date format', 'gcinigeria-wp'));
                $link = get_site_url();
                }
            else {
                $title = post_type_archive_title('', false);
                $link = get_site_url() . '/' . strtolower($title);
                echo $title;
                }
            ?>
        </h1>
    </div>
    <p class="page__share">Share this</p>
    <div class="page__icons">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= esc_url($link) ?>" class="page__icon"
            target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="http://www.twitter.com/share?url=<?= esc_url($link) ?>" class="page__icon" target="_blank"><i
                class="bi bi-twitter-x"></i></a>
        <a href="whatsapp://send?text=<?= esc_url($link) ?>" class="page__icon" target="_blank"><i
                class="bi bi-whatsapp"></i></a>
        <a href="https://telegram.me/share/url?url=<?= esc_url($link) ?>" class="page__icon" target="_blank"><i
                class="bi bi-telegram"></i></a>
    </div>
</div>

<section class="section section-light">
    <div class="section__content">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article class="section__card" id="post-<?php the_ID(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri() ?>/screenshot.png" alt="<?php the_title(); ?>"
                            class="section__card-img">
                    <?php endif; ?>
                    <h5 class="section__card-title"><?php the_title(); ?></h5>
                    <div class="section__card-text"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="btn btn__outline-gold color-blue">Read more</a>
                </article>
                <?php
            endwhile;
        else : ?>
            <div class="not-found">
                <p class="not-found__text">Sorry, no posts were found!</p>
            </div>
            <?php
        endif;
        ?>
    </div>
</section>
<section class="section section-light" style="margin-top:-100px">
    <div class="article__content">
        <?php
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('&larr; Previous', 'gcinigeria-wp'),
            'next_text' => __('Next &rarr;', 'gcinigeria-wp'),
        ));
        ?>
    </div>
</section>
<?php get_footer(); ?>
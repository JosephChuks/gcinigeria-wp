<?php get_header(); ?>
<div class="hero">
    <div class="slider-pro" id="heroSlider">
        <div class="sp-slides">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="sp-slide hero__slider"
                    style="background-image: linear-gradient(rgba(22, 27, 45, 0.85), rgba(22, 27, 45, 0.8)), url(<?php echo get_theme_mod('slider_bg_image_' . $i, get_template_directory_uri() . '/img/banner' . $i . '.jpg'); ?>);">
                    <h1 class="sp-slide__header animate__animated animate__zoomIn">
                        <?php echo get_theme_mod('slider_h1_text_' . $i, 'Slide ' . $i); ?></h1>
                    <p class="sp-slide__subheader animate__animated animate__fadeIn">
                        <?php echo get_theme_mod('slider_p_text_' . $i, 'Description for Slide ' . $i); ?></p>

                    <?php
                    $button_1_text = get_theme_mod('slider_button_1_text_' . $i, 'Learn More');
                    $button_2_text = get_theme_mod('slider_button_2_text_' . $i, 'Become a member');
                    $button_1_link = esc_url(get_theme_mod('slider_button_1_link_' . $i, '#'));
                    $button_2_link = esc_url(get_theme_mod('slider_button_2_link_' . $i, '#'));

                    // Display buttons only if there is content
                    if ($button_1_text || $button_2_text) :
                        ?>
                        <div class="hero__buttons animate__animated animate__fadeInUpBig">
                            <?php if ($button_1_text) : ?>
                                <a href="<?php echo $button_1_link; ?>"
                                    class="btn btn__outline-gold sp-slide__button-1"><?php echo esc_html($button_1_text); ?></a>
                            <?php endif; ?>
                            <?php if ($button_2_text) : ?>
                                <a href="<?php echo $button_2_link; ?>"
                                    class="btn btn__outline-gold sp-slide__button-2"><?php echo esc_html($button_2_text); ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<section class="section about-section" id="about">
    <div class="section__content">
        <div class="about-section__card about-section__card-1">
            <img src="<?= get_template_directory_uri() ?>/assets/img/banner3.jpg" alt="<?= get_bloginfo() ?>"
                class="about-section__img">
            <h5 class="about-section__title">Who we are</h5>
            <p class="about-section__text">GCI Nigeria is part of an international
                denomination that participates in Jesus' ministry by living and sharing the gospel...</p>
            <a href="/about-us#whoWeAre" class="btn btn__blue about-section__btn">Learn more</a>
        </div>
        <div class="about-section__card about-section__card-2">
            <img src="<?= get_template_directory_uri() ?>/assets/img/banner2.jpg" alt="<?= get_bloginfo() ?>"
                class="about-section__img">
            <h5 class="about-section__title">What we believe</h5>
            <p class="about-section__text">Grace Communion International believes that theology should be rooted in the
                Bible, especially the New Testament. </p>
            <a href="/about-us#ourBelieve" class="btn btn__blue about-section__btn">Learn more</a>
        </div>
        <div class="about-section__card about-section__card-3">
            <img src="<?= get_template_directory_uri() ?>/assets/img/banner1.jpg" alt="<?= get_bloginfo() ?>"
                class="about-section__img">
            <h5 class="about-section__title">What we value</h5>
            <p class="about-section__text">By living out Inclusive, Passionate, Intentional, Loving and Genuine, we seek
                to multiply followers of Jesus across the globe.</p>
            <a href="/about-us#ourValues" class="btn btn__blue about-section__btn">Learn more</a>
        </div>
    </div>

</section>

<section class="section locate" id="locate">
    <div class="section__title locate__title">
        <h1 class="heading-1 color-blue">Find a Church / Pastor</h1>
        <span class="dash"></span>
        <p>Connect in your area</p>
    </div>
    <div class="section__content locate__content">
        <div class="locate__container">
            <ul class="nav nav-pills mb-3 locate__tabs" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <p class="nav-link locate__tabs-first" id="pills-disabled-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-disabled" role="tab" aria-controls="pills-disabled" aria-selected="false"
                        disabled>I'm looking for</p>
                </li>

                <li class="nav-item" role="presentation">
                    <p class="nav-link active" id="pills-pastor-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-pastor" role="tab" aria-controls="pills-pastor" aria-selected="true">
                        A pastor
                    </p>
                </li>
                <li class="nav-item" role="presentation">
                    <p class="nav-link" id="pills-church-tab" data-bs-toggle="pill" data-bs-target="#pills-church"
                        role="tab" aria-controls="pills-church" aria-selected="false">A church</p>
                </li>
            </ul>
            <div class="tab-content locate__tabs-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-pastor" role="tabpanel"
                    aria-labelledby="pills-pastor-tab" tabindex="0">
                    To find a pastor, type a few characters of the last name and click the Search button.
                    <form action="<?php echo get_site_url() ?>" class="locate__form">
                        <input type="text" name="s" placeholder="" id="findPastor">
                        <button type="submit" class="btn btn__outline-gold color-grey">Search</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-church" role="tabpanel" aria-labelledby="pills-church-tab"
                    tabindex="0">To find a GCI congregation in Nigeria, Enter the state and click search
                    <form action="<?php echo get_site_url() ?>" class="locate__form">
                        <input type="text" name="s" placeholder="Lagos" id="findChurch">
                        <button type="submit" class="btn btn__outline-gold color-grey">Search</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>

<section class="testimony" id="testimony">
    <div class="section__title locate__title">
        <h1 class="heading-1 color-gold">Testimonies</h1>
        <span class="dash"></span>
        <p class="color-white">Share your experience of the transformative power of Christ’s love</p>
    </div>

    <div class="container mb4">
        <div class="row">
            <div class="col-md-9 m-lg-auto m-sm-auto text-center">
                <div class="slider-pro" id="testimonySlider">
                    <div class="sp-slides testimony__slides">
                        <?php
                        $args = array(
                            'post_type' => 'testimonies',
                            'posts_per_page' => 5,
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) :
                                $query->the_post();
                                ?>
                                <article class="sp-slide testimony__slide">
                                    <div class="sp-slide__text"><?php the_excerpt(); ?>...</div>
                                </article>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <article class="sp-slide testimony__slide">
                                <p class="sp-slide__text">Share your experience of the transformative power of Christ’s love
                                </p>
                            </article>
                            <?php
                        endif;
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="<?= get_post_type_archive_link('testimonies'); ?>"
        class="btn btn-sm btn__outline-gold testimony__button">See all</a>
</section>

<section class="section publications" id="publications">
    <div class="section__title locate__title">
        <h1 class="heading-1 color-blue">Publications / Media</h1>
        <span class="dash"></span>
        <p class="color-grey">Latest source articles & media</p>
    </div>
    <div class="section__content">
        <div class="publications__left">
            <?php dynamic_sidebar('featured_media'); ?>
        </div>
        <div class="publications__right">
            <div class="section__content">
                <div class="publications__container">
                    <ul class="nav nav-pills mb-3 publications__tabs" id="media-tab" role="tablist">
                        <li class="nav-item publications__tabs-first" role="presentation">
                            <p class="nav-link active" id="media-videos-tab" data-bs-toggle="pill"
                                data-bs-target="#media-videos" role="tab" aria-controls="media-videos"
                                aria-selected="true">
                                Latest Videos
                            </p>
                        </li>
                        <li class="nav-item" role="presentation">
                            <p class="nav-link" id="media-articles-tab" data-bs-toggle="pill"
                                data-bs-target="#media-articles" role="tab" aria-controls="media-articles"
                                aria-selected="false">Latest Articles</p>
                        </li>
                    </ul>

                    <div class="tab-content publications__tabs-content" id="media-tabContent">
                        <div class="tab-pane fade show active" id="media-videos" role="tabpanel"
                            aria-labelledby="media-videos-tab" tabindex="0">
                            <?php
                            $args = array(
                                'category_name' => 'videos',
                                'posts_per_page' => 3,
                            );
                            $video_category = get_category_by_slug('videos');

                            if ($video_category) {
                                $video_category_link = get_category_link($video_category->term_id);
                                $category_link = esc_url($video_category_link);
                                }
                            else {
                                $category_link = '#';
                                }

                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    $post_tags = get_the_tags();
                                    $first_tag = ($post_tags) ? reset($post_tags) : null;
                                    ?>
                                    <article class="publications__content">
                                        <i class="bi bi-play-circle publications__icon"></i>
                                        <h3 class="publications__title"><?php the_title(); ?> - <span
                                                class="publications__category">
                                                <?= ($first_tag) ? esc_html($first_tag->name) : ''; ?></span></h3>
                                        <div class="publications__links">
                                            <a href="<?php the_permalink(); ?>" class="publications__link">Watch</a>
                                            <a href="<?= $category_link ?>" class="publications__more"> More videos</a>
                                        </div>
                                    </article>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else : ?>
                                <div>
                                    <p class="fw-bold mb-4 color-blue">No posts found</p>
                                </div>
                                <?php
                            endif;
                            ?>
                        </div>
                        <div class="tab-pane fade" id="media-articles" role="tabpanel"
                            aria-labelledby="media-articles-tab" tabindex="0">
                            <?php
                            $args = array(
                                'category_name' => 'news',
                                'posts_per_page' => 3,
                            );
                            $thepost_category = get_category_by_slug('news');

                            if ($thepost_category) {
                                $thepost_category_link = get_category_link($thepost_category->term_id);
                                $theopost_link = esc_url($thepost_category_link);
                                }
                            else {
                                $category_link = '#';
                                }

                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    $post_tags = get_the_tags();
                                    $first_tag = ($post_tags) ? reset($post_tags) : null;
                                    ?>
                                    <article class="publications__content">
                                        <i class="bi bi-newspaper publications__icon"></i>
                                        <h3 class="publications__title"><?php the_title(); ?> - <span
                                                class="publications__category">
                                                <?= ($first_tag) ? esc_html($first_tag->name) : ''; ?></span></h3>
                                        <div class="publications__links">
                                            <a href="<?php the_permalink(); ?>" class="publications__link">Full details</a>
                                            <a href="<?= $theopost_link ?>" class="publications__more"> More</a>
                                        </div>
                                    </article>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else : ?>
                                <div>
                                    <p class="fw-bold mb-4 color-blue">No posts found</p>
                                </div>
                                <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section events">
    <div class="section__title locate__title">
        <h1 class="heading-1 color-blue">News & Events</h1>
        <span class="dash"></span>
        <p class="color-grey">Latest news and event updates</p>
    </div>
    <div class="section__content">
        <?php
        $args = array(
            'category_name' => 'news',
            'posts_per_page' => 3,
        );
        $video_category = get_category_by_slug('video');

        if ($video_category) {
            $video_category_link = get_category_link($video_category->term_id);
            $category_link = esc_url($video_category_link);
            }
        else {
            $category_link = '#';
            }

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                $post_tags = get_the_tags();
                $first_tag = ($post_tags) ? reset($post_tags) : null;
                ?>
                <article class="section__card">
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
            wp_reset_postdata();
        else : ?>
            <div>
                <p class="fw-bold mb-4 color-blue">No posts found</p>
            </div>
            <?php
        endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>
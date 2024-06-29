<?php

if (post_password_required()) {
    return;
    }
?>
<?php
if (have_comments()) :
    ?>
    <div id="comments" class="description__comments">
        <div class="right-sidebar__title">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === 1) {
                printf(
                    esc_html__('One comment on &ldquo;%1$s&rdquo;', 'trillio'),
                    '<span>' . get_the_title() . '</span>'
                );
                }
            else {
                printf(
                    esc_html(
                        _nx(
                            '%1$s comment on &ldquo;%2$s&rdquo;',
                            '%1$s comments on &ldquo;%2$s&rdquo;',
                            $comments_number,
                            'comments title',
                            'trillio'
                        )
                    ),
                    number_format_i18n($comments_number),
                    '<span>' . get_the_title() . '</span>'
                );
                }
            ?>
        </div>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style' => 'li',
                    'short_ping' => true,
                    'avatar_size' => 42,
                )
            );
            ?>
        </ol>




        <?php
        // If comments are paginated, display navigation.
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
            ?>
            <nav class="comment-navigation" role="navigation">
                <div class="comment-nav-prev"><?php previous_comments_link(esc_html__('&larr; Older Comments', 'trillio')); ?>
                </div>
                <div class="comment-nav-next"><?php next_comments_link(esc_html__('Newer Comments &rarr;', 'trillio')); ?></div>
            </nav>
        <?php endif; ?>
    </div>
<?php endif; ?>
<div id="respond" class="comment-respond">
    <div class="right-sidebar__title">
        Post a comment
    </div>
    <div class="comment-reply">
        <?php cancel_comment_reply_link(); ?>
    </div>
    <form action="<?php echo esc_url(get_bloginfo('wpurl')); ?>/wp-comments-post.php" method="post" id="commentform"
        class="comment-form form">

        <?php if (isset($_GET['replytocom'])) : ?>
            <input type="hidden" name="comment_parent" id="comment_parent" value="<?= $_GET['replytocom']; ?>">
        <?php else : ?>
            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
        <?php endif; ?>
        <input type="hidden" name="comment_post_ID" value="<?php echo esc_attr(get_the_ID()); ?>" id="comment_post_ID">
        <input type="hidden" name="email" value="admin@email.com" id="email">
        <input type="hidden" name="url" value=" " id="url">
        <div class="form__group">
            <input type="text" class="form__input" placeholder="Full name" name="author" id="authur" required>
            <label for="authur" class="form__label">Full name</label>
        </div>
        <div class="form__group">
            <textarea class="form__input" rows="5" id="comment" name="comment" id="comment"
                placeholder="Comment"></textarea>
            <label for="email" class="form__label">Comment</label>
        </div>
        <div class="form__group comment-cookies">
            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"
                checked>
            <label for="wp-comment-cookies-consent">Save my name, email, and website in
                this browser for the next time
                I comment.</label>
        </div>
        <div class="form__group">
            <input name="submit" type="submit" id="submit" class="btn btn--primary submit" value="Post Comment &rarr;">
        </div>
    </form>
</div>
<?php
defined('ABSPATH') || exit;

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>

        <ol class="comment-list">
            <?php
            wp_list_comments('type=comment&callback=format_comment');
            ?>
        </ol>

    <?php endif;
        if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>
        <p class="no-comments text-center">Коментарі закриті.</p>
    <?php endif; ?>
    <div class="comment-top mt-5">
        <?php comment_form([
        'comment_field' => '<div class="form-group">
                                <textarea class="form-control" name="comment" placeholder="Коментар..." required=""></textarea>
                            </div>',

        'fields' => [
            'author' => '<div class="form-group">
                            <input class="form-control" type="text" name="author" placeholder="І\'мя" required="">
                        </div>',
            'email' => '<div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required="">
                        </div>',

        ],

        'class_submit' => 'blog-btn mt-1',
        'label_submit' => 'Опублікувати коментар',
        'title_reply' => 'Залишіть коментар',
        'class_form' => 'comment-bottom agileinfo_mail_grid_right mt-4',
    ]);?>
    </div>

</div>

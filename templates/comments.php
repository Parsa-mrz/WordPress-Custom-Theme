<?php

/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div class="comments-area">
    <h4><?php echo get_comments_number(); ?> نظر</h4>

    <?php
    // Display the comments
    wp_list_comments(array(
        'style'      => 'div',
        'short_ping' => true,
        'avatar_size' => 50,
    ));
    ?>

    <div class="comment-form">
        <h4>جواب دادن</h4>

        <?php
        // Display the comment form
        comment_form();
        ?>
    </div>
</div>
<?php
/**
 * The template for displaying Comments.
 *
 * @package delighted_calligraphy
 */
?>
<div id="comments">
    <?php 
    if ( post_password_required() ) : ?>
        <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'delighted-calligraphy' ); ?></p>
    </div><!-- #comments -->
    <?php return;
    endif;
    ?>

    <?php if ( have_comments() ) : ?>

        <ol class="commentlist">
            <?php
                /* See delighted_calligraphy_comment() in inc/functions/comments.php for more.  */
                wp_list_comments( array( 'callback' => 'delighted_calligraphy_comment' ) );
            ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav id="comment-nav-below">
            <h1 class="assistive-text"><?php _e( 'Comment navigation', 'delighted-calligraphy' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'delighted-calligraphy' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'delighted-calligraphy' ) ); ?></div>
        </nav>
        <?php endif; // check for comment navigation ?>

    <?php
        elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="nocomments"><?php _e( 'Comments are closed.', 'delighted-calligraphy' ); ?></p>
    <?php endif; ?>

    <?php 
    $fields = array (
        'author' => '<div class="comment-form-left"><p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /><label for="author">Name (Required)</label></p>',
        'email' => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /><label for="email">Email (Required)</label></p>',
        'url' => '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /><label for="url">URL</label></p></div>',
    );
    comment_form( 
        array(
             'title_reply' => '<div class="comment-form-title">Leave a Comment</div>',
             'comment_notes_before' => '',
             'label_submit' => 'SUBMIT',
             'comment_field' => '<div class="comment-form-right"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',
             'fields' => $fields
         ) 
    ); ?>

</div><!-- #comments -->
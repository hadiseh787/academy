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
if ( post_password_required() )
    return;
?>

<div class="courses cm-user-list" data-fm-el="commentList">

    <h2>نظرات</h2>
    <?php if ( have_comments() ) : ?>



        <ul class="llu" style="" lt="l" cc="1">
            <?php
            wp_list_comments( array(
                'type'=>'comment',
                'callback'=>'mytheme_comment',
                'avatar_size' => 80
            ));
            ?>
        </ul><!-- .comment-list -->

        <?php
        // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
            ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'twentythirteen' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'twentythirteen' ) ); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>

        <div class="clr"></div>
    <?php endif; // have_comments() ?>

</div>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>

        <?php
        // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
            ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'twentythirteen' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'twentythirteen' ) ); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>
    <?php
    $args = array(
        'prev_text'          => _x( '‹', 'previous set of posts' ),
        'next_text'          => _x( '›', 'next set of posts' ),
        'screen_reader_text' => __( 'Posts navigation' ),
        'aria_label'         => __( 'Posts' ),
        'class'              => 'didar-numbering',
    )
    ?>
    <?php the_posts_pagination( $args ); ?>


</div><!-- #comments -->
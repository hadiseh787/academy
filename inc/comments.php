<?php

// change comment form

function remove_website_field($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_website_field');


// customize didar theme comment list

function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <!-- <?php
            if ( $args['avatar_size'] != 0 ) { ?>
                <div class="div-img-cm">
                    <?php echo get_avatar( $comment, $args['avatar_size'] , '' , '' , ['class'=>'.img-face1'] );?>
                </div>
                <?php
            }
        ?> -->
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>


        <?php
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'دیدگاه شما منتظر تایید ادمین است.' ); ?></em><br/><?php
        } ?>
         <?php
            if ( $args['avatar_size'] != 0 ) { ?>
                <div class="div-img-cm">
                    <?php echo get_avatar( $comment, $args['avatar_size'] , '' , '' , ['class'=>'.img-face1'] );?>
                </div>
                <?php
            }
        ?>
        <div class="content">

        <div class="comment-meta commentmetadata">
            <?php  printf( __( '<cite class="fn">%s</cite> ' ), get_comment_author_link() ); ?>
            <a class="cm-date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                /* translators: 1: date, 2: time */

                printf(
                    __('%1$s '),
                    get_comment_date('Y/m/d')
                );

                ?>
            </a><?php
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>

        <div class="matn-body">

        <?php comment_text(); ?>

        </div>
        <div class="reply"><?php
                comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below' => $add_below,
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth']
                        )
                    )
                ); ?>
        </div><?php
    if ( 'div' != $args['style'] ) : ?>
        </div><?php
    endif;
}
?>
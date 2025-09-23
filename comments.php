<?php

if(post_password_required()){
    return;
}
?>
<div class="comments-area" id="comments">
    <?php
    if(have_commen5ts()):
        ?>
        <h2 class="comments-tittle">
            <?php
            $comments_number=get_comments_number();
            if('1'=== $comments_number){
                printf(_x("Ont througt on %lduo;%s&rdquo;",'comments tittle','twentysixteen'),get_the_title());
            }else{
                printf(
                  _nx(
                    '%1$s thought on %lduo;%2&rdquo;',
                    '%1$s thought on %lduo;%2&rdquo;',
                    $comments_number,
                    'comments tittle',
                    'twentysixteen'
                  ),
                  number_format_i18n($comments_number),
                  get_the_tittle();

                );
            }
            ?>
        </h2>

        <?php the_comments_navigation();?>

        <ol class="comments-list">
            <?php
            wp_list_comments(
                array(
                    'style'=>'ol',
                    'short_ping'=>true,
                    'avatar_size'=>
                )
                );
              ?>
        </ol>

         <?php endif;?>

     <?php
     if(!comments_open() && get_comments_number(get_post_type(),'comments')):?>

        <p class="no-comments"><?php _e('comments are closed.','twentysixteen');?></p>
        <?php endif;?>

        <?php

        comment_form(
            array(
                'title_reply_before'=>'<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after'=>'</h2>'
            )
            );

        ?>
        
     </div>

     
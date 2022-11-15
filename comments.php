<div class="comments-wrapper">

    <div class="comments-header">
        <h2 class="comment-reply-title">
        </h2>
    </div>

    <div class="comments-inner">
        <?php
        if(!have_comments()){
            echo 'No feedback found, please leave a feedback to improve this room! ';
        }else{
            wp_list_comments( array(

                'avatar_size' => '120',
                'style'=>'div',
            )
            );
        }
           

        ?>
    </div>

    <?php
    if(comments_open()){
        comment_form(
            array(
                'class_form'=>'',
                'author'=>'',
                'title_reply_before'=> '<h2 id ="reply-title" class ="comment-reply-title">',
                'title_reply-after' => '</h2>'

            )
        );
    } 
    ?>


</div>
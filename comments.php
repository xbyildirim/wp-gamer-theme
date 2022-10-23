<div id="comments">
    <?php
        if(!have_comments()){
           echo  "<p>Leave a Comment</p>";

        }
        else {
            echo get_comments_number(). " Comments";
        }
    ?>

  <?php

    wp_list_comments(
        array(
            'avatar_size' => 120,
            'style' => 'div',
        )
        

    );

    if(comments_open()){    
        comment_form(
            
        );
    }

  ?> 

    

</div>
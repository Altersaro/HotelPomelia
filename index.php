
<?php get_header()  ?>


<div class="main-wrapper">

        <?php
            if(have_posts()){
    
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
    
    
    
    

        ?>   



<?php  get_footer() ?>

</div>
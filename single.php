

<?php get_header()  ?>

<div class="main-wrapper">

        <?php
            if(have_posts()){
    
                while(have_posts()){
                    the_post();
                    
                    get_template_part('themplate-parts/content','post');
                }
            }
    
    
    
    

        ?>   



<?php  get_footer() ?>

</div>
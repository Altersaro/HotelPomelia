
<?php get_header()  ?>






        <?php
            if(have_posts()){
    
                while(have_posts()){
                    the_post();
                    get_template_part('themplate-parts/content','page');
                }
            }
    
    
    
    

        ?>   




<?php  get_footer() ?>

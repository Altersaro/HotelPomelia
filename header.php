<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head()  ?>
   
</head>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light sticky-top ">
    <div class="container-fluid">
    <?php
        if(function_exists('the_custom_logo')){
            
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
        }
     ?>
    <a class="navbar-brand" href="#"><img src="<?php echo $logo[0] ?>" alt="" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<?php

wp_nav_menu(
    array(
        'menu'=>'primary',
        'container' => 'div',
        'container_class'=> 'collapse navbar-collapse ',
        'container_id'=>'navbarSupportedContent',
        'theme_location' => 'primary',
        'items_wrap'=> '<ul id"" class = " navbar-nav  " >%3$s</ul>'
    )

);

?>




</nav>



            <!-- Carousel-->
            <div class="container-fluid home-img animate__animated animate__fadeInDown">
        <div class="card bg-dark text-white">
          <img src="<?php the_post_thumbnail_url('thumbnail');?>" class="card-img" alt="...">
          <div class="card-img-overlay">
            <h1 class="card-title"><?php the_title()?></h1>
          </div>
        </div>
      </div>
</div>

<?php
 function hotelPomelia_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
 }

 add_action('after_setup_theme','hotelPomelia_theme_support');

 function hotelPomelia_menus(){

    $locations = array(
        'primary' => 'Dekstop Primary Top Navbar'
    );

    register_nav_menus($locations);


 }

add_action('init', 'hotelPomelia_menus');





function hotelPomelia_register_style(){

     $version = wp_get_theme()->get('Version');
    wp_enqueue_style('hotelPomelia-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css", array(), '5.2.2', 'all');
    wp_enqueue_style('hotelPomelia-bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css", array(), '1.9.1', 'all');
    wp_enqueue_style('hotelPomelia-google-fonts', "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap", array(), 'all');
    wp_enqueue_style('hotelPomelia-animate-css', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css", array(), '4.1.1', 'all');
    wp_enqueue_style('hotelPomelia-style', get_template_directory_uri(). "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts','hotelPomelia_register_style');


function hotelPomelia_register_scripts(){

    wp_enqueue_script('hotelPomelia-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js", array(),'5.2.2', true);
    wp_enqueue_script('hotelPomelia-script', get_template_directory_uri() . "/assets/js/script.js", array(),'1.3', true);
    
   
}

add_action('wp_enqueue_scripts','hotelPomelia_register_scripts');

function hotelPomelia_widget_areas(){
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'',
            'after_widget' =>'',
            'name'=>'Navbar area',
            'id'=>'navbar-1',
            'description'=>'Navbar Widget Area'
        ),
    );
}

add_action('widgets_init', 'hotelPomelia_widget_areas');

?>
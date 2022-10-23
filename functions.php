<?php

function xbyildirim_theme_supports(){
    //Dinamik meta title
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'xbyildirim_theme_supports');


function  xbyildirim_menus(){
    $locaitons = array(
        'primary' => "Desktop primary menu",
        'footer' => "Footer menu"
    );
    register_nav_menus($locaitons);
}
add_action('init','xbyildirim_menus');



function xbyildirim_register_styles(){

    $version = wp_get_theme()-> get ('Version');
    wp_enqueue_style('xbyildirim-bootstrap', get_template_directory_uri()."/vendor/bootstrap/css/bootstrap.min.css", array('xbyildirim-unpkg'),$version, 'all');
    
    wp_enqueue_style('xbyildirim-fontawesome', get_template_directory_uri()."/assets/css/fontawesome.css", array(),$version, 'all');
    wp_enqueue_style('xbyildirim-templatemo', get_template_directory_uri()."/assets/css/templatemo-cyborg-gaming.css", array(),$version, 'all');
    wp_enqueue_style('xbyildirim-owl', get_template_directory_uri()."/assets/css/owl.css", array(),$version, 'all');
    wp_enqueue_style('xbyildirim-animate', get_template_directory_uri()."/assets/css/animate.css", array(),$version, 'all');
    
    wp_enqueue_style('xbyildirim-unpkg', "https://unpkg.com/swiper@7/swiper-bundle.min.css", array(),$version, 'all');
    
}

add_action('wp_enqueue_scripts', 'xbyildirim_register_styles');



function xbyildirim_register_scripts(){

    $version = wp_get_theme()-> get ('Version');
    wp_enqueue_script('xbyildirim-jquery',get_template_directory_uri().'/vendor/jquery/jquery.min.js', array(),$version, true );
     wp_enqueue_script('xbyildirim-bootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js', array(), $version,true );
     wp_enqueue_script('xbyildirim-isotope', get_template_directory_uri().'/assets/js/isotope.min.js', array(), $version, true);
     wp_enqueue_script('xbyildirim-owl-carousel', get_template_directory_uri().'/assets/js/owl-carousel.js', array(), $version, true);
     wp_enqueue_script('xbyildirim-tabs', get_template_directory_uri().'/assets/js/tabs.js', array(), $version,true );
     wp_enqueue_script('xbyildirim-popup', get_template_directory_uri().'/assets/js/popup.js', array(), $version,true );
     wp_enqueue_script('xbyildirim-custom', get_template_directory_uri().'/assets/js/custom.js', array(), $version, true);
    
    
}

add_action('wp_enqueue_scripts', 'xbyildirim_register_scripts');


?>
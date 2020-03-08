<?php

    function load_stylesheets(){
        wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('stylesheet');
    }

    add_action('wp_enqueue_scripts', 'load_stylesheets');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'top-menu' =>  'pageMenu',
        )
        );

    function load_scripts(){
        if(is_page('blog') || is_single()){
           wp_enqueue_script('scr1', get_template_directory_uri()."/js/blog-handler.js"); 
        }
        if(is_page('kontakt')){
          wp_enqueue_script('scr2', get_template_directory_uri()."/js/contact-handler.js");  
        }
        if(is_page('oferta')){
            wp_enqueue_script('scr4', get_template_directory_uri()."/js/offer-handler.js"); 
        }
        if(is_front_page()){
            wp_enqueue_script('scr3', get_template_directory_uri()."/js/gsap_handler.js");
            wp_enqueue_script('scr5', get_template_directory_uri()."/js/single-post-handler.js");
        }
        

    }
    add_action('wp_enqueue_scripts', 'load_scripts');
?>
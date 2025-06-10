<?php

function load_scripts(){
    wp_enqueue_style(
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory().'style.css'),'all'
    );

    wp_enqueue_script('dropdown',get_template_directory(),'/js/dropdown.js',array(),'1.0,',false);


 

}


add_action('wp_enqueue_scripts','load_scripts');

function config() {
    register_nav_menus(
        array(
            'wp_devs_main_menu'=>'Main Menu'
              'wp_devs_footer_menu'=>'Footer Menu'
        )
        );

        $ard=array(
            'height'=>225,
            'width'=>1920
        );

        add_theme_support('custom-header',$args);
        add_theme_support('post_thumbnails',);
        add_theme_support('custom-logo',array(
            'width'=>200,
            'height'=>110,
            'flex-height'=>true,
            'flex-width'=>
         ));
         add_theme_support('automatic-feed-links');
         add_theme_support('html5',array('comment-list','coment-form','search-form','gallery','caption','style','script'));
         add_theme_support('title-tag');


        }

        add_action('after_setup_theme','config',0);





?>
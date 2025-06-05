<?php

function load_scripts(){
    wp_enqueue_style(
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory().'style.css'),'all'
    );


 

}


add_action('wp_enqueue_scripts','load_scripts');



?>
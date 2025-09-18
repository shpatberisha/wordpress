<?php

function wpdevs_customizer( $wp_customize){
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'=>'Copyright Settings',
            'desciption'=>'Copyright Settings'
        )
        );

        $wp_customize->add_settings(
            'set_copyright',
            array(
                'type'=>'theme_mod',
                'default'=>'Copyright X - All Rights Reverved',
                'sanitize_callback'=>'sanitize_text_field'
            )
            );
            $wp_customize->add_control(
              'set_copyright',
              array(
                'label'=>'Copyrigyht Information',
                'despription'=>'Please,type your copyright here',
                'section'=>'sec_copyright',
                'type'=>'text'
              )
              );
}

add_action('customize_register','wpdevs_customizer');


?>
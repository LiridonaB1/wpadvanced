<?php
 function wpdevs_customizer($wp_customize){

    $wp_customize -> ass_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        )
        );


        $wp_customize -> add_settings(

            'sec_copyright' ,
            array(

                'type' => 'theme_mod',
                'default' => 'Copyright X - All rights Reserved',
                'sanitize_callback'  => 'sanitize_text_field'
            )
            );

             $wp_customize -> add_control(
                'sec_copyright' ,
                array(
                    'label' => 'Copyright Information',
                    'description' => 'Please, type your copyright here',
                    'section' => 'sec_copyright',
                    'type' => 'text'
                )
                );
    }


add_section('customize_register','wpdevs_customizer');


?>
<?php 
function wpdevs_customizer($wp_customize){

    // add section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'copyright settings',
            'description' => ' copyright settings',
            
        )
        );

        $wp_customize->add_setting(

            'set_copyright',
            array(
                
                'type' => 'theme_mod',
                'default' => 'copyright X -all rights reserved',
                'sanitize_callback' => 'sanitize_text_field'
                
                
               
            )
            );

         $wp_customize->add_control(
            'set_copyright',
            array(
                'label' => 'copyright information',
                'description' => 'please, type your copyright here',
                'section' => 'sec_copyright',
                'type' => 'text'
            )
            );
       
}


add_action('customize_register','wpdevs_customizer');





?>
<?php
    function wpdevs_costumizer($wp_costumize){

        $wp_costumize -> add_section(
            'sec_copyright',
            array(
                'title' => 'Copyright Settings',
                'description' => 'Copyright Settings'
            )
            );

            $wp_costumize -> add_settings(
                'sec_copyright',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Copyright X-All rights Reserveed',
                    'sanitize_callback' => 'sanitize_text_field'
                )
                );


                  $wp_costumize -> add_control(
                     'sec_copyright',
                     array(
                        'label' => 'Copyright Information',
                        'description' => 'Please, type your copyright here',
                        'section' => 'sec_copyright',
                        'type' => 'text'
                     )
                     );
    }


add_action('costumize_register',' wpdevs_costumizer');

?>
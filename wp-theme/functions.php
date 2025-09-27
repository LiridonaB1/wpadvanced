<?php
require get_template_directory() . '/inc/customizer.php';
function load_scripts(){
<<<<<<< HEAD

    wp_enqueue_style('style',get_template_directory_uri().'/style.css', false,'1.1','all');
    wp_enqueue_style('script',get_template_directory_uri().'/js/script.js',array(),'1.1',true);
    wp_enqueue_style('bootstrap_style',get_template_directory_uri().'/css/bootstra.min.css',array(),'1.1',true);
    wp_enqueue_style('bootstrap_js',get_template_directory_uri().'/js/bootstrap.bundle.js',array(),'1.1',true);


    wp_enqueue_style('wp_style',get_template_directory_uri()."/style.css",false,'1.1','all');
     wp_enqueue_style('bootsrap_style',get_template_directory_uri()."/css/bootstrap.min.css",false,'1.1','all');

    wp_enqueue_script('wp_script',get_template_directory_uri()."/js/script.js",false,'1.1',true);
    wp_enqueue_script('bootstrap_js',get_template_directory_uri()."/js/bootstrap.bundle.min.js",false,'1.1',true);

}
=======
    wp_enqueue_style('style',get_template_directory_uri()."/style.css",false,'1.1','all');
     

    wp_enqueue_script('main',get_template_directory_uri()."/js/main.js",array(),'1.0',false);
    
} 
>>>>>>> 85bd0740a7fa3d3f951bf3de66afc6b1744fb2c8
add_action('wp_enqueue_scripts','load_scripts');


function config() {


    register_nav_menus(

        array(
            'wp_devs_main_menu'=> 'Main Menu',
            'wp_devs_footer_menu'=> 'Footer Menu',
        )
        );

        $args = array(
            'height' => 225,
            'width' => 1920,
        );
        add_theme_support('custom-header',$args);
        add_theme_support('post-thumbnails');
        add_theme_support('cusotm-logo', array(
            'height' =>100,
            'width' => 200,
            'flex-height' => true,
            'flex-width' => true,
        ));

        add_theme_support('automatic-feed-links');
        add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption','style','script'));
        add_theme_support('title-tag');
}



add_action ('after_setup_theme', 'config',0);

   register_nav_menus(
  
      array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu',
      )
      );

    $args = array(
        'height' => 225,
        'width' => 1920,
    );
    add_theme_support('custom-header',$args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
    'height' =>110,
    'width' => 200,
    'flex-height' => true,
    'flex-width' => true,
  ));

    add_theme_support('automatic-feed-links');
    add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption','style','script'));
   add_theme_support('title-tag');


add_action('after_setup_theme', 'config',0);

function wpdevs_sidebars() {
  register_sidebar(
     array(
       'name' => 'Blog Sidebar',
       'id' => 'sidebar-blog',
       'description' => 'This is the Blog Sidebar.You can add your widgets here.',
       'before_widget' => '<div class="wiget-wrapper">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
     )
  );

   register_sidebar(
     array(
       'name' => 'Service 1',
       'id' => 'services-1',
       'description' => 'First service area',
       'before_widget' => '<div class="wiget-wrapper">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
     )
  );
   register_sidebar(
     array(
       'name' => 'Service 2',
       'id' => 'services-2',
       'description' => 'Second service area',
       'before_widget' => '<div class="wiget-wrapper">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
     )
  );
     register_sidebar(
     array(
       'name' => 'Service 2',
       'id' => 'services-3',
       'description' => 'Third service area',
       'before_widget' => '<div class="wiget-wrapper">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
     )
  );
}
add_action('widgets_init','wpdevs_sidebars');

<<<<<<< HEAD

?>
=======
?>
>>>>>>> 85bd0740a7fa3d3f951bf3de66afc6b1744fb2c8

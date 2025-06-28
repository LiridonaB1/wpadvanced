<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
<<<<<<< HEAD
     wp_head();

=======
    wp_head();
>>>>>>> 543f94dd56e184567e949a9ea15af2bf6e5d2241

    ?>

    <?php
  if(is_front_page()) {
    $ds = array('ds-theme', 'my-class');
  }else {
    $ds = array('no-ds-theme');
  }
    ?>
</head>
<<<<<<< HEAD
<body <?php body_class($ds); ?>>
    <?php
    wp_nav_menu(array(
        'theme_location'=>'primary'
    ));
    ?>
=======
<?php
 if(is_front_page()) {
    $ds = array('ds-theme', 'my-class');
 }else {
    $ds = array('no-ds-theme');
 }
?>
<body <?php body_class($ds )?>>

   <?php

     if(!is_page('landing-page')): ?>
     <section class="menu-area">

    <div class="container">
        <nav class="main-menu">
            <button class="check-button">
                <div class="menu-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <?php  wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth'=> 2));?>
        </nav>
    </div>
     </section>

     <?php endif; ?>
>>>>>>> 543f94dd56e184567e949a9ea15af2bf6e5d2241

<<<<<<< HEAD
<?php 
/* Template Name: About-me Template*/
get_header(); ?>
<?php
if(have_posts()):
    while(have_posts()): the_post(); ?>
        <h1><?php the_title();?></h1>
        <small> Posted on: <?php the_time('F j,Y')?> at <?php the_time('g:i a')?> in <?php the_category();?></small>
        
        <p><?php the_content();?></p>
    <?php endwhile; ?>
    <?php endif; ?>


<?php  get_footer(); ?>

=======

<?php 
/* Template Name: About-me Template*/
get_header(); ?>

<?php

   if(have_posts()):
   while(have_posts()): the_post(); ?>
   <h1><?php the_title(); ?></h1>
    <small>posted on: <?php the_time('F j,Y') ?> at <?php the_time('g:i a')?> in <?php the_category(); ?></small>
   <p><?php the_content(); ?></p>
   <?php endwhile; ?>
   <?php endif; ?>
<?php  get_footer(); ?>
>>>>>>> f0e4dce08560f8b770c1e35cd1101e2d46511a83

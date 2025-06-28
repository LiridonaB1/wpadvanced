<<<<<<< HEAD
<<<<<<< HEAD
<?php
/* Template Name: About-me Template*/
get_header(); ?>
<?php
if(have_posts()):
    while(have_posts()): the_post();?>
    <h1><?php the_title(); ?></h1>
    <small> Posted on: <?php the_time ('F j,Y'); ?> at <?php the_time('g:i a');?> in <?php the_category();?></small>

    <p><?php the_content();?></p>
    <?php endwhile; ?>
    <?php endif; ?>
; 
<?php get_footer(); ?>
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
>>>>>>> 0828cdc4437de734a4f1bfb68b27cce5418f500d
=======
<?php
/*
Template Name: About Page
*/
get_header();
?>
 
<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="about-hero">
            <div class="container">
                <h1>About Us</h1>
                <p>Welcome to our tech corner — where innovation meets explanation.</p>
            </div>
        </section>
 
        <section class="about-intro">
            <div class="container">
                <h2>Who We Are</h2>
                <p>We are a team of developers, engineers, and tech enthusiasts who love to write about the fast-moving world of technology. From in-depth tutorials and product reviews to AI breakthroughs and coding best practices, we bring clarity to complexity.</p>
            </div>
        </section>
 
        <section class="about-mission">
            <div class="container">
                <h2>Our Mission</h2>
                <p>Our goal is simple: to empower curious minds and passionate techies by delivering accurate, useful, and accessible content. Whether you're a seasoned developer or just getting started, we aim to be your go-to resource for tech knowledge.</p>
            </div>
        </section>
 
        
    </main>
</div>
 
>>>>>>> 543f94dd56e184567e949a9ea15af2bf6e5d2241

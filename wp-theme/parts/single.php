<?php get_header(); ?>

<div id="primary">

   <div id="main">
   
 <?php 
 
  while(have_posts()):
    get_template_part('parts/content', 'single');
 ?>
 <div class="wpdevs-pagination">
    <div class="pages next">
      <?php next_post_link('&laqou; %link');   ?>
</div>

   <div class="pages previus">

       <?php prevoius_post_link('%link &raqou;'); ?>
   </div>


 </div>
 <?php  
   if(comments_open() || get_comments_number()) {

    comments_template();
   }
endwhile;

 ?>


   </div>
</div>
<?php  get_header(); ?>

<div id="primary">
   <div id="main">

     <div class="container">

     <?php   
       while(have_posts()):
        get_template_part('parts/content', 'single');
     ?>
     <div class="wpdevs-pagination">

          <div class="pages next">
              <?php next_post_link('&laqou; %link');  ?>
           </div>

           <div class="pages prevoius">
              <?php previous_post_link('%link &raqou;');  ?>
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
</div>


<?php get_footer();  ?>

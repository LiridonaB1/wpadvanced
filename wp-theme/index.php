
<?php  get_header(); ?>
<<<<<<< HEAD

<div id="content" class="site-content">
   <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <h1>Blog</h1>
        <div class="container">
         <div class="blog-items">

         <?php  
         
         if(have_posts()):
            while(have_posts()): the_post();
            get template_part('parts/content');
         endwhile;
         
         ?>

        <div class="vpdevs-pagination">
         <div class="pages new">
          
         <?php previous_posts_link("<<Newer posts"); ?>

         </div>

         <div class="pages old">
          
         <?php previous_posts_link("<<Older posts"); ?>
         
         </div>
        </div>

         <?php
         else:
            ?>
            <p>Nothing yet to be displayed!</p>
            <?php endif; ?>
         </div>
         <?php get_sidebar(); ?>

        </div>

      </main>

</div>

</div>





=======


<div id="content" class="site-content">
   <div id="primary" class="content-area">
      <main id="main" class="site-main">
         <h1>Blog</h1>
         <div class="container">
           <div class="blog-items">

               <?php
               
                 if(have_posts()):
                    while(have_posts()): the_post();
                    get_template_part('parts/content');
                    endwhile;
               ?>

                <div class="wpdevs-pagination">
                    <div class="pages new">

                       <?php previous_posts_link("<< Newer posts"); ?>
                    </div>
                    <div class="pages old">

                       <?php previous_posts_link("<< Older posts"); ?>
                    </div>
                </div>
                 <?php
                   else:
                 ?>
                 <p>Nothing yet to be displayed!</p>
                 <?php endif; ?>
           </div>
              <?php get_sidebar();  ?>
         </div>
      </main>

   </div>
</div>



>>>>>>> 543f94dd56e184567e949a9ea15af2bf6e5d2241
<?php  get_footer(); ?>

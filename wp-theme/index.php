
<?php  get_header(); ?>

<<<<<<< HEAD
<?php

if(have_posts()):
    while(have_posts()): the_post(); ?>
        <h1><?php the_title();?></h1>
        <small> Posted on: <?php the_time('F j,Y')?> at <?php the_time('g:i a')?> in <?php the_category();?></small>
        <div><?php the_post_thumbnail(array(200,200));?></div>
        <p><?php the_content();?></p>
    <?php endwhile; ?>
    <?php endif; ?>
<?php  get_footer(); ?>

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



<?php  get_footer(); ?>
>>>>>>> f0e4dce08560f8b770c1e35cd1101e2d46511a83

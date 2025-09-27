<?php get_header(); ?>

<div id="primary">
<<<<<<< HEAD
    <div id="main">
        <div class="container">
            <h1>Search results for: <?php echo get_search_query();  ?></h1>

            <?php
            
            get_search_form();

            while(have_posts()):
                the_post();
                get_template_part('part/content' , 'search');

            endwhile;
            the_posts_pagination();
            
            
            ?>

        </div>
    </div>
</div>




<?php get_footer(); ?>
=======
     <div id="main">
         <div class="container">

         <h1>Search results for: <?php echo get_search_query();  ?></h1>

         <?php


          get_search_form();

          while(have_posts()):
            the_post();
            get_template_part('parts/content' , 'search');

          endwhile;
          the_posts_pagination();
          ?>
         </div>
     </div>
</div>
<?php get_footer(); ?>
>>>>>>> 85bd0740a7fa3d3f951bf3de66afc6b1744fb2c8

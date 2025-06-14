<?php
<<<<<<< HEAD
/*
 Template Name: General Template 
*/
?>


=======
 /*
  Template Name: General Template
 */
?>

>>>>>>> f0e4dce08560f8b770c1e35cd1101e2d46511a83
<?php get_header();?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="general-template">
                    <?php
<<<<<<< HEAD
                    if(have_post()):
                        while(have_post()): the_post();
                    ?>

                    <article>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </article>
                    <?php
                    endwhile;
                else:
                    ?>
                    <p>nothing yet to display</p>
=======
                      if(have_posts()):
                        while(have_posts()): the_post();
                    ?>
                    <article>
                      <h1><?php the_title(); ?></h1>
                      <?php the_content(); ?>
                    </article>
                    <?php 
                    endwhile;
                else:
                    ?>
                    <p>Nothing yet to be displayed!</p>
>>>>>>> f0e4dce08560f8b770c1e35cd1101e2d46511a83
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer();?>
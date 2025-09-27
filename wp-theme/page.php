<<<<<<< HEAD
<?php  get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->widht; ?>" alt="Header photo">

<div id="id" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
            <div class="page-item">                
                <?php
                
                while(have_posts()): the_post();
                get_template_parts('parts/content','page');
                 
                if(comments_open() || get_comments_number()){
                    comments_template();
                }

                endwhile;
                ?>

            </div>
            </div>
        </main>
    </div>
</div>
=======
<?php get_header(); ?>


        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="page-item">
                            <?php 
                                while( have_posts() ) : the_post();
                                get_template_part( 'parts/content', 'page' );

                                if( comments_open() || get_comments_number() ){
                                    comments_template();
                                }
                                endwhile;
                            ?>                                
                        </div>
                    </div>
                </main>
            </div>
        </div>
>>>>>>> 85bd0740a7fa3d3f951bf3de66afc6b1744fb2c8
<?php get_footer(); ?>
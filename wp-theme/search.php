<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="contanier">

            <h1>Search results for: <?php echo get_search_query(); ?></h1>

            <?php


            get_search_query();
            
            while(have_posts()):
                the_posst();
                get_template_part('parts/conntent' , 'search');

            endwhile;
            the_posts_pagination();
             ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
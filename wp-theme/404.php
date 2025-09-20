<?php get_header(); ?>

    <div id="content" class="site-content">
        <main id="main" class="site-main" >
            <div class="container">
                <div class="error-404">

                <header>

                        
                            <h1>page not found!</h1>
                            <p>the page you are looking for does not exist. it might have been moved or deleted.</p>
                     </header>

                     <div class="error">

                     <p>how about doing a search </p>
                        <?php get_search_form(); ?>
                        <?php  
                        
                        the_widget( 
                        'WP_Widget_Recent_Posts', 
                         array(
                            'title' => 'latest posts',
                            'number' => 3
                        )
                        );
                        
                        
                        
                        ?>
                     </div>
                
            </div>
       </div>        
    </div>





<?php get_footer(); ?>
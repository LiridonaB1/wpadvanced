<article class="latest-news">

<<<<<<< HEAD

<? if(has_post_thumbnail());  ?>

    <a href="   <?php the_permalink();?>"> <?php the_post_thumbnail("medium"); ?> </a>
    <?php endif ?>
    
 <h3>   <a href="<?php the_permalink();?>"> <?php the_title();?>  </a> </h3>

 <div class="meta-info">
    <p>
        by <span> <?php the_author_posts_link(); ?> </span>

        <?php if(has_category()): ?>
            Categories: <span> <?php the_category(''); ?> </span>
              <?php endif ?>

              <?php if(has_tah()): ?>
            Tags: <span> <?php the_tags('', ','); ?> </span>
              <?php endif ?>

    </p>

    <p> <span> <?php echo get_the_date();  ?></span></p>
 </div>


 <?php the_excerpt(); ?>
    
=======
<?php  if(has_post_thumbnail());   ?>

    <a href=" <?php  the_permalink(); ?>">  <?php  the_post_thumbnail("large");?> </a>

<?php endif; ?>
<h3> <a href=" <?php  the_permalink(); ?>">  <?php  the_title();?> </a>  </h3>

<div class="meta-info">

  <p> 

    by <span> <?php the_author_posts_link();  ?> </span>

    <?php if(has_category()): ?>
        Categories: <span> <?php the_category('');  ?>  </span>
        <?php  endif; ?>


    <?php if(has_tag()): ?>
        Tags: <span> <?php the_tags('', ',');  ?>  </span>
        <?php  endif; ?>
  </p>

<p> <span> <?php echo get_the_date(); ?>  </span></p>

</div>

<?php the_excerpt();  ?>

>>>>>>> 772146c533c821ddcd3487875544e2ddde131220

</article>
<?php get_template_part('templates/page', 'header'); ?>

<section class="vijesti">
   <div class="container">
<h1 class="heading">Rezultati pretraživanja</h1>
  <?php get_search_form(); ?>
        <div class="posts">
            
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/content-home', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
            <?php endwhile; ?>
    </div><?php the_posts_navigation(); ?>
        </div>
    
</section>


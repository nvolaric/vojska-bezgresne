<article <?php post_class( 'col-xs-6 col-md-3' ); ?>>
    <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()) : ?>
           <div class="post-image">
                  <?php the_post_thumbnail('home-thumb'); ?>
                 <div class="datum">
                     <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('j.n.Y. H:i'); ?> </time>
                 </div>
           </div>
        <?php else : ?> 
           <div class="post-image">
                  <img src="<?php bloginfo('template_url') ?>/assets/images/no-thumb.jpg" />
                 <div class="datum">
                     <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('j.n.Y. H:i'); ?> </time>
                 </div>
           </div>
           <?php endif; ?>
    <h2 class="entry-title"><?php the_title(); ?></h2>
      </a> 
</article>
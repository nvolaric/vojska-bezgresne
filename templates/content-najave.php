<article <?php post_class( 'col-xs-12' ); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="datum-najave">
            <?php   $najava_date = get_post_meta( get_the_ID(), 'najava_datum', true ); echo $najava_date; ?>
        </div>
        <div class="naslov-najave">
            <h2><?php the_title() ?></h2>
        </div>
      </a> 
</article>





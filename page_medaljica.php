<?php
/**
 * Template Name: Medaljica
 *
 * @package WordPress
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class('medaljica'); ?>>
             <header>
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
			<div class="entry-content">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;
'); ?>


			</div>
		<?php endwhile; endif; ?>

</article>



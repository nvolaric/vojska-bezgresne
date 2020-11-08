<?php /*

<p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a> </p> 'php */ ?>
<div class="entry-meta">
    <time class="updated" datetime="<?= get_post_time('c', true); ?>"><span>Objavljeno:</span> <?= get_the_date('j.n.Y. H:i'); ?> </time>
    <?php // the_category('<span>&bull;</span>'); ?>
</div>

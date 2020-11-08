<?php use Roots\Sage\Titles; ?>
<?php if ('page' == get_option('show_on_front')) : ?>

<?php elseif(is_home() == false || is_front_page() == false ) : ?>
<?php endif; ?>
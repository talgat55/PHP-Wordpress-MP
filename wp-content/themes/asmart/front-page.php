<?php
/*
 * Template Name: Главная
 */
get_header();


?>

    <h1 class="hide-title"><?= bloginfo('name'); ?></h1>
<?php get_template_part('inc/homeSlider'); ?>
<?php get_template_part('inc/homeCatBlock'); ?>
<?php get_template_part('inc/homePopular'); ?>
<?php get_template_part('inc/homeService'); ?>
<?php get_template_part('inc/homeNewsPromo'); ?>

<?php get_footer();
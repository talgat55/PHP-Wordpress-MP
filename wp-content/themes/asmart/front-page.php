<?php
/*
 * Template Name: Главная страница
 */
//$firstBlock = get_field('show_first_block');
//$serviceBlock = get_field('show_services');
//$worksBlock = get_field('show_works');
//$reviewBlock = get_field('show_review');
//$advBlock = get_field('show_adw_block');
//$clientsBlock = get_field('show_clients');
//$feedbackBlock = get_field('show_feedback');
//$mapBlock = get_field('show_map');

get_header(); ?>

    <h1 class="hide-title"><?= bloginfo('name'); ?></h1>
<?php get_template_part('inc/homeSlider'); ?>
<?php get_template_part('inc/homeCatBlock'); ?>
<?php get_template_part('inc/homePopular'); ?>



<?php get_footer();

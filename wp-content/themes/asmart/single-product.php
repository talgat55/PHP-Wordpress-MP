<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

?>
    <div id="primary" class="  page-main   ">
        <?php get_template_part('inc/breadsrumb'); ?>
        <div class="container  single-product_wrapper">
            <div class="row ">
                <div class="col row-sidebar-catalog">
                    <?php   woocommerce_product_category(); ?>
                </div>
                <div class="col-12 col-lg-9  single-product-row">
                    <?php get_search_form(); ?>
                    <?php while (have_posts()) :   the_post(); ?>
                        <?php the_content(); ?>

                    <?php endwhile;  ?>
                </div>
            </div>
        </div>

    </div>
<?php get_footer();

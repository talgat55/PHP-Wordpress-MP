<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php get_template_part('inc/breadsrumb'); ?>
    <div id="primary" class="content-area page-main ">
        <div class="container">
            <div class="row flex">

                <div class="col-sm-12 col-xs-12 <?php  if(is_page( 'cart' )){   echo ' row-cart';   } ?>   ">
                    <div class="content">
                        <?php
                        while (have_posts()) : the_post();

                            the_content();
                        endwhile;
                        ?>
                    </div>

                </div>


            </div>

        </div>
    </div>
<?php get_footer();

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
    <div id="primary" class="  page-main  single-page-news">
        <?php get_template_part('inc/breadsrumb'); ?>
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <?php while (have_posts()) :
                        the_post(); ?>
                        <div class="single-page-news_content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>

                <?php
                $args = array(
                    'post__not_in' => array($post->ID),
                    'posts_per_page' => 8, // Number of related posts that will be shown.
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'caller_get_posts' => 1
                );

                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    ?>
                    <div class="single-news__bottom-block w-100">
                        <h3 class="title-third">
                            Другие новости
                        </h3>
                        <ul class="single-page-news_related-list row">
                            <?php
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                get_template_part('inc/news-item');
                            }
                            ?>
                        </ul>
                    </div>
                    <?php
                }
                wp_reset_query(); ?>
                </div>
            </div>
        </div>

    </div>
<?php get_footer();

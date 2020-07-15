<?php
/*
 * Template Name: Страница документов
 */
get_header();


?>
<?php get_template_part('inc/breadsrumb'); ?>
    <section class="page-docs">
        <div class="container">
                <ul class="page-docs__items-list  row">
                    <?php
                    $arg = [
                        'posts_per_page' => -1,
                        'post_type' => 'docs',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'status' => 'publish'
                    ];
                    $the_query = new WP_Query($arg);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;
                        ?>
                        <li class="page-docs__item  col-12 col-lg-4">
                            <a class="page-docs__link" href="<?php echo get_the_permalink(); ?>" >
                                <?php echo get_the_title(); ?>
                            </a>
                        </li>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
        </div>

    </section>
<?php get_footer();

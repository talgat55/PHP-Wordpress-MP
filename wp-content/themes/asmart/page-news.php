<?php
/*
 * Template Name: Страница Новостей и статей
 */
get_header();
$categories = get_categories();
?>

<?php get_template_part('inc/breadsrumb'); ?>

<section class="news-articles-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="news-articles__cats  row  d-lg-flex  align-items-center">
                    <?php
                    $i = 0;
                    $activeTermId = '';
                    foreach ($categories as $value): ?>
                        <li class="home-news-articles__cats-row col-12 col-lg-6">
                            <a
                                href="#"
                                class="news-articles__cats-item   <?php if ($i == 0) {
                                    echo 'active';
                                    $activeTermId = $value->term_id;
                                } ?>"
                                data-id="<?php echo $value->term_id; ?>">
                                <?php echo $value->name; ?>
                            </a>
                        </li>
                        <?php $i++; endforeach; ?>
                </ul>
                <ul class="news-articles__product-list row">
                    <?php
                    $arg = [
                        'posts_per_page' => 8,
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'cat' => $activeTermId,
                        'status' => 'publish'
                    ];
                    $the_query = new WP_Query($arg);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;
                        get_template_part('inc/news-item');

                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
                <div class="load-more__row d-flex justify-content-center">
                    <a href="#" class="link load-more" data-page="2">
                        ПОКАЗАТЬ ЕЩЕ
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer();

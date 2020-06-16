<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 16.06.20
 * Time: 0:28
 */

$categories = get_categories();

?>
<section class="home-news-articles">
    <div class="container">
        <div class="row">
            <div class="col-12  d-flex w-100  align-items-start  justify-content-between">
                <h2 class="main-title">
                    Новости и статьи
                </h2>
                <ul class="home-news-articles__cats  d-lg-flex">
                    <?php
                    $i = 0;
                    $activeTermId = '';
                    foreach ($categories as $value): ?>
                        <li>
                            <a
                                    href="#"
                                    class="<?php if ($i == 0) {
                                        echo 'active';
                                        $activeTermId = $value->term_id;
                                    } ?>"
                                    data-id="<?php echo $value->term_id; ?>">
                                <?php echo $value->name; ?>
                            </a>
                        </li>
                        <?php $i++; endforeach; ?>
                </ul>
            </div>
            <div class="col-12 home-news-articles__wrapper">
                <div class="position-relative clear clearfix">
                    <?php foreach ($categories as $value): ?>


                        <div class="home-news-articles__content   <?php if ($activeTermId == $value->term_id) {
                            echo 'active';
                        } ?>  <?php echo $value->term_id ?>">
                            <ul class="home-news-articles__carousel">
                                <?php

                                $arg = [
                                    'posts_per_page' => 9,
                                    'post_type' => 'post',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'status' => 'publish'
                                ];
                                $the_query = new WP_Query($arg);
                                while ($the_query->have_posts()) :
                                    $the_query->the_post();
                                    $post_id = $the_query->post->ID;

                                    ?>
                                    <li class="home-news-articles__item-carousel">
                                        <div class="home-news-articles__item_wrapper">
                                            <div class="home-news-articles__image-carousel">
                                                <img
                                                        src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "home-news-articles")[0]; ?>"
                                                />
                                            </div>
                                            <div class="home-news-articles__item-content">
                                                <h3 class="home-news-articles__title-carousel">
                                                    <?php echo get_the_title($post_id); ?>
                                                </h3>
                                                <div class="home-news-articles__text-carousel">
                                                    <?php echo mb_strimwidth(get_the_content($post_id), 0, 150, "..."); ?>
                                                </div>
                                                <a class="home-news-articles__link"
                                                   href="<?php echo get_the_permalink($post_id); ?>">
                                                    Подробнее
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                endwhile;
                                wp_reset_query();
                                ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

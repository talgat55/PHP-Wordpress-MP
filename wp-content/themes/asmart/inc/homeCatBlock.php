<?php
/**
 * Created by PhpStorm.
 * Date: 14.06.2020
 * Time: 1:59
 */
$taxonomy = 'product_cat';
$orderby = 'name';
$show_count = 0;      // 1 for yes, 0 for no
$pad_counts = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title = '';
$empty = 0;

$args = array(
    'taxonomy' => $taxonomy,
    'orderby' => $orderby,
    'show_count' => $show_count,
    'pad_counts' => $pad_counts,
    'hierarchical' => $hierarchical,
    'title_li' => $title,
    'hide_empty' => $empty
);
$all_categories = get_categories($args);
$classArray = ['one', 'two', 'tree', 'four', 'five'];
?>
<section class="home__product-list-cat">
    <div class="container">
        <div class="row">
            <h2 class="main-title">
                Медицинское оборудование
            </h2>
            <div class="products-cat-list w-100">
                <?php foreach ($all_categories as $key => $prod_cat) :
                    $cat_thumb_id = get_woocommerce_term_meta($prod_cat->term_id, 'thumbnail_id', true);
                    $shop_catalog_img = wp_get_attachment_image_src($cat_thumb_id, 'shop_catalog');
                    $term_link = get_term_link($prod_cat, 'product_cat'); ?>
                    <div class="products-cat__item <?php echo $classArray[$key]; ?>">
                        <a href="<?php echo $term_link; ?>">
                                <img class="lazy"
                                     src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png'); ?>"
                                     data-src="<?php echo $shop_catalog_img[0]; ?>"
                                     alt="<?php echo $prod_cat->name; ?>"/>
                                <h3 class="products-cat__title">
                                    <?php echo $prod_cat->name; ?>
                                </h3>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="w-100 d-flex justify-content-center">
                <a href="/" class="link">
                    ПОКАЗАТЬ ВСЮ ПРОДУКЦИЮ
                </a>
            </div>
        </div>
    </div>
</section>

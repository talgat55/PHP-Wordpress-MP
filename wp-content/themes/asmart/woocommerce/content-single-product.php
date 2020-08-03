<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

$gruppa = get_field('gruppa');
$obem_obrazcza = get_field('obem_obrazcza');
$diametr_apertury = get_field('diametr_apertury');
$displej = get_field('displej');
$vvodvyvod_dannyh = get_field('vvodvyvod_dannyh');
$pechat = get_field('pechat');
$gabarity = get_field('gabarity');
$ves = get_field('ves');
$linked_products = get_field('linked_products');


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

    <?php
    /**
     * Hook: woocommerce_before_single_product_summary.
     *
     * @hooked woocommerce_show_product_sale_flash - 10
     * @hooked woocommerce_show_product_images - 20
     */
    do_action('woocommerce_before_single_product_summary');
    ?>

    <div class="summary entry-summary">
        <h1>
            <?php echo get_the_title(); ?>
        </h1>
        <div class="meta__info">
            <? if (!empty($gruppa)): ?>
                <div class="meta-info__item">
                    <div class="meta__info_title">Группа:</div>
                    <div class="meta__info_value"><?php echo $gruppa; ?></div>
                </div>
            <?php endif; ?>
            <? if (!empty($obem_obrazcza)): ?>
                <div class="meta-info__item">
                    <div class="meta__info_title">Объем образца:</div>
                    <div class="meta__info_value"><?php echo $obem_obrazcza; ?></div>
                </div>
            <?php endif; ?>
            <? if (!empty($diametr_apertury)): ?>
                <div class="meta-info__item">
                    <div class="meta__info_title">Диаметр апертуры:</div>
                    <div class="meta__info_value"><?php echo $diametr_apertury; ?></div>
                </div>
            <?php endif; ?>
            <? if (!empty($displej)): ?>
                <div class="meta-info__item">
                    <div class="meta__info_title">Дисплей:</div>
                    <div class="meta__info_value"><?php echo $displej; ?></div>
                </div>
            <?php endif; ?>
            <? if (!empty($vvodvyvod_dannyh)): ?>
                <div class="meta-info__item">
                    <div class="meta__info_title">Ввод/вывод данных:</div>
                    <div class="meta__info_value"><?php echo $vvodvyvod_dannyh; ?></div>
                </div>
            <?php endif; ?>
            <? if (!empty($pechat)): ?>
                <div class="meta-info__item">
                    <div class="meta__info_title">Печать:</div>
                    <div class="meta__info_value"><?php echo $pechat; ?></div>
                </div>
            <?php endif; ?>
            <? if (!empty($gabarity)): ?>
                <div class="meta-info__item">
                    <div class="meta__info_title">Габариты:</div>
                    <div class="meta__info_value"><?php echo $gabarity; ?></div>
                </div>
            <?php endif; ?>
            <? if (!empty($ves)): ?>
                <div class="meta-info__item">
                    <div class="meta__info_title">Вес:</div>
                    <div class="meta__info_value"><?php echo $ves; ?></div>
                </div>
            <?php endif; ?>


        </div>
        <div class="single-product__bottom-block">
            <a href="#" class="link booking-link">
                Заказать
            </a>
            <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * @hooked woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @hooked woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @hooked woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action('woocommerce_single_product_summary');
            ?>

        </div>
    </div>

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action('woocommerce_after_single_product_summary');
    ?>
    <?php if (!empty($linked_products)): ?>
        <h3 class="title__related">
            Похожие товары
        </h3>
        <ul class="single-product__list-related-products">


            <?php
            $arrIds = [];
            foreach ($linked_products as $value) {
                $arrIds[] = $value->ID;
            }
            $arg = [
                'posts_per_page' => 10,
                'post_type' => 'product',
                'orderby' => 'date',
                'order' => 'DESC',
                'status' => 'publish',
                'post__in' => $arrIds
            ];
            $the_query = new WP_Query($arg);
            while ($the_query->have_posts()) :
                $the_query->the_post();
                $post_id = $the_query->post->ID;

                ?>
                <li class="single-product__item-related">
                    <div class="product-item_wrapper">
                        <a class="product-item__link_overflow" href="<?php echo get_the_permalink($post_id); ?>">
                            <svg width="48" height="33" viewBox="0 0 48 33" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M47.5398 16.06L32.5924 1.20998C32.2031 0.823234 31.5725 0.823234 31.1833 1.20998C30.794 1.59673 30.794 2.22322 31.1833 2.60988L44.4297 15.7699H0.996526C0.445714 15.7699 0 16.2128 0 16.76C0 17.3072 0.445714 17.75 0.996526 17.75H44.4297L31.1833 30.91C30.794 31.2967 30.794 31.9232 31.1833 32.3099C31.3779 32.5032 31.633 32.5999 31.8879 32.5999C32.1429 32.5999 32.3978 32.5032 32.5925 32.3099L47.5399 17.4599C47.9291 17.0732 47.9291 16.4467 47.5398 16.06Z"
                                      fill="#005BD7"/>
                            </svg>
                        </a>
                        <?php
                        $newProduct = get_field('new_item', $post_id);
                        $promoProduct = get_field('promo', $post_id);
                        $img = wp_get_attachment_url(get_post_thumbnail_id($post_id), 'product-popular');
                        if ($newProduct == 'yes' || $promoProduct == 'yes') : ?>
                            <div class="product-item__tags">
                                <?php if ($newProduct == 'yes'): ?>
                                    <div class="product-item__tags_new">
                                        Новинка
                                    </div>
                                <?php endif; ?>

                                <?php if ($promoProduct == 'yes'): ?>
                                    <div class="product-item__tags_promo">
                                        Акция
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                            <div class="single-product__img-related">
                                <img src="<?php echo $img; ?>" alt="Изображение товара"/>
                            </div>

                        <a class="product-item__title-block" href="<?php echo get_the_permalink($post_id); ?>">
                            <h3><?php echo get_the_title($post_id); ?></h3>
                        </a>

                    </div>
                </li>
            <?php
            endwhile;
            wp_reset_query();
            ?>
        </ul>
    <?php endif; ?>
</div>


<?php do_action('woocommerce_after_single_product'); ?>

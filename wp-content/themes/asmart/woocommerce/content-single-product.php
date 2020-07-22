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
</div>

<?php do_action('woocommerce_after_single_product'); ?>

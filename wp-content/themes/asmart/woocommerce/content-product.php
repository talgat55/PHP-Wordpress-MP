<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<li <?php wc_product_class('product-item   col-12 col-md-6  col-lg-4  ', $product); ?>>
    <div class="product-item_wrapper">
        <a class="product-item__link_overflow" href="<?php echo get_the_permalink(); ?>">
            <svg width="48" height="33" viewBox="0 0 48 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M47.5398 16.06L32.5924 1.20998C32.2031 0.823234 31.5725 0.823234 31.1833 1.20998C30.794 1.59673 30.794 2.22322 31.1833 2.60988L44.4297 15.7699H0.996526C0.445714 15.7699 0 16.2128 0 16.76C0 17.3072 0.445714 17.75 0.996526 17.75H44.4297L31.1833 30.91C30.794 31.2967 30.794 31.9232 31.1833 32.3099C31.3779 32.5032 31.633 32.5999 31.8879 32.5999C32.1429 32.5999 32.3978 32.5032 32.5925 32.3099L47.5399 17.4599C47.9291 17.0732 47.9291 16.4467 47.5398 16.06Z" fill="#005BD7"/>
            </svg>
        </a>
        <?php
        $newProduct = get_field('new_item', $product->id);
        $promoProduct = get_field('promo', $product->id);
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
        <?php endif;

        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        do_action('woocommerce_before_shop_loop_item');

        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
        do_action('woocommerce_before_shop_loop_item_title');

        /**
         * Hook: woocommerce_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_product_title - 10
         */
        do_action('woocommerce_shop_loop_item_title');
        ?>

        <a class="product-item__title-block" href="<?php echo get_the_permalink(); ?>">
            <h3><?php echo get_the_title(); ?></h3>
        </a>

        <?php
        /**
         * Hook: woocommerce_after_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_rating - 5
         * @hooked woocommerce_template_loop_price - 10
         */
        do_action('woocommerce_after_shop_loop_item_title');

        /**
         * Hook: woocommerce_after_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        do_action('woocommerce_after_shop_loop_item');
        ?>
    </div>
</li>

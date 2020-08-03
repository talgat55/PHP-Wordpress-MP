<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="row">
<div class="col row-sidebar-catalog">
    <div class="catalog-menu">
        <div class="catalog-menu__title">
            <h3  >Категории</h3>
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotateZ(-90deg);">
                <path d="M6.69397 10.9994L16.6295 1.06387C16.8739 0.819511 16.8739 0.427621 16.6295 0.183266C16.3852 -0.0610887 15.9933 -0.0610887 15.7489 0.183266L5.37077 10.5614C5.12641 10.8058 5.12641 11.1977 5.37077 11.442L15.7489 21.8156C15.8688 21.9355 16.0302 22 16.1869 22C16.3437 22 16.505 21.9401 16.6249 21.8156C16.8693 21.5712 16.8693 21.1793 16.6249 20.935L6.69397 10.9994Z" fill="#005BD7"/>
            </svg>
        </div>
        <?php   woocommerce_product_category(); ?>
    </div>
</div>
<div class="col row-list-catalog">
    <?php get_search_form(); ?>
<ul class="products row">

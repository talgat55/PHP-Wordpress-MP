<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 15.06.20
 * Time: 13:25
 */


$query = new WC_Product_Query(array(
    'limit' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'meta_key' => 'popular_item',
    'meta_value' => 'yes'
));
$products = $query->get_products();

?>
<section class="home-popular-items">
    <div class="container">
        <div class="row">
            <div class="d-lg-flex  justify-content-between  align-items-center w-100">
                <h2 class="main-title">
                    Популярные товары
                </h2>
                <a href="#" class="link__alt">
                    ВСЕ ТОВАРЫ
                </a>
            </div>
            <ul class="popular-product__list">
                <?php foreach ($products as $product):  $post_thumbnail_id = $product->get_image_id(); ?>
                <?php   $src = wp_get_attachment_image_src( $post_thumbnail_id , 'product-popular' );  ?>
                    <li class="popular-product__item">
                        <a href="<?php echo get_permalink($product->id); ?>">
                            <div class="popular-product__image">
                                <!--                            <img  class="lazy" src="--><?php //echo get_theme_file_uri('/assets/images/transpaernt.png'); ?><!--"  data-src="--><?php //echo $src[0]; ?><!--" alt="Слайд" />-->
                                <img   src="<?php echo $src[0]; ?>" alt="Слайд" />


                            </div>
                            <h3 class="popular-product__title">
                                <?php echo $product-> name; ?>
                            </h3>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>


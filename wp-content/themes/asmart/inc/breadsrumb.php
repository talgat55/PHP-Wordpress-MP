<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 18.06.20
 * Time: 13:33
 */

?>
<section class="breadcrumbs-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
<!--                --><?php //dimox_breadcrumbs(); ?>
                <?php woocommerce_breadcrumb(array(
                    'delimiter'   => '<svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.87028 3.50018L1.70896 6.6615C1.63121 6.73925 1.63121 6.86394 1.70896 6.94169C1.78671 7.01944 1.9114 7.01944 1.98915 6.94169L5.2913 3.63955C5.36905 3.5618 5.36905 3.4371 5.2913 3.35935L1.98915 0.0586788C1.95101 0.0205376 1.89967 1.75234e-07 1.84979 1.70873e-07C1.79992 1.66513e-07 1.74857 0.0190708 1.71043 0.0586788C1.63268 0.136428 1.63268 0.26112 1.71043 0.338869L4.87028 3.50018Z" fill="#424242"/>
</svg>',
                    'wrap_before' => '<div class="breadcrumbs main" itemscope itemtype="http://schema.org/BreadcrumbList">',
                    'wrap_after'  => '</div>',
                    'before'      => '',
                    'after'       => '',
                    'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
                )); ?>
            </div>
            <div class="col-12">
                <h1 class="heading-title">
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

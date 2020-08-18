<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        if (is_front_page()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/favicon.png?v=1.1') ?>"
          type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var myajax = {"url": "<?=admin_url('admin-ajax.php'); ?>"};
        /* ]]> */
    </script>

    <!--    <script type="application/ld+json">-->
    <!--        {-->
    <!--            "@context": "http://schema.org",-->
    <!--            "@type": "Organization",-->
    <!--            "address": {-->
    <!--                "@type": "PostalAddress",-->
    <!--                "addressRegion": "г. Омск",-->
    <!--                "streetAddress": "ул. Почтовая, д. 33, каб. 9"-->
    <!--            },-->
    <!--            "description": "Дизель Групп доставляет дизельное топливо по Омску и Омской области, напрямую от Газпрома и ВПК-ОЙЛ",-->
    <!--            "name": "Дизель Групп - дизельное топливо с доставкой по омску и области",-->
    <!--            "telephone": "8 91314-82-031"-->
    <!--        }-->
    <!--    </script>-->
</head>

<body <?php body_class(); ?>>
<?php
$phone_number_one = get_field('phone_header_one', 'option');
$phone_number_two = get_field('phone_header_two', 'option');

?>
<div class="wrap ">
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row  justify-content-between">
                   <div class="col-6 col-lg-6">
                       <a class="logo" href="<?php echo home_url(); ?>">
                           <svg width="236" height="38" viewBox="0 0 236 38" fill="none" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                               <rect width="236" height="38" fill="url(#pattern0)"/>
                               <defs>
                                   <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                       <use xlink:href="#image0"
                                            transform="translate(0 -0.0123161) scale(0.003367 0.0209109)"/>
                                   </pattern>
                                   <image id="image0" width="297" height="49"
                                          xlink:href="data:image/png;base64,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"/>
                               </defs>
                           </svg>
                       </a>
                   </div>
                    <div class="col-6 col-lg-6  d-flex align-items-center  justify-content-between">
                        <div class="header__phone-block">
                           <div class="d-flex  align-items-center">
                               <div class="d-flex align-items-center header__phone-item">
                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M14.7162 10.5022C13.7366 10.5022 12.7747 10.349 11.8633 10.0478C11.4167 9.89542 10.8676 10.0352 10.595 10.3151L8.796 11.6732C6.70963 10.5595 5.42446 9.27475 4.32596 7.20404L5.64408 5.45188C5.98654 5.10988 6.10938 4.61029 5.96221 4.14154C5.65971 3.22529 5.50604 2.26392 5.50604 1.28392C5.50608 0.575958 4.93013 0 4.22221 0H1.28387C0.575958 0 0 0.575958 0 1.28387C0 9.39846 6.60158 16 14.7162 16C15.4241 16 16 15.424 16 14.7161V11.786C16 11.0781 15.424 10.5022 14.7162 10.5022Z" fill="#005BD7"/>
                                   </svg>
                                   <a href="tel:<?php echo $phone_number_one; ?>">
                                       <?php echo $phone_number_one; ?>
                                   </a>
                               </div>
                               <div class="d-flex align-items-center header__phone-item">
                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M14.7162 10.5022C13.7366 10.5022 12.7747 10.349 11.8633 10.0478C11.4167 9.89542 10.8676 10.0352 10.595 10.3151L8.796 11.6732C6.70963 10.5595 5.42446 9.27475 4.32596 7.20404L5.64408 5.45188C5.98654 5.10988 6.10938 4.61029 5.96221 4.14154C5.65971 3.22529 5.50604 2.26392 5.50604 1.28392C5.50608 0.575958 4.93013 0 4.22221 0H1.28387C0.575958 0 0 0.575958 0 1.28387C0 9.39846 6.60158 16 14.7162 16C15.4241 16 16 15.424 16 14.7161V11.786C16 11.0781 15.424 10.5022 14.7162 10.5022Z" fill="#005BD7"/>
                                   </svg>
                                   <a href="tel:<?php echo $phone_number_two; ?>">
                                       <?php echo $phone_number_two; ?>
                                   </a>
                               </div>
                           </div>
                            <div class="header__text-phone">
                                Бесплатный звонок из любой точки России
                            </div>
                        </div>
                        <div class="header__search-cart-block d-flex align-items-center">
                            <div class="header__search-block">
                                <a href="/?s=">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.7312 20.4359L15.475 14.1797C16.6868 12.6828 17.4165 10.7807 17.4165 8.70912C17.4165 3.90766 13.5097 0.000854492 8.70822 0.000854492C3.90677 0.000854492 0 3.90762 0 8.70907C0 13.5105 3.90681 17.4173 8.70826 17.4173C10.7799 17.4173 12.682 16.6877 14.1789 15.4759L20.4351 21.732C20.6138 21.9108 20.8484 22.0006 21.0831 22.0006C21.3178 22.0006 21.5525 21.9108 21.7312 21.732C22.0896 21.3736 22.0896 20.7943 21.7312 20.4359ZM8.70826 15.584C4.91695 15.584 1.83333 12.5004 1.83333 8.70907C1.83333 4.91776 4.91695 1.83414 8.70826 1.83414C12.4996 1.83414 15.5832 4.91776 15.5832 8.70907C15.5832 12.5004 12.4995 15.584 8.70826 15.584Z" fill="#005BD7"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="header__cart">
                                <a class="header__link-cart" href="<?php echo wc_get_cart_url(); ?>"
                                   title="<?php _e('Перейти в корзину'); ?>">
                                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.10547 16.8088H21.3381C21.6658 16.8088 21.9532 16.5834 22.0419 16.2561L24.9718 5.59189C25.0347 5.36198 24.9916 5.11502 24.8529 4.924C24.7141 4.73357 24.4982 4.62109 24.2678 4.62109H6.4146L5.89104 2.1709C5.81665 1.82198 5.5191 1.57422 5.17578 1.57422H0.732422C0.327683 1.57422 0 1.91501 0 2.33594C0 2.75706 0.327683 3.09766 0.732422 3.09766H4.58794L7.23286 15.4756C6.45466 15.8275 5.9082 16.633 5.9082 17.5705C5.9082 18.8305 6.89392 19.8557 8.10547 19.8557H21.3381C21.743 19.8557 22.0705 19.5151 22.0705 19.0939C22.0705 18.673 21.743 18.3322 21.3381 18.3322H8.10547C7.70206 18.3322 7.37305 17.9908 7.37305 17.5705C7.37305 17.1502 7.70206 16.8088 8.10547 16.8088Z" fill="#005BD7"/>
                                        <path d="M7.37305 22.1409C7.37305 23.4011 8.35876 24.426 9.5705 24.426C10.7821 24.426 11.7678 23.4011 11.7678 22.1409C11.7678 20.8809 10.7821 19.8557 9.5705 19.8557C8.35876 19.8557 7.37305 20.8809 7.37305 22.1409Z" fill="#005BD7"/>
                                        <path d="M17.6758 22.1409C17.6758 23.4011 18.6615 24.426 19.873 24.426C21.0848 24.426 22.0703 23.4011 22.0703 22.1409C22.0703 20.8809 21.0848 19.8557 19.873 19.8557C18.6615 19.8557 17.6758 20.8809 17.6758 22.1409Z" fill="#005BD7"/>
                                    </svg>

                                    <span class="counter">
                                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                                    <a href="#" class="menu-icon-toggle"><span></span></a>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <?php wp_nav_menu('container=nav&menu_id=menu-main&menu_class=main-main-container clearfix&theme_location=top_menu'); ?>
        </div>
    </header>
    <div class="header_fixed"></div>

           <div class="mobile-menu d-flex w-100   justify-content-center">
            <div>
                <?php wp_nav_menu('container=div&menu_id=menu-mobile&menu_class=mobile-main-container clearfix&theme_location=top_menu'); ?>
                <div class="d-flex phone-numbers__mobile ">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7162 10.5022C13.7366 10.5022 12.7747 10.349 11.8633 10.0478C11.4167 9.89542 10.8676 10.0352 10.595 10.3151L8.796 11.6732C6.70963 10.5595 5.42446 9.27475 4.32596 7.20404L5.64408 5.45188C5.98654 5.10988 6.10938 4.61029 5.96221 4.14154C5.65971 3.22529 5.50604 2.26392 5.50604 1.28392C5.50608 0.575958 4.93013 0 4.22221 0H1.28387C0.575958 0 0 0.575958 0 1.28387C0 9.39846 6.60158 16 14.7162 16C15.4241 16 16 15.424 16 14.7161V11.786C16 11.0781 15.424 10.5022 14.7162 10.5022Z" fill="#005BD7"/>
                    </svg>
                    <a href="tel:<?php echo $phone_number_one; ?>">
                        <?php echo $phone_number_one; ?>
                    </a>
                </div>
                <div class="d-flex phone-numbers__mobile">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7162 10.5022C13.7366 10.5022 12.7747 10.349 11.8633 10.0478C11.4167 9.89542 10.8676 10.0352 10.595 10.3151L8.796 11.6732C6.70963 10.5595 5.42446 9.27475 4.32596 7.20404L5.64408 5.45188C5.98654 5.10988 6.10938 4.61029 5.96221 4.14154C5.65971 3.22529 5.50604 2.26392 5.50604 1.28392C5.50608 0.575958 4.93013 0 4.22221 0H1.28387C0.575958 0 0 0.575958 0 1.28387C0 9.39846 6.60158 16 14.7162 16C15.4241 16 16 15.424 16 14.7161V11.786C16 11.0781 15.424 10.5022 14.7162 10.5022Z" fill="#005BD7"/>
                    </svg>
                    <a href="tel:<?php echo $phone_number_two; ?>">
                        <?php echo $phone_number_two; ?>
                    </a>
                </div>

            </div>
        </div>




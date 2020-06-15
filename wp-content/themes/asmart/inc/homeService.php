<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 15.06.20
 * Time: 16:47
 */

$serviceTitle = get_field('title_home');
$serviceText = get_field('text_home');
$serviceImg = get_field('image_home');
?>
<section class="home-service">
    <div class="container">
         <div class="row">
            <div class="home-service__first col-12 col-lg-6">
                <h2 class="main-title">
                    <?php echo $serviceTitle; ?>
                </h2>
                <div class="home-service__text">
                    <?php echo $serviceText; ?>
                </div>
                <a href="/about/" class="link">
                    Подробнее
                </a>
            </div>
            <div class="home-service__second col-12 col-lg-6">
                <img
                        class="lazy  home-service__image"
                        src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png'); ?>"
                        data-src="<?php echo $serviceImg; ?>"
                        alt="Изображение" />
            </div>

         </div>
    </div>
</section>

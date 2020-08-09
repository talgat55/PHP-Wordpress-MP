<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 18.06.20
 * Time: 15:46
 */
$anons = get_field('anons',get_the_ID() );
?>
<li class="news-articles__item col-12 col-lg-3">
    <div class="news-articles__item_wrapper">
        <div class="news-articles__image">
            <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                <img
                        src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "home-news-articles")[0]; ?>"
                />
            </a>
        </div>
        <div class="news-articles__item-content">
            <div class="news-articles__date">
                <?php echo  get_the_date('d.m.Y'); ?>
            </div>
            <h3 class="news-articles__title">
                <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                    <?php echo get_the_title(get_the_ID()); ?>
                </a>
            </h3>
            <div class="news-articles____text">
                <?php echo mb_strimwidth(strip_tags($anons), 0, 150, "..."); ?>
            </div>
            <a class="news-articles____link"
               href="<?php echo get_the_permalink(get_the_ID()); ?>">
                Подробнее
            </a>
        </div>
    </div>
</li>

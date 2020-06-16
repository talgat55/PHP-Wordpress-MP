<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 16.06.20
 * Time: 16:36
 */
?>
<section class="home-partners">
    <div class="container">
         <div class="row">
             <h2 class="main-title">Партнеры</h2>
         </div>
        <div class="row">
            <div class="home-partners__carousel">
                <?php

                $arg = [
                    'posts_per_page' => -1,
                    'post_type' => 'partners',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'status' => 'publish'
                ];
                $the_query = new WP_Query($arg);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $post_id = $the_query->post->ID;

                    ?>
                    <li class="home-partners__item  d-flex justify-content-center  align-items-center">
                        <img
                                src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png'); ?>"
                                data-lazy="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "home-news-articles")[0]; ?>"
                        />

                    </li>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>

<section class="home-slider">
    <div class="home-slider_slider">
        <?php
        $arg = array(
            'posts_per_page' => -1,
            'post_type' => 'home_slider',
            'status' => 'publish'
        );
        $the_query = new WP_Query($arg);
        $count = $the_query->found_posts;
        while ($the_query->have_posts()) :
            $the_query->the_post();
            $post_id = $the_query->post->ID;
            $url = get_field('link', $post_id);
            ?>
            <div class="home-slider_slider__item   d-flex  align-items-center"
                 style="background: url(<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>);">
                <div class="container">
                    <div class="home-slider__content">
                        <div class="home-slider__title">
                            <?= get_the_title($post_id); ?>
                        </div>
                        <div class="home-slider__text">
                            <?= get_the_content($post_id); ?>
                        </div>
                        <a href="<?= $url; ?>" class="link link-main">
                            ПОДРОБНЕЕ
                        </a>
                    </div>

                </div>
            </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
    <?php if ($count > 1): ?>
        <div class="home-slider__arrows">
            <div class="container  position-relative">
                <div class="row">
                    <a href="#" class="arrows left">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.1831 25.4419L19.5581 34.8169C19.8023 35.061 20.1978 35.061 20.4419 34.8169C20.686 34.5727 20.686 34.1772 20.4419 33.9331L12.1337 25.625L39.375 25.625C39.7205 25.625 40 25.3454 40 25C40 24.6545 39.7205 24.3749 39.375 24.3749L12.1337 24.3749L20.4419 16.0669C20.686 15.8227 20.686 15.4272 20.4419 15.1831C20.3198 15.0611 20.1599 15 20 15C19.8401 15 19.6802 15.0611 19.558 15.1831L10.183 24.5581C9.93895 24.8022 9.93895 25.1977 10.1831 25.4419Z" fill="#005BD7"/>

                        </svg>
                    </a>
                    <a href="#" class="arrows right">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.8169 24.5581L30.4419 15.1831C30.1977 14.939 29.8022 14.939 29.5581 15.1831C29.314 15.4273 29.314 15.8228 29.5581 16.0669L37.8662 24.375L10.625 24.375C10.2795 24.375 10 24.6546 10 25C10 25.3455 10.2795 25.6251 10.625 25.6251L37.8662 25.6251L29.5581 33.9331C29.314 34.1773 29.314 34.5728 29.5581 34.8169C29.6802 34.9389 29.8401 35 30 35C30.1599 35 30.3198 34.9389 30.442 34.8169L39.817 25.4419C40.0611 25.1978 40.0611 24.8023 39.8169 24.5581Z" fill="#005BD7"/>

                        </svg>

                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
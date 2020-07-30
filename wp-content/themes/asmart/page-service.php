<?php
/*
 * Template Name: Страница Сервис
 */
get_header();

$contentAfter = get_field('services');

?>
<?php get_template_part('inc/breadsrumb'); ?>
    <section class="page-service   page-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service__content-page">
                        <?php
                        while (have_posts()) : the_post();

                            the_content();
                        endwhile;
                        ?>
                    </div>
                    <h2>
                        Объединенный сервисно-технический центр СИМЕД предлагает:
                    </h2>
                    <ul class="service__feature">
                        <? foreach ($contentAfter as $item) : ?>
                            <li class="d-flex  ">
                                <svg width="23" height="1" viewBox="0 0 23 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line y1="0.5" x2="23" y2="0.5" stroke="#005BD7"/>
                                </svg>

                                <?php echo $item['service_title']; ?>
                            </li>

                        <? endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div id="primary" class="content-area page-main  error-page ">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">
            <div class="row flex">

                <div class="col-sm-12 col-xs-12   ">
                    <div class="content">
                        <div class="error_wrapper">
                            <div class="error__img">
                                <img src="<?php echo get_theme_file_uri('/assets/images/404.png'); ?>" alt="Изображение."/>
                                <div class="error__img_text">
                                    Страница не найдена
                                </div>
                            </div>

                        </div>
                        <div class="error_add_text">
                            Данная страница уже не существует или была перемещена по другому адресу
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

<?php get_footer();

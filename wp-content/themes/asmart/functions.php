<?php
/*
* Register nav menu
*/
if (function_exists('register_nav_menus')) {
    $menu_arr = array(
        'top_menu' => 'Топ Меню',
        'footer_menu' => 'Футер Меню',
    );
    register_nav_menus($menu_arr);
}


/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');
add_image_size('product-popular', 272, 307, false);
add_image_size('home-news-articles', 286, 154, false);

//add_image_size('awards-img', 250, 350, true);
//add_image_size('review-img', 210, 60, false);
//add_image_size('portfolio-img', 400, 400, true);
//add_image_size('portfolio-page-img', 360, 359, true);
//add_image_size('service-home-img', 368, 389, true);
//add_image_size('service-detail-img', 390, 378, true);


/**
 * Enqueue scripts
 */
function th_scripts()
{
    wp_enqueue_style('bootstrap.min', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '');

    // Theme stylesheet.
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '1');
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '1');
//
    wp_enqueue_script('lazy', get_theme_file_uri('/assets/js/jquery.lazy.min.js'), array(), '', true);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
//    wp_enqueue_script('jquery-migrate.min', get_theme_file_uri('/assets/js/jquery.matchHeight.js'), array(), '', true);
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '', true);
//
    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '', true);
////
//    wp_enqueue_script('lightbox.min.js', get_theme_file_uri('/assets/js/lightbox.js'), array(), '', true);
//
//
    if (is_page_template('page-contacts.php')  ) {
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDkewQZi7iY6eOtlXajXXHFWHECGYWqfMs&language=ru', array(), '1');
    }

    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '1', true);
}

add_action('wp_enqueue_scripts', 'th_scripts');

function prefix_add_footer_styles()
{
//    wp_enqueue_style('aos', get_theme_file_uri('/assets/css/aos.css'), array(), '');
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');
//    wp_enqueue_style('lightbox.min.css', get_theme_file_uri('/assets/css/lightbox.min.css'), array(), '');
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');

//    wp_enqueue_style('montserrat', get_theme_file_uri('/assets/fonts/montserrat.css'), array(), '1');
//    wp_enqueue_style('main-style2', get_theme_file_uri('/assets/css/critical.css'), array(), '1');

}

;
add_action('get_footer', 'prefix_add_footer_styles');


/*
*  Register Post Type  Home slider
*/
add_action('init', 'post_type_home_slider');

function post_type_home_slider()
{
    $labels = array(
        'name' => 'Слайдер на главной',
        'singular_name' => 'Слайдер на главной',
        'all_items' => 'Слайдер на главной',
        'menu_name' => 'Слайдер на главной' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "home_slider",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('home_slider', $args);
}


/*
*  Register Post Type  Awards
*/
//add_action('init', 'post_type_awards');
//
//function post_type_awards()
//{
//    $labels = array(
//        'name' => 'Награды',
//        'singular_name' => 'Награды',
//        'all_items' => 'Награды',
//        'menu_name' => 'Награды' // ссылка в меню в админке
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'query_var' => "awards",
//        'supports' => array(
//            'title',
//            'thumbnail'
//        )
//    );
//    register_post_type('awards', $args);
//}
//

/*
*  Register Post Type  Review
*/
//add_action('init', 'post_type_review');
//
//function post_type_review()
//{
//    $labels = array(
//        'name' => 'Отзывы',
//        'singular_name' => 'Отзывы',
//        'all_items' => 'Отзывы',
//        'menu_name' => 'Отзывы' // ссылка в меню в админке
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'query_var' => "review",
//        'supports' => array(
//            'title',
//            'editor',
//            'thumbnail'
//        )
//    );
//    register_post_type('review', $args);
//}

/*
*  Register Post Type  Portfolio
*/
//add_action('init', 'post_type_portfolio');
//
//function post_type_portfolio()
//{
//    $labels = array(
//        'name' => 'Наши работы',
//        'singular_name' => 'Наши работы',
//        'all_items' => 'Наши работы',
//        'menu_name' => 'Наши работы' // ссылка в меню в админке
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'query_var' => "portfolio",
//        'supports' => array(
//            'title',
//            'editor',
//            'thumbnail'
//        )
//    );
//    register_post_type('portfolio', $args);
//}

/*
*  Register Post Type  Services
*/
//add_action('init', 'post_type_services');
//
//function post_type_services()
//{
//    $labels = array(
//        'name' => 'Услуги',
//        'singular_name' => 'Услуги',
//        'all_items' => 'Услуги',
//        'menu_name' => 'Услуги' // ссылка в меню в админке
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'query_var' => "services",
//        'supports' => array(
//            'title',
//            'editor',
//            'thumbnail'
//        )
//    );
//    register_post_type('services', $args);
//}
//
///*
//*  Register Post Type  Clients
//*/
//add_action('init', 'post_type_clients');
//
//function post_type_clients()
//{
//    $labels = array(
//        'name' => 'Клиенты',
//        'singular_name' => 'Клиенты',
//        'all_items' => 'Клиенты',
//        'menu_name' => 'Клиенты' // ссылка в меню в админке
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'query_var' => "clients",
//        'supports' => array(
//            'title',
//            'thumbnail'
//        )
//    );
//    register_post_type('clients', $args);
//}
//
//
//

/*
*  Register Post Type Settings
*/
if (function_exists('acf_add_options_page')) {

    // Let's add our Options Page
    acf_add_options_page(array(
        'page_title' => 'Настройки Темы',
        'menu_title' => 'Настройки Темы',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts'
    ));


}
/*
 *  load items for Portfolio ajax
 */
//
//function portfolioItems($page){
//    $arg = [
//        'posts_per_page' => 12,
//        'post_type' => 'portfolio',
//        'orderby' => 'date',
//        'order' => 'DESC',
//        'status' => 'publish',
//    ];
//
//    if (!empty($page)) {
//        $arg['paged'] = $page;
//    } else {
//        $arg['paged'] = '1';
//    }
//
//
//    $the_query = new WP_Query($arg);
//
//    while ($the_query->have_posts()) :
//        $the_query->the_post();
//        $post_id = $the_query->post->ID;
//        set_query_var('type-item', 'true');
//        get_template_part('inc/portfolio-item');
//    endwhile;
//}
//


/**
 *
 * AJAX Load  Portfolio
 */
//
//function be_ajax_portfolio_load()
//{
//    $count = wp_count_posts('portfolio');
//    ob_start();
//    portfolioItems($_POST['page']);
//    wp_reset_postdata();
//    $data = ob_get_clean();
//    $response = [
//        'data' => $data,
//        'count' => $count
//    ];
//    wp_send_json_success($response);
//    wp_die();
//}
//
//add_action('wp_ajax_be_ajax_portfolio_load', 'be_ajax_portfolio_load');
//add_action('wp_ajax_nopriv_be_ajax_portfolio_load', 'be_ajax_portfolio_load');
//
//
/**
 *
 * AJAX Load  News
 */

function be_ajax_news_articles_load()
{
    $count = wp_count_posts('post');
    ob_start();
     newsItems($_POST['page'], $_POST['cat']);
    wp_reset_postdata();
    $data = ob_get_clean();
    $response = [
        'data' => $data,
        'count' => $count
    ];
    wp_send_json_success($response);
    wp_die();
}

add_action('wp_ajax_be_ajax_news_articles_load', 'be_ajax_news_articles_load');
add_action('wp_ajax_nopriv_be_ajax_news_articles_load', 'be_ajax_news_articles_load');

/*
 * Load items for News ajax
 */
function newsItems($page, $cat){
    $arg = [
        'posts_per_page' => 8,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'cat' => $cat,
        'status' => 'publish',
    ];
    if (!empty($page)) {
        $arg['paged'] = $page;
    } else {
        $arg['paged'] = '1';
    }
    $the_query = new WP_Query($arg);
    while ($the_query->have_posts()) :
        $the_query->the_post();
        $post_id = $the_query->post->ID;
        get_template_part('inc/news-item');
    endwhile;
}


/*
*  Register Post Type   Partners
*/
add_action('init', 'post_type_partners');

function post_type_partners()
{
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнеры',
        'all_items' => 'Партнеры',
        'menu_name' => 'Партнеры' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "partners",
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('partners', $args);
}



/*
 * Breadcrumb
 */
function dimox_breadcrumbs()
{
    /* === ОПЦИИ === */
    $text['home'] = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статьи автора %s'; // текст для страницы автора
    $text['404'] = 'Ошибка 404'; // текст для страницы 404
    $text['page'] = 'Страница %s'; // текст 'Страница N'
    $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
    $wrap_before = '<div class="breadcrumbs main" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = '<svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.87028 3.50018L1.70896 6.6615C1.63121 6.73925 1.63121 6.86394 1.70896 6.94169C1.78671 7.01944 1.9114 7.01944 1.98915 6.94169L5.2913 3.63955C5.36905 3.5618 5.36905 3.4371 5.2913 3.35935L1.98915 0.0586788C1.95101 0.0205376 1.89967 1.75234e-07 1.84979 1.70873e-07C1.79992 1.66513e-07 1.74857 0.0190708 1.71043 0.0586788C1.63268 0.136428 1.63268 0.26112 1.71043 0.338869L4.87028 3.50018Z" fill="#424242"/>
            </svg>
    '; // разделитель между "крошками"
    $sep_before = '<span class="sep">'; // тег перед разделителем
    $sep_after = '</span>'; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = '<span class="current">'; // тег перед текущей "крошкой"
    $after = '</span>'; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */
    global $post;
    $home_url = home_url('/');
    $link_before = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    $link_after = '</li>';
    $link_attr = ' itemprop="item"';
    $link_in_before = '<span itemprop="name">';
    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = ($post) ? $post->post_parent : '';
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;
    if (is_home() || is_front_page()) {
        if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
    } else {
        echo $wrap_before;
        if ($show_home_link) echo $home_link;
        if (is_category()) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
            }
            if (get_query_var('paged')) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }
        } elseif (is_search()) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }
        } elseif (is_day()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if ($show_home_link) echo $sep;
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
//                echo $cats;
                echo $link_before . '<a href="/news" ' . $link_attr . '>' . $link_in_before . 'Новости' . $link_in_after . '</a>' . $link_after . $sep;
                if (get_query_var('cpage')) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }
            // custom post type
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            if (get_query_var('paged')) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }
        } elseif (is_attachment()) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;
        } elseif (is_page() && !$parent_id) {
            if ($show_current) echo $sep . $before . get_the_title() . $after;
        } elseif (is_page() && $parent_id) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;
        } elseif (is_tag()) {
            if (get_query_var('paged')) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }
        } elseif (is_author()) {
            global $author;
            $author = get_userdata($author);
            if (get_query_var('paged')) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }
        } elseif (is_404()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;
        } elseif (has_post_format() && !is_singular()) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string(get_post_format());
        }
        echo $wrap_after;
    }
}


<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
$docs = get_field('docs');
?>

<?php get_template_part('inc/breadsrumb'); ?>
    <div id="primary" class="  page-main  single-page-docs">
        <div class="container">
                <?php while (have_posts()) :
                    the_post(); ?>
                    <div class="single-page-docs">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <ul class="single-page-docs__list-docs">
                    <?php foreach ($docs as $doc): ?>
                        <li>
                            <a  target="_blank" href="<?php echo $doc["file"]; ?>">
                                <?php echo $doc["docs_title"]; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>

    </div>
<?php get_footer();

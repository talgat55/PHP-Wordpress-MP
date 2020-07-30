<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>


    <div id="primary" class="content-area  page-collection  page-main">

        <div class="container">
            <div class="row  ">

                <div class="col-sm-12 col-xs-12   ">
                    <div class="content">
                        <h1 class="sub-title  left">
                            <?php printf( __( 'Результаты поиска: %s', 'light' ), '<span>' . get_search_query() . '</span>' ); ?>
                        </h1>
                        <?php  get_search_form(); ?>

                        <ul class="list-search-result">
                            <?php
                            if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();


                                    echo '
                                    <li>  
                                    <a href="'.get_the_permalink().'">
                                        '.get_the_title().'
                                    </a>
                                    </li>
			                            ';

                                endwhile; // End of the loop.



                            else :
                                echo '<p>По данномму запросу ничего не найдено</p>';
                            endif;
                            ?>
                        </ul>
                    </div>

                </div>


            </div>

        </div>
    </div>
<?php get_footer();
<?php

/**
 * The main template file 
 * 
 * This is the most generic template file in a Wordpress theme 
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package bootstrap2wordpress
 * @since 2.0
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>


<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 overflow-hidden">

                <?php
                // are there any posts in the DB? 
                if (have_posts()) {

                    while (have_posts()) {

                        the_post();
                        get_template_part('template-parts/content', 'excerpt');
                    }
                    b2w_pagination();
                } else {
                    get_template_part('template-parts/content', 'none');
                }

                ?>

            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

<?php
get_footer();

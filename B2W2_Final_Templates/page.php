 <?php

    /**
     * The template for displaying page
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


             <?php
                // are there any posts in the DB? 
                if (have_posts()) {

                    while (have_posts()) {

                        the_post();

                        if (has_post_thumbnail()) {
                            the_post_thumbnail(
                                'large',
                                array(
                                    'class' => 'img-fluid'
                                )
                            );
                        }

                ?>

                     <div class="col-md-8 offset-md-2 overflow-hidden">

                         <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                             <?php

                                the_content();
                                ?>


                         </article>

                     </div>
             <?php
                    }
                } else {
                    get_template_part('template-parts/content', 'none');
                }

                ?>






         </div>
     </div>
 </div>

 <?php
    get_footer();

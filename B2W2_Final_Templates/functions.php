<?php

/*
Enques scripts & styles 
*/

if (!function_exists('b2w_theme_setup')) {

    /* Theme Setup */

    function b2w_theme_setup() {

        load_theme_textdomain('bootstrap2wordpress', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption'
            )
        );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');

        register_nav_menus(
            array(
                'primary' => esc_html__('Primary Menu', 'bootstrap2wordpress')
            )
        );
    }
}

add_action('after_setup_theme', 'b2w_theme_setup');

function b2w_assets() {

    // Enqueue CSS Files 
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), false, 'all');

    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), false, 'all');

    wp_enqueue_style('flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), false, 'all');

    // Main CSS File 
    wp_enqueue_style('bootstrap2wordpress', get_stylesheet_uri(), array('bootstrap'), false, 'all');

    // Enqueue JS Files  
    // Don't enqueue jQuery files. It'll be loaded from wordpress when required. 
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), false, true);

    wp_enqueue_script('bootstrap2wordpress-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'), false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'b2w_assets');

/* Custom readmore text */

function b2w_excerpt_readmore($more) {
    return '...';
}

add_filter('excerpt_more', 'b2w_excerpt_readmore');



function b2w_pagination() {
    global $wp_query;

    $links = paginate_links(
        array(
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'plain',
            'prev_text' => '<-',
            'next_text' => '->'
        )
    );

    $links = '<nav class="b2w-pagination">' . $links;
    $links .= '</nav>';
    echo wp_kses_post($links);
}

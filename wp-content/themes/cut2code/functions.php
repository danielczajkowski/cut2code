<?php
register_nav_menu('primary', __('Primary Menu'));

add_theme_support( 'post-thumbnails', array( 'post'));
set_post_thumbnail_size(511, 446, true);




if (function_exists('acf_add_options_page')) {
    add_action('acf/init', 'my_acf_op_init');
    function my_acf_op_init()
    {
        $option_page = acf_add_options_page(
            array(
                'page_title' => 'Ogólne ustawiena szablonu',
                'menu_title' => 'Ustawienia szablonu',
                'menu_slug' => 'theme-general-settings',
                'capability' => 'edit_posts',
                'redirect' => false
            )
        );

        acf_add_options_sub_page(
            array(
                'page_title' => 'Stopka',
                'menu_title' => 'Stopka',
                'parent_slug' => $option_page['menu_slug']
            )
        );
    }
}

if (!defined('cut2code')) {
    define('cut2code', get_theme_root() . '/' . get_template() . '/');
}


// flush_rewrite_rules(false);

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) {
        return 'Opera';
    } elseif (strpos($user_agent, 'Edge')) {
        return 'Edge';
    } elseif (strpos($user_agent, 'Chrome')) {
        return 'Chrome';
    } elseif (strpos($user_agent, 'Safari')) {
        return 'Safari';
    } elseif (strpos($user_agent, 'Firefox')) {
        return 'Firefox';
    } elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) {
        return 'Internet Explorer';
    }

    return 'Other';
}

add_action('after_setup_theme', 'wpdocs_theme_setup');
function wpdocs_theme_setup()
{
    add_image_size('image-content-element', 591, 458, false);
}


function load_cut2code_scripts()
{
    wp_enqueue_style('cut2code-main-style', get_template_directory_uri().'/style.css');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.3.min.js', NULL, NULL, true);
    wp_enqueue_script('load-posts', get_template_directory_uri() . '/assets/js/load-more.js', NULL, NULL, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/scripts.js', NULL, NULL, true);
}
add_action('wp_enqueue_scripts', 'load_cut2code_scripts');


function load_more_params() {
    $wp_query = new WP_Query(array(
        'post_type' => 'post', 
        'posts_per_page' => 4,
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1 
    )); 

    $params = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'posts' => json_encode( $wp_query->query_vars ),
        'current_page' => 1,
        'max_page' => $wp_query->max_num_pages
    );
    echo '<script>window.load_more_params = ' . json_encode( $params ) . ';</script>';
}
add_action( 'wp_head', 'load_more_params' );


add_action( 'wp_ajax_load_more_posts', 'load_more_posts' );
add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_posts' );

function load_more_posts() {
  $query = new WP_Query( array(
    'post_type' => 'post',
    'paged' => $_POST['page'] + 1,
  ) );
  if( $query->have_posts() ) {
    while( $query->have_posts() ){
        $query->the_post();
        get_template_part( 'components/page_sections/posts/posts_tile', '',get_post() );
    } 
    wp_reset_postdata();
  } else {
      echo 0;
  }
  die();
}
?>
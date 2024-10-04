



<?php



/**
 * Teraformed Theme Functions
 *
 * This file enqueues scripts, styles, and handles various
 * functionality for the theme.
 *
 * @package Teraformed
 */




function enqueue_custom_styles_and_scripts() {
    
    error_log('Theme directory URI: ' . get_template_directory_uri('/js/plugins/swiper.min.js'));
    error_log('Theme file URI: ' . get_theme_file_uri('/js/plugins/swiper.min.js'));

    
    wp_enqueue_style('bootstrap-grid', get_theme_file_uri('/css/plugins/bootstrap-grid.css'));
    wp_enqueue_style('font-awesome', get_theme_file_uri('/css/plugins/font-awesome.min.css'));
    wp_enqueue_style('swiper', get_theme_file_uri('/css/plugins/swiper.min.css'));
    wp_enqueue_style('fancybox', get_theme_file_uri('/css/plugins/fancybox.min.css'));
    wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));

   
    if (!file_exists(get_theme_file_path('/css/style.css'))) {
        error_log('CSS file does not exist: ' . get_theme_file_path('/css/style.css'));
    }

    
    wp_enqueue_script('jquery');

   
    wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), array('jquery'), null, true);
    wp_enqueue_script('swup', get_theme_file_uri('/js/plugins/swup.min.js'), array('jquery'), null, true);
    wp_enqueue_script('swiper', get_theme_file_uri('/js/plugins/swiper.min.js'), array('jquery'), null, true);
    wp_enqueue_script('fancybox', get_theme_file_uri('/js/plugins/fancybox.min.js'), array('jquery'), null, true);
    wp_enqueue_script('gsap', get_theme_file_uri('/js/plugins/gsap.min.js'), array('jquery'), null, true);
    wp_enqueue_script('smooth-scroll', get_theme_file_uri('/js/plugins/smooth-scroll.js'), array('jquery'), null, true);
    wp_enqueue_script('scroll-trigger', get_theme_file_uri('/js/plugins/ScrollTrigger.min.js'), array('jquery'), null, true);
    wp_enqueue_script('scroll-to', get_theme_file_uri('/js/plugins/ScrollTo.min.js'), array('jquery'), null, true);
   

    
    if (!file_exists(get_theme_file_path('/js/main.js'))) {
        error_log('JS file does not exist: ' . get_theme_file_path('/js/main.js'));
    }
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');




function check_if_child_theme() {
    if (is_child_theme()) {
        error_log('A child theme is active.');
    } else {
        error_log('No child theme is active. Using the parent theme.');
    }
}

add_action('after_setup_theme', 'check_if_child_theme');



?>

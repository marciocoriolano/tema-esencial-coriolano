<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function coriolano_canvas_elementor_support() {
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'coriolano_canvas_elementor_support');

function coriolano_canvas_scripts() {
    wp_enqueue_style('reset', 'https://unpkg.com/modern-css-reset/dist/reset.min.css');
}
add_action('wp_enqueue_scripts', 'coriolano_canvas_scripts');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

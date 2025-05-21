<?php
// Stíluslap (style.css) beillesztése
function sajat_sablon_enqueue_styles() {
    wp_enqueue_style('sajat-stilus', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'sajat_sablon_enqueue_styles');

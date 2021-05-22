<?php

function hund_svart_files() {
    wp_enqueue_style('hun_svart_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'hund_svart_files');


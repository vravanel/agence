<?php
add_theme_support('title-tag');

function agenceDV_enqueue_styles()
{
    wp_enqueue_style('agenceDV-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'agenceDV_enqueue_styles');

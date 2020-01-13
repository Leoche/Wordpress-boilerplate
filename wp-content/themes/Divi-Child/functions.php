<?php

/* Chargement de la feuille du style du theme parent */
add_action('wp_enqueue_scripts', 'wpchild_enqueue_styles');
function wpchild_enqueue_styles()
{
  wp_enqueue_style('wpm-Divi-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_script('index_js', get_stylesheet_directory_uri() . '/js/index.js', array(), '1.0', true);
}
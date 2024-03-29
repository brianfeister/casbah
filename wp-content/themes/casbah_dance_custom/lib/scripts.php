<?php
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.min.css
 *
 * Enqueue scripts in the following order:
 * 1. /theme/assets/js/vendor/modernizr-2.6.2.min.js  (in head.php)
 * 2. jquery-1.8.3.min.js via Google CDN              (in head.php)
 * 3. /theme/assets/js/scripts.min.js
 */

function roots_scripts() {
  wp_enqueue_style('roots_main', get_template_directory_uri() . '/assets/css/main.min.css', false, 'dfa2747f5563cc8af665aa6d2f8deed6');

  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '1.8.3', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', false, '260c209af392f8d2e957b6f81ea58afd', true);
  wp_enqueue_script('roots_scripts');
}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);

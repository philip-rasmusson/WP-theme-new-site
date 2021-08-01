<?php

function register_nav() {
  register_nav_menus (
    array(
      'header' => 'Header'
      )
    );
  register_nav_menus (
    array(
      'footer' => 'Footer'
      )
    );
  register_nav_menus (
    array(
      '404' => '404'
      )
    );
}

if (! function_exists('setup')):
  function setup(){
    register_nav();
    add_theme_support('post-thumbnails');
    add_image_size('team', 475, 475, array('center', 'center'));
  }
endif;
function scripts_header(){
  wp_enqueue_style('init', get_stylesheet_uri());
}
function scripts_footer(){
  // wp_enqueue_script('init', get_template_directory_uri().'/js/init.js', array('jquery'));
}

add_action('after_setup_theme', 'setup');
add_action('wp_enqueue_scripts', 'scripts_header');
// add_action('wp_footer', 'scripts_footer');


// Shortcodes
require_once('shortcodes/coffee-making-areas.php');

// function wpb_custom_logo() {
//   echo '
//   <style type="text/css">
//   #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
//   background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/custom-logo.png) !important;
//   background-position: 0 0;
//   color:#dd34ff;
//   }
//   #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
//   background-position: 0 0;
//   }
//   </style>
//   ';
//   }
//   //hook into the administrative header output
//   add_action('wp_before_admin_bar_render', 'wpb_custom_logo');
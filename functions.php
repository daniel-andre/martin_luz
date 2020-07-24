<?php

function martin_scripts()
{
  wp_register_script('main-script', get_template_directory_uri() . '/js/main.js', array(), false, true);
  wp_enqueue_script('main-script');
}
add_action('wp_enqueue_scripts', 'martin_scripts');

function martin_css()
{
  wp_register_style('bootstrap-style', get_template_directory_uri() . '/lib/bootstrap.min.css', array(), false, false);
  wp_register_style('martin-style', get_template_directory_uri() . '/style.css', array(), false, false);

  wp_enqueue_style('bootstrap-style');
  wp_enqueue_style('martin-style');
}
add_action('wp_enqueue_scripts', 'martin_css');

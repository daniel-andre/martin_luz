<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:url" content="<?php bloginfo('url'); ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <?php wp_head(); ?>
</head>

<body>
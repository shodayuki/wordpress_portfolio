<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title("|", true, "right"); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div id="header_sp" class="clearfix">
      <div id="logo">
        <a href="<?php echo home_url(); ?>">Portfolio</a>
      </div>
      <div id="nav_toggle">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <nav class="nav_pc">
      <ul>
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/works/">WORKS</a></li>
        <li><a href="<?php echo home_url(); ?>/profile/">PROFILE</a></li>
        <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
      </ul>
    </nav>
    <nav class="nav_sp">
      <ul>
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/works/">WORKS</a></li>
        <li><a href="<?php echo home_url(); ?>/profile/">PROFILE</a></li>
        <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
      </ul>
    </nav>
  </header>
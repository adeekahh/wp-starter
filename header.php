<?php

/**
 * The header for our theme.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <script>
    document.documentElement.className += ' js-enabled';
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="Header" role="banner">

  </header>
<?php

/**
 * A custom template for the front page
 */

get_header(); ?>

<main class="Main" role="main">

  <?php if (function_exists('have_rows') && have_rows('homepage_modules')) :
    while (have_rows('homepage_modules')) : the_row();
    //require get_theme_root() . '/wordpress-starter-theme-parcel-master/template-parts/homepage-modules/homepage-pagetop.php';
    endwhile;
  else :
    the_content();
  endif; ?>

</main><!-- .Main -->

<?php get_footer(); ?>
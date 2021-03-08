<?php

/**
 * The template for displaying all pages.
 */

get_header(); ?>

<main class="Main" role="main">
  <?php require_once locate_template('/template-parts/content-page.php'); // Content page modules 
  ?>
</main><!-- .Main -->

<?php get_footer(); ?>
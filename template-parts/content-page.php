<?php
if (function_exists('have_rows') && have_rows('content_components')) :
  while (have_rows('content_components')) : the_row();
  //require get_theme_root() . '/wordpress-starter-theme-parcel-master/template-parts/content-modules/contentpage-pagetop.php';
  endwhile;
else :
  the_content();
endif;

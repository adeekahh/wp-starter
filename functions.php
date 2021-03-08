<?php
function am_setup()
{
  add_theme_support('automatic-feed-links');



  add_theme_support('title-tag');

  add_theme_support('post-thumbnails');


  register_nav_menus(array(
    'header' => esc_html__('Header Menu', 'am'),
    // 'footer' => esc_html__( 'Footer Menu', 'am' ),
  ));


  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'am_setup');


function am_content_width()
{
  $GLOBALS['content_width'] = apply_filters('_am_content_width', 640);
}
add_action('after_setup_theme', 'am_content_width', 0);


function am_widgets_init()
{
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'am'),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="Widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="Widget-title">',
    'after_title'   => '</h1>',
  ));
}
add_action('widgets_init', 'am_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function am_scripts()
{


  if (defined('WP_ENV') && WP_ENV == 'development') {
    wp_enqueue_style('fonts-css', get_template_directory_uri() . '/static/fonts/fonts.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/main.css');

    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/main.js', array('jquery'), null, true);
  } else {
    wp_enqueue_style('fonts-css', get_template_directory_uri() . '/static/fonts/fonts.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/main.css', array(), filemtime(get_template_directory() . '/dist/main.css'));

    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/main.js', array('jquery'), filemtime(get_template_directory() . '/dist/main.js'), true);
  }
}
add_action('wp_enqueue_scripts', 'am_scripts');

define('DISALLOW_FILE_EDIT', true);

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/common-functions.php';

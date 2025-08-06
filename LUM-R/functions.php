<?php
function my_seo() {
  function my_wpseo_title($title) { 
    global $title;
    return $title; 
  } 
  add_filter('wpseo_title', 'my_wpseo_title');
  add_filter( 'wpseo_opengraph_title', 'my_wpseo_title');
  add_filter( 'wpseo_twitter_title', 'my_wpseo_title');
  
  function my_wpseo_desc($desc)
  { 
    global $desc;
    return $desc;
  }
  add_filter( 'wpseo_metadesc',  'my_wpseo_desc');
  add_filter( 'wpseo_opengraph_desc',  'my_wpseo_desc');
  add_filter( 'wpseo_twitter_description',  'my_wpseo_desc');
}
// SEO

function lumr_theme_enqueue_styles() {
  // css
  wp_enqueue_style('lumr-style', get_template_directory_uri() . '/style.css', array(), '1.0');
  wp_enqueue_style('style_style',get_stylesheet_directory_uri().'/css/style.css',array());
  // js
  wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js', array(), null, true); 
  wp_enqueue_script( 'faq_accordion', get_template_directory_uri().'/js/faq_accordion.js', array(), false, true );
  wp_enqueue_script( 'animation', get_template_directory_uri().'/js/animation.js', array(), false, true );  
}
add_action('wp_enqueue_scripts', 'lumr_theme_enqueue_styles');
// css/js
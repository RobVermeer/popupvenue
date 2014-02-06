<?php

function change_wordpress_login() {
  $css = TEMPLATEPATH . '/css/style-login.css';
  
  if( file_exists($css) )
    echo '<link rel="stylesheet" href="' . get_bloginfo('template_url') . '/css/style-login.css' . '" type="text/css" media="all" />' . "\n";
}
add_action( 'login_enqueue_scripts', 'change_wordpress_login' );

function change_wp_login_url() {
  return get_bloginfo('url');
}
add_filter('login_headerurl', 'change_wp_login_url');

function change_wp_login_title() {
  return get_bloginfo('name');
}
add_filter('login_headertitle', 'change_wp_login_title');

?>
<?php

define('INC_PATH', plugin_dir_path(__FILE__));

/* Upgrade site */
$site_version = get_option("site_version");
$version = 0;

if( $site_version != $version ) {
	update_option("cb_version", $version);
}

/* Priority HIGH */
include(INC_PATH . "helpers.php");

/* Priority Medium */

/* Priority low */
include(INC_PATH . "googleanalytics.php");
include(INC_PATH . "opengraph.php");
include(INC_PATH . "seo.php");

/* Admin area */
if( is_admin() ) {
	include(INC_PATH . "style-login.php");
}

?>
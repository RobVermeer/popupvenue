<?php

define('INC_PATH', plugin_dir_path(__FILE__));

/* Upgrade site */
$site_version = get_option("site_version");
$version = 0;

if( $site_version != $version ) {
	update_option("cb_version", $version);
}

/* Priority HIGH */
//include(INC_PATH . "file.php");

/* Priority Medium */

/* Priority low */

/* Admin area */
if( is_admin() ) {
	
}

?>
<?php

function disable_all_buddypress_crap() {
	remove_all_actions("bp_enqueue_styles");
	remove_all_actions("bp_enqueue_scripts");
	remove_all_actions("bp_head");
}
add_action("init", "disable_all_buddypress_crap");

?>
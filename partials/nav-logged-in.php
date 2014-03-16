<ul>
	<li>
		<a href="<?php echo bp_loggedin_user_domain(); ?>" class="my-profile"><?php bp_loggedin_user_avatar( array('width' => 18, 'height' => 18) ) ?> <?php bp_loggedin_user_fullname(); ?><?php echo (messages_get_unread_count() || bp_friend_get_total_requests_count() ? ' (' . (messages_get_unread_count() + bp_friend_get_total_requests_count()) . ')' : ''); ?></a>
		<ul>
			<li><a href="<?php echo bp_loggedin_user_domain(); ?>profile/edit/"><?php _e("Edit profile", "puv"); ?></a></li>
			<li><a href="<?php echo bp_loggedin_user_domain(); ?>messages/"><?php _e("Inbox", "puv"); ?><?php echo (messages_get_unread_count() ? ' (' . messages_get_unread_count() . ')' : ''); ?></a></li>
			<?php if ( bp_friend_get_total_requests_count() > 0 ) : ?>
			<li><a href="<?php echo bp_loggedin_user_domain(); ?>friends/requests/"><?php _e("Friend requests", "puv"); ?><?php echo (bp_friend_get_total_requests_count() ? ' (' . bp_friend_get_total_requests_count() . ')' : ''); ?></a></li>
			<?php endif; ?>
			<li><a href="<?php echo wp_logout_url( bp_get_root_domain() ); ?>" class="no-ajax"><?php _e("Log out", "puv"); ?></a></li>
		</ul>
	</li>
</ul>

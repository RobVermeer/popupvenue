<?php

function add_opengraph_tags() {
	if( is_singular() ) {
		global $post;
		$img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
		?>
		<meta property="og:title" content="<?php echo get_the_title(); ?>" />
		<meta property="og:description" content="<?php echo trunc_chars(strip_tags(preg_replace('/\s+/', ' ', preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $post->post_content))), 200, '...'); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?php echo get_permalink(); ?>" />
		<meta property="og:image" content="<?php echo get_encode_img_file_url($img[0]); ?>" />
		<meta property="og:site_name" content="<?php echo get_bloginfo("name"); ?>" />
		<?php
	}
}
add_action("wp_head", "add_opengraph_tags");

?>
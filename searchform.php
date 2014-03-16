<form role="search" method="get" id="searchform" action="<?php bloginfo("url"); ?>" class="col-md-4 search-form">
	<label class="sr-only" for="s"><?php _e("Search for:", "puv"); ?></label>
	<input required="required" placeholder="<?php _e("Search", "puv"); ?>" type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search-input" />
	<input type="submit" id="searchsubmit" value="<?php _e("Search", "puv"); ?>" class="search-submit" />
</form>
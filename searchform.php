<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<input type="text" name="search" class="search" placeholder="Search this site..." value="<?php the_search_query(); ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="Search" class="btn" />
</form>

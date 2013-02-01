<form class="no-space" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="screen-reader" for="s">Search this site:</label>
	<input type="text" class="input-search input-medium" placeholder="Search this site..." value="<?php the_search_query(); ?>" name="s" id="s">
	<button type="submit" id="searchsubmit" value="Search" class="btn-search"><i class="icon look"></i></button>
</form>

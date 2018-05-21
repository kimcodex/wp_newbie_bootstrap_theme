<form class="form-inline" role="search" method="get" action="<?php home_url('/'); ?>">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" autocomplete="off" aria-label="Search" value="<?php get_search_query(); ?>" name="s" title="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="<?php get_search_query(); ?>">Search</button>
</form>
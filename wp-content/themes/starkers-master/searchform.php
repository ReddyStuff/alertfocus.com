<form action="/" method="get">
    <fieldset class="site-nav-link site-nav-first-secondary-link site-nav-icon-link">
        <label for="search">
            <input type="text"
                   name="s"
                   id="search"
                   class="search-field"
                   placeholder="Search"
                   title="Search"
                   value="<?php the_search_query(); ?>" />
        </label>
        <input type="hidden" value="post" name="post_type" id="post_type" />
    </fieldset>
</form>
<?php
    // codex.wordpress.org/Template_Tags/wp_list_categories
    $args = array(
        'show_option_all'    => '',
        'orderby'            => 'name',
        'order'              => 'ASC',
        'style'              => 'none',
        'show_count'         => 0,
        'hide_empty'         => 1,
        'use_desc_for_title' => 0,
        'child_of'           => 2,
        'exclude'            => '',
        'exclude_tree'       => '',
        'include'            => '',
        'hierarchical'       => 1,
        'title_li'           => '',
        'show_option_none'   => '',
        'number'             => null,
        'echo'               => 0,
        'depth'              => 0,
        'taxonomy'           => 'category',
    );
    $categories = get_categories( $args );
?>

<div class="site-header-inner-wrap site-header-inner-wrap-fixed">
    <nav class="site-nav">
        <ul class="site-nav-list">
            <li class="site-nav-item site-nav-logo-item" style="width: auto;">
                <a class="site-nav-link site-nav-logo-link" href="/">
                    <span class="site-nav-span site-nav-text-span site-nav-first-primary-span site-nav-logo-span">example.com</span>
                </a>
            </li>

            <?php foreach($categories as $cat) {
                echo '
                <li class="site-nav-item site-nav-logo-item" style="width: auto;">
                    <a class="site-nav-link site-nav-logo-link cat-' . $cat->slug . '"
                        href="' . get_category_link($cat->term_id) . '"
                        title="'. esc_attr($cat->name) . '">
                            <span class="site-nav-span site-nav-text-span site-nav-first-primary-span site-nav-logo-span">'
                                . $cat->cat_name .
                            '</span>
                    </a>
                </li>';
            } ?>

            <li class="site-nav-item site-nav-item-theme-usatoday site-nav-secondary-item site-nav-end-item site-nav-first-secondary-item site-nav-icon-item site-nav-search-item site-nav-module site-nav-search-module">
                <a class=" site-nav-link site-nav-link-theme-usatoday site-nav-end-link site-nav-first-secondary-link site-nav-icon-link site-nav-search-link" href="#">
                    <span class="site-nav-span site-nav-span-theme-usatoday site-nav-end-span site-nav-first-secondary-span site-nav-icon-span site-nav-search-span">Search</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
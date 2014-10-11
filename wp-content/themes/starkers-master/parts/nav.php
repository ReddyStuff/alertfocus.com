<?php
    // codex.wordpress.org/Template_Tags/wp_list_categories
    $args = array(
        'hide_empty'         => 1,  // Yes, hide empty categories
        'use_desc_for_title' => 0,  // No, we'll write custom titles
        'child_of'           => 2,  // Show only certain children categories
        'hierarchical'       => 0,  // Don't display sub-categories
        'title_li'           => '', // Remove outer list element
        'show_option_none'   => '', // If there are no categories, leave space empty
        'number'             => '', // How many categories are shown
        'echo'               => 0,  // Keep results as variable
    );
    $categories = get_categories( $args );
?>

<div class="site-header-inner-wrap">
    <nav class="site-nav">
        <ul class="site-nav-list">
            <li class="site-nav-item">
                <a class="site-nav-link site-nav-logo-link" href="/">
                    <span class="site-nav-span site-nav-text-span site-nav-first-primary-span">calmfocus.com</span>
                </a>
            </li>

            <?php foreach($categories as $cat) {
                echo '
                <li class="site-nav-item">
                    <a class="site-nav-link site-nav-text-link cat-' . $cat->slug . '"
                        href="' . get_category_link($cat->term_id) . '"
                        title="'. esc_attr($cat->name) . '">
                            <span class="site-nav-span site-nav-text-span">'
                                . $cat->cat_name .
                            '</span>
                    </a>
                </li>';
            } ?>

            <li class="site-nav-secondary-item">
                <?php get_search_form(); ?>
            </li>
        </ul>
    </nav>
</div>
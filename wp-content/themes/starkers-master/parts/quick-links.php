<?php
// codex.wordpress.org/Template_Tags/wp_list_categories
$argsQuickLinks = array(
    'hide_empty'         => 0,  // No, show all
    'use_desc_for_title' => 0,  // No, we'll write custom titles
    'hierarchical'       => 0,  // Don't display sub-categories
    'include'            => '17,18,19,20', // Only include Wrap-Around, Evidence, Links and About categories in this query
    'title_li'           => '', // Remove outer list element
    'echo'               => 0,  // Keep results as variable
);

$quickLinks = get_categories( $argsQuickLinks );
?>

<section class="card-suspender">
    <p class="card-suspender-header">Quick Links</p>

    <ul class="quick-links-list">

        <li class="quick-links-item">
            <a class="card-suspender-link" href="/" title="Home">Home</a>
        </li>

        <?php foreach($quickLinks as $cat) {
            echo '
            <li class="quick-links-item">
                <a class="card-suspender-link"
                    href="' . get_category_link($cat->term_id) . '"
                    title="'. esc_attr($cat->name) . '">'
                        . $cat->cat_name .
                '</a>
            </li>';
        } ?>

        <?php $category_relieve = get_category_link( 2 ); ?>
        <li class="quick-links-item">
            <a class="card-suspender-link" href="<?php echo esc_url( $category_relieve ); ?>" title="Relieve">Relieve</a>
        </li>

        <?php $category_perform = get_category_link( 3 ); ?>
        <li class="quick-links-item">
            <a class="card-suspender-link" href="<?php echo esc_url( $category_perform ); ?>" title="Perform">Perform</a>
        </li>

    </ul>
</section>
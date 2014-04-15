<?php
$args = array(
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories = get_categories($args);
?>

<div class="headlines-header">
    <h5 class="headlines-header-title single">View Articles in Other Categories</h5>
</div>
<ul class="category-list">
        <?php foreach($categories as $category) { echo '
            <li class="category-list-item">
                <a class="button button-category" href="' . get_category_link( $category->term_id ) . '" title="' . $category->name . '">'. $category->name.'</a>
            </li>
        ';} ?>
</ul>
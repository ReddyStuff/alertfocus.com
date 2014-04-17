<?php
$argsCategories = array(
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories = get_categories($argsCategories);
?>

<div class="categories-container">
    <div class="headlines-header">
        <h5 class="categories-header-title">View Other Categories</h5>
    </div>
    <div class="categories">
        <ul class="categories-list">
        <?php foreach($categories as $category) { echo '
            <li class="categories-list-item">
                <a class="categories-list-anchor"
                    href="' . get_category_link( $category->term_id ) . '"
                    title="' . $category->name . '">'
                . $category->name .
                '</a>
            </li>
        ';} ?>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
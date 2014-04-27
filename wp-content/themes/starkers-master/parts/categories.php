<?php
$argsCategoriesRelieve = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => 2
);
$argsCategoriesPerform = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => 3
);
$argsCategoriesOther = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'include' => '17,18,19,20'
);
$categoriesRelieve = get_categories($argsCategoriesRelieve);
$categoriesPerform = get_categories($argsCategoriesPerform);
$categoriesOther = get_categories($argsCategoriesOther);
?>

<div class="categories-container">
    <div class="headlines-header">
        <h5 class="categories-header-title">View Other Categories</h5>
    </div>
    <div class="categories">
        <ul class="categories-list">

            <?php $category_relieve = get_category_link( 2 ); ?>
            <li class="categories-list-item full">
                <a class="categories-list-anchor" href="<?php echo esc_url( $category_relieve ); ?>" title="Relieve">Relieve</a>
            </li>

            <?php foreach($categoriesRelieve as $category) { echo '
                <li class="categories-list-item partial">
                    <a class="categories-list-anchor"
                        href="' . get_category_link( $category->term_id ) . '"
                        title="' . $category->name . '">'
                    . $category->name .
                    '</a>
                </li>
            ';} ?>

            <li class="categories-list-item-empty"></li>

            <?php $category_perform = get_category_link( 3 ); ?>
            <li class="categories-list-item full">
                <a class="categories-list-anchor" href="<?php echo esc_url( $category_perform ); ?>" title="Perform">Perform</a>
            </li>

            <?php foreach($categoriesPerform as $category) { echo '
                <li class="categories-list-item partial">
                    <a class="categories-list-anchor"
                        href="' . get_category_link( $category->term_id ) . '"
                        title="' . $category->name . '">'
                    . $category->name .
                    '</a>
                </li>
            ';} ?>

            <li class="categories-list-item-empty"></li>

            <li class="categories-list-item full">
                <span class="categories-list-anchor">Other</span>
            </li>
            <?php foreach($categoriesOther as $category) { echo '
                <li class="categories-list-item partial">
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
<div class="headline-page active">

    <?php
        $argsRecent = array(
            'numberposts' => 6,
            'order' => 'DESC',
            'orderby' => 'date',
        );

        $recentPosts = get_posts( $argsRecent );

        foreach ( $recentPosts as $post) : setup_postdata($post);

        $category = get_the_category();
    ?>

    <div class="headline headline-asset-item headline-asset-item-card hasimage">
        <span class="parent-label news cat-<?php echo $category[0]->slug; ?>">
            <?php echo $category[0]->cat_name; ?>
        </span>
        <a class="anchor headline-grid-load-story" href="<?php the_permalink(); ?>">

            <div class="headline-asset-item-front tile headline-asset-item-news-tile headline-asset-item-tile">
                <div class="image-wrap">
                    <img alt="" class="headline-grid-image" height="220" src="" width="200">
                </div>

                <h3 class="title image headline-asset-item-front-title">
                    <span class="content-info-icon-text"><?php the_title(); ?></span>
                </h3>
            </div>

            <div class="headline-asset-item-back tile headline-asset-item-tile headline-asset-item-news-tile">
                <h3 class="title headline-asset-item-back-title"><?php the_title(); ?></h3>

                <p class="headline-asset-item-back-text" data-fulltext="Francis greeted Benedict, who sat in the front row of St. Peters Basilica with the cardinals."></p>

                <p class="headline-asset-item-back-listview-text" data-fulltext="Francis greeted Benedict, who sat in the front row of St. Peters Basilica with the cardinals."><?php the_excerpt(); ?></p>
            </div>

        </a>
    </div>
    <?php endforeach; wp_reset_postdata() ;?>

</div>
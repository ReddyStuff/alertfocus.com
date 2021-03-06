<div class="headline-page active">

    <?php
        $current_cat = intval( get_query_var('cat') );
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $argsCategory=array(
            'category__and' => array($current_cat),
            'paged' => $paged,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'caller_get_posts'=> 1,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        $categoryPosts = get_posts( $argsCategory );

        foreach ( $categoryPosts as $post) : setup_postdata($post);
        $posttags = get_the_tags();
    ?>

        <div class="headline-item">
            <span class="parent-label cat-<?php foreach($posttags as $tag) {echo strtolower($tag->name . ' ');} ?>">
                <?php foreach($posttags as $tag) {echo $tag->name . ' ';} ?>
            </span>
            <a class="headline-grid-story" href="<?php the_permalink(); ?>">

                <div class="headline-item-front headline-tile">
                    <div class="image-wrap">
                        <?php include('post-thumbnail.php'); ?>
                    </div>

                    <h3 class="title image headline-item-front-title">
                        <span class="content-info-icon-text"><?php the_title(); ?></span>
                    </h3>
                </div>

                <div class="headline-item-back headline-tile cat-<?php foreach($posttags as $tag) {echo strtolower($tag->name . ' ');} ?>">
                    <h3 class="title headline-item-back-title"><?php the_title(); ?></h3>

                    <p class="headline-item-back-text">
                        <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,12); ?>
                    </p>
                </div>

            </a>
        </div>
    <?php endforeach; wp_reset_postdata() ;?>

</div>
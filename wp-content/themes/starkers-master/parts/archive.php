<div class="headline-page active">

    <?php
        $argsArchive = array (
            'numberposts' => '-1',
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $archivePosts = get_posts( $argsArchive );

        foreach ( $archivePosts as $post) : setup_postdata($post);
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

<div class="headline-page active">

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="headline headline-asset-item headline-asset-item-card">
            <span class="parent-label cat-<?php echo $category[0]->slug; ?>">
                <?php echo $category[0]->cat_name; ?>
            </span>
            <a class="anchor headline-grid-load-story" href="<?php the_permalink(); ?>">

                <div class="headline-asset-item-front headline-asset-item-tile">
                    <div class="image-wrap">
                        <?php include('post-thumbnail.php'); ?>
                    </div>

                    <h3 class="image headline-asset-item-front-title">
                        <span class="content-info-icon-text"><?php the_title(); ?></span>
                    </h3>
                </div>

                <div class="headline-asset-item-back tile headline-asset-item-tile headline-asset-item-news-tile">
                    <h3 class="title headline-asset-item-back-title"><?php the_title(); ?></h3>

                    <p class="headline-asset-item-back-text">
                        <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,16); ?>
                    </p>
                </div>

            </a>
        </div>
    <?php endwhile; ?>

</div>
<?php
    $argsHero = array(
        'posts_per_page' => 1,
        'orderby' => 'rand'
    );

    $hero = get_posts( $argsHero );

    foreach ( $hero as $post ) : setup_postdata( $post );

    $category = get_the_category();
?>

<div class="hero-left-pane hero-asset-open">
    <span class="parent-label cat-<?php echo $category[0]->slug; ?>">
        <?php echo $category[0]->cat_name; ?>
    </span>

    <div class="hero-text">
        <div class="hero-story">
            <h1>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h1>

            <ul class="actions clearfix">
                <li>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="media">
        <?php include('post-thumbnail.php'); ?>
    </div>
</div>

<?php endforeach; wp_reset_postdata() ;?>
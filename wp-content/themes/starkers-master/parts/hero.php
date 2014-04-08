<?php
    $argsHero = array(
        'posts_per_page' => 1,
        'orderby' => 'rand'
    );

    $hero = get_posts( $argsHero );

    foreach ( $hero as $post ) : setup_postdata( $post );
    $posttags = get_the_tags();
?>

<div class="hero-left-pane hero-asset-open">
    <span class="parent-label cat-<?php foreach($posttags as $tag) {echo strtolower($tag->name . ' ');} ?>">
        <?php foreach($posttags as $tag) {echo $tag->name . ' ';} ?>
    </span>

    <div class="hero-text">
        <div class="hero-story">
            <h1>
                <a href="<?php the_permalink(); ?>" title="Click to View Article"><?php the_title(); ?></a>
            </h1>

            <ul class="actions clearfix">
                <li>
                    <a href="<?php the_permalink(); ?>" title="Click to View Article">View Article</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="media">
        <?php include('post-thumbnail.php'); ?>
    </div>
</div>

<?php endforeach; wp_reset_postdata() ;?>
<?php
    $argsHero = array(
        'posts_per_page' => 1,
        'orderby' => 'rand'
    );

    $hero = get_posts( $argsHero );

    foreach ( $hero as $post ) : setup_postdata( $post );

    $category = get_the_category();
?>

<div class="hero-left-pane hero-asset-open news">
    <span class="parent-label cat-<?php echo $category[0]->slug; ?>">
        <?php echo $category[0]->cat_name; ?>
    </span>

    <div class="hero-text">
        <div class="hero-story">
            <h1>
                <a class="load-story" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h1>

            <ul class="actions clearfix">
                <li>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="media">
        <?php
        if( has_post_thumbnail() ) { ?>
            <div class="entry-thumbnail">
                <?php the_post_thumbnail();?>
            </div>
        <?php } else { ?>
            <img class="post-thumb" src="http://lorempixel.com/420/420" alt=""/>
        <?php } ?>
    </div>
</div>

<?php endforeach; wp_reset_postdata() ;?>
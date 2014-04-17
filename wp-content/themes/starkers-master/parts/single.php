<div class="article-single">
    <div class="image-wrap single">
        <?php include('post-thumbnail.php'); ?>
    </div>

    <?php global $post;
    $cat_ID = get_the_category($post->ID);
    $cat_ID = $cat_ID[0]->cat_ID;
    $this_post = $post->ID;

    query_posts(array(
        'cat' => $cat_ID,
        'post__not_in' => array($this_post),
        'posts_per_page' => 5,
        'orderby' => 'rand'
    ));
    ?>

    <?php the_content(); ?>

    <?php if ( have_posts() ) : ?>

    <?php include('related-articles.php'); ?>

    <?php else : endif; wp_reset_query(); ?>

    <?php include('categories.php'); ?>

    <div class="clearfix"></div>
</div>


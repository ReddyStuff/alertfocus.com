<div class="article-single">
    <div class="image-wrap single">
        <?php include('post-thumbnail.php'); ?>
    </div>

    <div class="related-articles-container">
        <div class="headlines-header">
            <h5 class="headlines-header-title">Related Articles</h5>
        </div>
        <div class="related-articles">
            <ul class="related-article-list">
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

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    echo '
                        <li class="hero-list-item first">
                            <a class="hero-list-anchor"
                                href="' . get_permalink() . '"
                                title="' . get_the_title() .'">'
                                . get_the_title() .
                            '</a>
                        </li>
                    ';
                endwhile; else : ?>
                    <p class="no-related-articles">
                        There are no articles related to this one.
                    </p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <?php the_content(); ?>

    <div class="clearfix"></div>
</div>
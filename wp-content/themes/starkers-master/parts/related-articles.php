<div class="related-articles-container">
    <div class="headlines-header">
        <h5 class="related-articles-header-title">View Related Articles</h5>
    </div>
    <div class="related-articles">
        <ul class="related-article-list">
            <?php while ( have_posts() ) : the_post(); echo '
                <li class="hero-list-item">
                    <a class="hero-list-anchor"
                        href="' . get_permalink() . '"
                        title="' . get_the_title() .'">'
                        . get_the_title() .
                    '</a>
                </li>
            '; endwhile; ?>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
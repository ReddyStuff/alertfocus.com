<div class="hero-headline-list-pane">
    <h5 class="hero-head">Most Popular</h5>

    <ul class="hero-list">

        <?php
        $popularpost = new WP_Query( array(
            'posts_per_page'    => 5,
            'meta_key'          => 'af_post_views_count',
            'orderby'           => 'meta_value_num',
            'order'             => 'DESC'
        ) );
        while ( $popularpost->have_posts() ) : $popularpost->the_post();

        echo '
            <li class="hero-list-item first">
                <a class="hero-list-anchor"
                    href="' . get_permalink() . '"
                    title="' . get_the_title() .'">'
                        . get_the_title() .
                '</a>
            </li>
        ';

        endwhile;
        ?>

    </ul>
</div>
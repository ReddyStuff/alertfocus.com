<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/html-header', 'parts/header' ) ); ?>

<?php include('parts/nav.php'); ?>

<?php if ( have_posts() ): ?>

    <article class="cards">
        <div class="card-container">
            <div class="card-wrap">
                <section class="card" >
                    <div class="card-full-width" >
                        <div class="card-primary-wrapper clearfix">
                            <div class="card-suspender-color alert"></div>

                            <?php include('parts/quick-links.php'); ?>

                            <section class="card-primary hero-module">
                                <div class="front-bump-shadow"></div>

                                <section class="card-primary headline-grid-module">
                                    <div class="headlines-header">
                                        <h5 class="headlines-header-title">Search Results for "<?php echo get_search_query(); ?>"</h5>
                                    </div>

                                    <div class="clearfix">

                                        <?php include('parts/search-results.php'); ?>

                                    </div>

                                    <div class="show-more">
                                        <h3><a class="button" href="/archive" title="View All Articles">View All Articles</a></h3>
                                    </div>
                                </section>
                            </section>
                        </div>

                        <div class="sidebar sidebar-home">
                            <div class="sidebar-wrapper">

                                <?php include('parts/contact-sidebar.php'); ?>

                            </div>
                        </div>
                    </div>

                    <div class="sh_bottom"></div>
                </section>
            </div>
        </div>
    </article>

<?php else: ?>

    <article class="cards">
        <div class="card-container">
            <div class="card-wrap">
                <section class="card" >
                    <div class="card-full-width" >
                        <div class="card-primary-wrapper clearfix">
                            <div class="card-suspender-color alert"></div>

                            <?php include('parts/quick-links.php'); ?>

                            <section class="card-primary hero-module">
                                <div class="front-bump-shadow"></div>

                                <section class="card-primary headline-grid-module">
                                    <div class="headlines-header">
                                        <h5 class="headlines-header-title">Search Results for "<?php echo get_search_query(); ?>"</h5>
                                    </div>

                                    <div class="clearfix">
                                        <div class="headline-page active">

                                            <p class="no-content-message">
                                                Sorry, there were no results found for "<?php echo get_search_query(); ?>".
                                            </p>

                                        </div>
                                    </div>

                                    <div class="show-more">
                                        <h3><a class="button" href="/archive" title="View All Articles">View All Articles</a></h3>
                                    </div>
                                </section>
                            </section>
                        </div>

                        <div class="sidebar sidebar-home">
                            <div class="sidebar-wrapper">

                                <?php include('parts/contact-sidebar.php'); ?>

                            </div>
                        </div>
                    </div>

                    <div class="sh_bottom"></div>
                </section>
            </div>
        </div>
    </article>

<?php endif; ?>

<?php get_template_parts( array( 'parts/footer','parts/html-footer' ) ); ?>
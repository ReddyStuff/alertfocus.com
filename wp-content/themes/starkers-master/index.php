<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php include('parts/shared/nav.php'); ?>

<?php if ( have_posts() ): ?>

    <article class="cards" id="cards" style="top:50px;">
        <div class="card-container">
            <div class="card-wrap">
                <section class="home card card-bumped" data-section-id="home" data-subsection-id="" id="section_home">
                    <div class="card-full-width" id="card_full_width_main">
                        <div class="card-primary-wrapper clearfix">
                            <div class="card-suspender-color alert"></div>

                            <?php include('parts/shared/quick-links.php'); ?>

                            <section class="card-primary hero-module" id="module-position-4">
                                <div class="front-bump-shadow"></div>

                                <div class="hero-headline-pack hero">
                                    <div class="hero-page-front">
                                        <div>

                                            <?php include('parts/shared/hero.php'); ?>

                                            <?php include('parts/shared/most-popular.php'); ?>

                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="card-primary headline-grid-module" id="module-position-10">
                                <div class="front-headlines-header">
                                    <h5 class="headlines-header-title">Articles</h5>

                                    <p class="last-updated">Updated <?php site_last_updated('') ?></p>
                                </div>

                                <div class="clearfix">

                                    <?php include('parts/shared/recent-articles.php'); ?>

                                </div>

                                <div class="show-more">
                                    <h3 class="pagination"><a class="button" href="archive" title="">View All Articles</a></h3>
                                </div>
                            </section>
                        </div>

                        <div class="sidebar sidebar-home">
                            <div class="sidebar-wrapper">
                                <div class="sidebar-scrollable-window">

                                    <?php include('parts/shared/contact-sidebar.php'); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sh_bottom"></div>
                </section>
            </div>
        </div>
    </article>

<?php else: ?>
<h2>Houston, we have a problem.</h2>
<?php endif; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
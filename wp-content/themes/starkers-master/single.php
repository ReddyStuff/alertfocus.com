<?php
/**
 * The Template for displaying all single posts
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

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article class="cards">
        <div class="card-container">
            <div class="card-wrap">
                <section class="home card" >
                    <div class="card-full-width" >
                        <div class="card-primary-wrapper clearfix">
                            <div class="card-suspender-color alert"></div>

                            <?php include('parts/quick-links.php'); ?>

                            <section class="card-primary hero-module single">
                                <div class="front-bump-shadow"></div>

                                <section class="card-primary headline-grid-module single">
                                    <div class="headlines-header">
                                        <h5 class="headlines-header-title single"><?php the_title(); ?></h5>
                                        <time class="headlines-header-time" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'Y-m-d' ); ?></time>
                                    </div>

                                    <div>

                                        <?php include('parts/single.php'); ?>

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
<?php endwhile; ?>

<?php get_template_parts( array( 'parts/footer','parts/html-footer') ); ?>
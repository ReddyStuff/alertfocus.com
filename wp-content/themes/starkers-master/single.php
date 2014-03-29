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

    <article class="cards" id="cards" style="top:50px;">
        <div class="card-container">
            <div class="card-wrap">
                <section class="home card card-bumped" data-section-id="home" data-subsection-id="" id="section_home">
                    <div class="card-full-width" id="card_full_width_main">
                        <div class="card-primary-wrapper clearfix">
                            <div class="card-suspender-color alert"></div>

                            <?php include('parts/quick-links.php'); ?>

                            <section class="card-primary hero-module single">
                                <div class="front-bump-shadow"></div>

                                <section class="card-primary headline-grid-module single">
                                    <div class="front-headlines-header" style="height: auto;overflow: auto;">
                                        <h5 style="width:82%;float: left;" class="headlines-header-title"><?php the_title(); ?></h5>
                                        <time style="width:15%; float: right;margin: 6px 5px 0 0;font-size: 10px;text-align:right" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'Y-m-d' ); ?></time>
                                    </div>
                                    <div>

                                    </div>

                                    <div class="clearfix">

                                        <div style="padding: 20px;">
                                            <div class="image-wrap">
                                                <?php
                                                if( has_post_thumbnail() ) { ?>
                                                    <?php the_post_thumbnail();?>
                                                <?php } else { ?>
                                                    <img class="post-thumb" src="http://lorempixel.com/200/220" alt="" style="width:150px;height:150px;float:left;margin:0 20px 10px 0;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.08);"/>
                                                <?php } ?>
                                            </div>

                                            <div style="float:right;width:275px;height:500px">Related Articles</div>

                                            <?php the_content(); ?>

                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </section>
                            </section>
                        </div>

                        <div class="sidebar sidebar-home">
                            <div class="sidebar-wrapper">
                                <div class="sidebar-scrollable-window">

                                    <?php include('parts/contact-sidebar.php'); ?>

                                </div>
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
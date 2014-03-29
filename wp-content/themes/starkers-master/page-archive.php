<?php
/**
 * The main archive template file
 * This displays all posts in the main page frame
 */
?>
<?php get_template_parts( array( 'parts/html-header', 'parts/header' ) ); ?>

<?php include('parts/nav.php'); ?>

<?php if ( have_posts() ): ?>

    <article class="cards" id="cards" style="top:50px;">
        <div class="card-container">
            <div class="card-wrap">
                <section class="home card card-bumped" data-section-id="home" data-subsection-id="" id="section_home">
                    <div class="card-full-width" id="card_full_width_main">
                        <div class="card-primary-wrapper clearfix">
                            <div class="card-suspender-color alert"></div>

                            <?php include('parts/quick-links.php'); ?>

                            <section class="card-primary hero-module" id="module-position-4">
                                <div class="front-bump-shadow"></div>

                                <section class="card-primary headline-grid-module" id="module-position-10">
                                    <div class="headlines-header">
                                        <h5 class="headlines-header-title">Archive</h5>
                                    </div>

                                    <div class="clearfix">

                                        <?php include('parts/archive.php'); ?>

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

<?php else: ?>
    <h2>Houston, we have a problem.</h2>
<?php endif; ?>

<?php get_template_parts( array( 'parts/footer','parts/html-footer') ); ?>
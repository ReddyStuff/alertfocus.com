<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

	add_filter( 'body_class', 'add_slug_to_body_class' );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */

	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function script_enqueuer() {
    //		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
    //		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments
	 *
	 * @return void
	 * @author Keir Whitaker

	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
    */

    /* ========================================================================================================================

    Site Last Updated - This will check the modified_date of all published posts and give you the most recent date.

    ======================================================================================================================== */

    function site_last_updated() {
        $recent = new WP_Query("showposts=1&orderby=modified&post_status=publish");
        if ( $recent->have_posts() ) {
            while ( $recent->have_posts() ) {
                $recent->the_post();
                $last_update = get_the_modified_date('Y-m-d');
            }
            echo $last_update;
        }
        else
            echo '';
    }

    /* ========================================================================================================================

    Popular Posts - This will track and display popular posts by views.

    ======================================================================================================================== */

    // Detect post view count and store it as a custom field for each post
    function af_set_post_views($postID) {
        $count_key = 'af_post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    // Remove pre-fetching to keep counts accurate
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

    // Add tracker to header
    function af_track_post_views ($post_id) {
        if ( !is_single() ) return;
        if ( empty ( $post_id) ) {
            global $post;
            $post_id = $post->ID;
        }
        af_set_post_views($post_id);
    }
    add_action( 'wp_head', 'af_track_post_views');

    /* ========================================================================================================================

    Excerpt Limiter - This will limit the number of words in the excerpt

    ======================================================================================================================== */

    function string_limit_words($string, $word_limit)
    {
        $words = explode(' ', $string, ($word_limit + 1));
        if(count($words) > $word_limit) {
            array_pop($words);
            //add ellipsis when more than limit word count
            echo implode(' ', $words)." ...";
        } else {
            echo implode(' ', $words);
        }
    }
<?php
/**
 * The template for displaying thumbnails for posts.
 *
 * If post has a featured image set, display it. Otherwise, pull a low-res image
 * from lorempixel.com and use that.
 */
?>

<?php if( has_post_thumbnail() ) { ?>
  <?php the_post_thumbnail();?>
<?php } else { ?>
  <img src="http://lorempixel.com/200/210" alt="Stock image from lorempixel.com"/>
<?php } ?>
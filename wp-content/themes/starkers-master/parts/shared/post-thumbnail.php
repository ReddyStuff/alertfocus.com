<?php if( has_post_thumbnail() ) { ?>
  <?php the_post_thumbnail();?>
<?php } else { ?>
  <img src="http://lorempixel.com/200/220" alt="stock image"/>
<?php } ?>
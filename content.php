
<div class="blog-post">
	<?php if(is_single()): ?>
		<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<?php else: ?>	
  		<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  	<?php endif; ?>
  		<p class="blog-post-meta"><?php the_date(); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>

  <?php if(has_post_thumbnail()) : ?>
  	<div class="thumbnail">
  		<?php echo the_post_thumbnail(); ?>
  	</div>		  	  	
  <?php endif; ?>

  <?php

	if(is_single()) :
		the_content();
		echo '<hr>';
		comments_template(); 
	else: 
		the_excerpt();	
	endif; ?>

</div><!-- /.blog-post -->
<?php 
	// on dashboard goto settings -> reading -> then select the page for your homepage
	get_header();
 ?>

<?php $slides = 5; ?>
<main role="main">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	  	<?php for ($i=1; $i <= $slides; $i++) : ?>
			<li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="<?php echo ($i==1)?'active':''; ?>"></li>
	  	<?php endfor; ?>
	  </ol>
	  <div class="carousel-inner">
	  	<?php
	  		$args = array( 'numberposts' => $slides );
	  		$recent_posts = wp_get_recent_posts( $args );
	  		

	  		foreach( $recent_posts as $recent ):?>

				<div class="carousel-item <?php echo ($recent_posts[0]["ID"] == $recent["ID"]) ? 'active' : '' ; ?>">
	  			  <img class="carousel-slide" src="<?php echo  get_the_post_thumbnail_url($recent["ID"],'full');; ?>" onerror="this.src='<?php echo get_template_directory_uri(). '/assets/img/carousel-bg.jpg'; ?>'" alt="First slide">
	  			  <div class="container">
	  			    <div class="carousel-caption">
	  			      <h1><?php echo $recent['post_title']; ?></h1>
	  			      <p><?php  echo wp_trim_excerpt($recent['post_content']);  ?></p>
	  			      <p><a class="btn btn-lg btn-primary" href="<?php echo get_permalink($recent["ID"]); ?>" role="button">Read more</a></p>
	  			    </div>
	  			  </div>
	  			</div>
	  				  	
	  		<?php endforeach;
	  		wp_reset_query();
	  	?>
	    
   
	  </div>
	  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</main>


<?php get_footer(); ?>

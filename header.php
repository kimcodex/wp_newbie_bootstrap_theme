<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description') ?>">

	<title><?php  bloginfo( 'name' ); ?> | 
		<?php is_front_page() ? bloginfo( 'description' ): wp_title(); ?>
	</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if(!(is_404()))  :  ?>
		<header>
		  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		    <?php the_custom_logo(); ?>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarCollapse">
		      <?php 
	        	 wp_nav_menu( array( 
	        		'theme_location' => 'nav',
	        		'container_id' => 'navbarCollapse',
	        		'container_class' => 'collapse navbar-collapse',
	        		'menu_class' => 'navbar-nav mr-auto', 
	        		'menu_id' => 'nav-menu-ul',
	        		 )); 
	           ?> 

		      <?php get_search_form(); ?>
		    </div>
		  </nav>
		</header>
    <?php endif; ?>





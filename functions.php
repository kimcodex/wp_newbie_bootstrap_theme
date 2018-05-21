<?php 
	// add css 
	function mytheme_add_theme_scripts() {
		wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Playfair+Display:700,900',false);
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css',false,'4.1.0','all');
		wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/carousel.css',false,rand(111,9999),'all');
		wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/blog.css',false,'4.1.0','all');
		// wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',false,'1.0','all');
		//theme style.css
		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), false, rand(111,9999), 'all');

	}
	add_action( 'wp_enqueue_scripts', 'mytheme_add_theme_scripts' );

	function wp_theme_setup(){
		// Theme Support
		add_theme_support( 'post-thumbnails' ); //add feature img on adding new post

		// Navigation menus
		register_nav_menus( array( 
			'nav' => __('Main Navigation  Menu'),
			'footer' => __('Footer Menu')
		) );

		//Post Formats
		add_theme_support( 'post-formats', array('aside', 'gallery') );

		// Custom Logo
		add_theme_support( 'custom-logo');

		//default searchform to html5
		add_theme_support( 'html5', array('search-form') );
	}

	add_action( 'after_setup_theme', 'wp_theme_setup' );

	//Excerpt length control of posts
	function set_excerpt_length(){
		return 25;
	}

	add_filter( 'excerpt_length', 'set_excerpt_length');

	//Widget locations
	function wp_init_widgets($id){
		register_sidebar( array( 
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget'=> '<div class="p-3">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="font-italic">',
			'after_title' => '</h4>',

		 ) );

		register_sidebar( array( 
			'name' => 'Box1',
			'id' => 'box1',
			'before_widget'=> '<div class="p-3">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="font-italic">',
			'after_title' => '</h4>',
		 ) );
	}

	add_action( 'widgets_init', 'wp_init_widgets' );

	// Next & previous posts link
	function posts_link_attributes_1() {
	    return 'class="btn btn-outline-primary"';
	}
	function posts_link_attributes_2() {
	    return 'class="btn btn-outline-primary"';
	}
	add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');


	// Customizer File

	// require get_template_directory(). '/inc/customizer.php';
 

?>

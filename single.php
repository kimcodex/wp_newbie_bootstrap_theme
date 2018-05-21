<?php get_header(); ?>

    <div class="container">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
           <?php $categories = get_categories();
              foreach ($categories as $category) : ?>
                <a class="p-2 text-muted" href="<?php echo get_category_link( $category->cat_ID ); ?>"><?php echo $category->name ?></a>
          <?php endforeach; ?> 
        </nav>
      </div>

      

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
		
		<?php 
			if (have_posts()) :
				while(have_posts()): the_post(); 
          get_template_part('content');        
		    endwhile;
			else :
				echo '<p>No post found<p>';
			endif;
		 ?>


        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <?php 
            if(is_active_sidebar('sidebar')) : 
              dynamic_sidebar('sidebar');
            endif;
          ?>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
 
<?php get_footer(); ?>
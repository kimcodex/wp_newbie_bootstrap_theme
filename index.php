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

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
		
    		<?php 
    			if (have_posts()) :
    				while(have_posts()): the_post(); 
    					get_template_part('content', get_post_format());
    				endwhile;
    			else :
    				echo '<p>No post found<p>';
    			endif;
    		 ?>


        <nav class="blog-pagination">
          <?php next_posts_link('Older'); ?>
          <?php previous_posts_link('Newer'); ?>
        </nav>
         

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
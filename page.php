<?php get_header(); ?>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
		
      		<?php 
      			if (have_posts()) :
      				while(have_posts()): the_post(); ?>

      				<div class="blog-post">
      				  <h2 class="blog-post-title">
                  <?php the_title(); ?>             
                </h2>
      				  <?php the_content(); ?>
      				</div><!-- /.blog-post -->

      			<?php	endwhile;
      			else :
      				echo '<p>No page pfound<p>';
      			endif;
      		 ?>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </main><!-- /.container -->

<?php get_footer(); ?>
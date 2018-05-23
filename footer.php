
 	<?php if(!(is_404())) : ?>
 		<section class="blog-footer">
 			
 			<p>&copy; <?php echo date('Y'); echo' '; bloginfo( 'name' ); ?>
 				<?php 
 					$args = [
 					    'theme_location' => 'footer'
 					];

 					wp_nav_menu($args);
 				 ?>
 			</p>
 		</section>
 	<?php endif; ?>
	
	
	
	<?php wp_footer(); ?>
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/assets/js/bootstrap.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>

	
</body>
</html>
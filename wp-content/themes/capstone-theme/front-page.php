<!-- Pulls in Header.php Information -->
<?php get_header(); ?>

<!-- Starts Main Section of Home Page -->
<main>
  <!-- Hero Image and Page Title -->
    <div>
    	<section>
			<?php
			  // WordPress Loop
			  if(have_posts()){
				while(have_posts()){
				  the_post(); ?>

				  <!-- Display Content on Page -->
				  <p><?php the_content(); ?></p>
				<?php
				} // End of While
			  } // End of If statement
			?>
		  </section> <!-- End of Section -->
	</div>
</main>

<!-- Pulls in Footer.php Information -->
<?php get_footer(); ?>

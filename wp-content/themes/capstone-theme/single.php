<!-- Pulls in Header.php Information -->
<?php get_header(); ?>

<!-- Main Text on Page.php pages -->
<section class="single-post-image">
	<?php the_post_thumbnail('full'); ?>
</section>

<main class="container">
  <div class="row">
      <section class="col-md-12 main-section">
		  <?php
      // WordPress Loop
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>


		  <!-- Display Content on Page -->

			  <div class="single-post-content">
				<h1 class="single-page-h1"><?php the_title(); ?></h1>
				<div class="row">
					<div class="single-content col-md-12">
						<?php the_content(); ?>
					</div>
				</div>

				<div class="row">
					<div class="single-content post-data col-md-12">
						<?php
						//Display Author and Publish Date Links
						post_data();
						?>
					</div>
				</div>
			</div>
	          <?php
			} // End of While
		  } // End of If statement
		?>


	  </section>
  </div> <!-- End of Row Container -->
</main> <!-- End of Main Container -->





<!-- Pulls in Footer.php Information -->
<?php get_footer(); ?>

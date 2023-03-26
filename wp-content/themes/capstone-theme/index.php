<!-- Pulls in Header.php Information -->
<?php get_header(); ?>

<!-- Starts Main Section of Page -->
<main class="container main-section-blog">

	 <?php
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>

                <div class="post-listing row">
					<div class="post-listing-image col-md-3">
						<?php the_post_thumbnail('medium'); ?>
					</div> <!-- Ends Post-Listing-Image Div -->

					<div class="post-listing-excerpt col-md-9">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
						<p><a class="read-more-link" href="<?php the_permalink(); ?>">Read More...</a></p>
					</div> <!-- Ends Post-Listing-Excerpt Div -->
                </div> <!-- Ends Post-Listing Div -->

                <?php
                }

                //Pagination
                orrPagination();
        }

    ?>

</main>

<!-- Pulls in Footer.php Information -->
<?php get_footer(); ?>

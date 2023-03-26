<!-- Pulls in Header.php Information -->
<?php get_header(); ?>

<!-- Starts Main Section of Page -->
<main class="container main-section">
	<div class="row">
      <div class="col-md-12">

		<h2 class="archive-title">
            <?php
                if(is_category()){
                    single_cat_title();
                }elseif(is_tag()){
                    single_tag_title();
                }elseif(is_day()){
                    echo "Daily Archives: " . get_the_date();
                }elseif(is_month()){
                    echo "Monthly Archives: " . get_the_date('F Y');
                }elseif(is_year()){
                    echo "Yearly Archives: " . get_the_date('Y');
                }else{
                    echo "Archives";
                }
            ?>
        </h2>
      </div>
	</div>


        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
        ?>

        <div class="post-listing row">
            <div class="post-listing-image col-md-3">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>

            <div class="post-listing-excerpt col-md-9">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php
                    //Display Author and Publish Date Links
                    post_data();
                ?>
                <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>

        <?php
            }

            //Pagination
            orrPagination();
            }
        ?>
</main>

<!-- Pulls in Footer.php Information -->
<?php get_footer(); ?>

<!-- Pulls in Header.php Information -->
<?php get_header(); ?>

<!-- Starts Main Section of Page -->
<main>

	 <section class="col-lg-12">
            <h2 class="search-title">Search Results for: "<?php echo $s; ?>"</h2>

            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>

                        <article class="indivdual-post">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php
                                //Display Author and Publish Date Links
                                post_data();
                            ?>

                            <?php the_excerpt(); ?>
                        </article>

                    <?php }

                    //Pagination
                    orrPagination();
                }else{ ?>
                    <div class="col-lg-12">
                        <?php
                            echo "<p>We're sorry, the term you are looking for was not found in our webiste. Please try another search.</p>";

                            get_search_form();
                        ?>
                    </div>
                <?php } ?>
        </section>

</main>

<!-- Pulls in Footer.php Information -->
<?php get_footer(); ?>

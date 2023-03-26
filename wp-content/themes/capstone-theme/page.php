<!-- Pulls in Header.php Information -->
<?php get_header(); ?>

<!-- Starts Main Section of Page -->

<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
?>

<div class="hero-image">
        <?php the_post_thumbnail('full'); ?>
</div>

<main class="container">
    <div class="page-container">
        <h1><?php the_title(); ?></h1>

        <div class="page-content">
            <?php the_content(); ?>
        </div>
    </div>

    <?php
        }
    }
    ?>

</main>

<!-- Pulls in Footer.php Information -->
<?php get_footer(); ?>

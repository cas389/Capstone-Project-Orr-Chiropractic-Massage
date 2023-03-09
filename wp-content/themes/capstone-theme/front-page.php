<!-- Pulls in Header.php Information -->
<?php get_header(); ?>

<!-- Starts Main Section of Home Page -->
<main>
  <!-- Hero Image and Page Title -->
  <section class="hero-section">
    <?php the_post_thumbnail('full'); ?><!-- Hero Image -->
    <section class="home-text">
      <h1><?php the_title(); ?></h1><!-- Page Title -->
    </section> <!-- End of page-title Section -->
  </section> <!-- End of hero-section Section -->
</main>

<!-- Pulls in Footer.php Information -->
<?php get_footer(); ?>

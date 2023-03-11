<!-- Pulls in Header.php Information -->
<?php get_header(); ?>

<!-- Starts Main Section of Home Page -->
<main>
  <!-- Hero Image and Page Title -->
  <section class="hero-section">
    <!-- For Smart Slider Plugin for Hero Image/Title -->
    <?php
      echo do_shortcode('[smartslider3 slider="2"]');
    ?><!-- End of Smart Slider Plugin -->
  </section> <!-- End of hero-section Section -->
</main>

<!-- Pulls in Footer.php Information -->
<?php get_footer(); ?>

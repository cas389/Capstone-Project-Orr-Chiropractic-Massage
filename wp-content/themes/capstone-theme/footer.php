    <footer>
      <div class="container">
        <div class="row">
          <!-- Left Side Footer Div -->
          <div class="col-md-4 left-footer">
            <?php
              dynamic_sidebar('left-footer');
            ?>

            <div><!-- Social Media Links -->
                <ul class="social-icon">
                      <?php do_action('social-media-links'); ?>
                 </ul>
            </div><!-- End Social Media Links -->

            <!-- Left Link Menu -->
            <div class="left-links-footer">
              <?php
                // Footer Menu Bar Section
                // Says, if the footer is filled out, display menu, if not, displays a message.
                if(has_nav_menu('left-footer-links')){ ?>
                  <nav class="footer-menu">
                    <?php
                    // Shows the navigation to the page, created by the user
                    wp_nav_menu(array(
                      'theme_location'  => 'left-footer-links',
                    ));
                    ?>
                  </nav><!-- End of footer-menu Navigation -->
                <?php
                } else {
                  echo "<p>Please select a menu through the dashboard to display here.</p>";
                }
              ?>
            </div> <!--End of Left Link Menu Div -->
          </div><!-- End of Left Side Footer Div -->

          <!-- Middle Footer Div -->
          <div class="col-md-4 center-footer">
            <?php
              dynamic_sidebar('center-footer');
            ?>
          </div> <!--End of Middle Footer Div -->

          <!-- Right Side Footer Div -->
          <div class="col-md-4 right-footer">
            <!-- Company Name from Theme Settings -->
            <?php
              $companyName = get_option('company_name');

              if(!empty($companyName)){
               echo $companyName;
              } ?>

            <!-- Company Address from Theme Settings -->
            <?php
              $companyAddress = get_option('company_address');

              if(!empty($companyAddress)){
               echo "<br />" .  $companyAddress;
              } ?>

            <!-- Company City, State and Zip from Theme Settings -->
            <?php
              $companyCityStateZip = get_option('company_city_zip');

              if(!empty($companyCityStateZip)){
               echo "<br />" .  $companyCityStateZip;
              } ?>

            <!-- Company Number from Theme Settings -->
            <?php
              $companyNumber = get_option('company_number');

              if(!empty($companyNumber)){
               echo "<br />Phone: " .  $companyNumber;
              } ?>

            <!-- Company Fax Number from Theme Settings -->
            <?php
              $companyFaxNumber = get_option('company_fax_number');

              if(!empty($companyFaxNumber)){
               echo "<br />Fax: " .  $companyFaxNumber;
              } ?>
          </div><!-- End of Right Side Footer Div -->
        </div><!-- End of Row Div -->
      </div> <!--End of Container Div -->
    </footer><!-- End of Footer -->
  </body><!-- End of Body Tag (Began in Header.php) -->
  <?php wp_footer(); ?>
</html><!-- End of HTML Tag (Began in Header.php) -->

<?php
        $name               = $_POST['name'];
        $email              = $_POST['email'];
        $message            = $_POST['message'];


            if(!empty($name)){
                echo "<li><span class='label'>Name</span> $name</li>";
            }

            if(!empty($email)){
                echo "<li><span class='label'>Email</span><a href='mailto:$email'> Email</li>";
            }

            if(!empty($message)){
                echo "<li><span class='label'>Message</span> $message</li>";
            }

    ?>



<?php

/* ======================================

  Disallow File Edit in Dashboard for Security Purposes

====================================== */

   // define('DISALLOW_FILE_EDIT', true);

/* ======================================

  Adding Stylsheets and JavaScripts Files

====================================== */
  function custom_theme_scripts(){
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

    // Main CSS Stylesheet
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap', false );

    // Adobe Fonts
    wp_enqueue_style('custom_font', 'https://use.typekit.net/hkw1kvd.css', array(), null, 'all');


    // JavaScript File
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');

  }

  add_action('wp_enqueue_scripts', 'custom_theme_scripts');

  /* ======================================

    Adding Featured Images

  ====================================== */
  add_theme_support('post-thumbnails');


  /* ======================================

    Custom Header Image (Logo)

  ====================================== */
  $custom_image_header = array(
    'width'   => 220,
    'height'  => 125,
    'uploads' => true
  );

  add_theme_support('custom-header', $custom_image_header);

  /* ======================================

    Add Menus to the Theme

  ====================================== */
  function register_my_menus(){
    register_nav_menus(array(
      'left-footer-links'     => __('Left Footer Menu'),
      'main-menu'             => __('Main Menu'),
    ));
  }

  add_action('init','register_my_menus');

  /* ======================================

    Creating Widget Areas

  ====================================== */
  function blank_widgets_init(){
    register_sidebar(array(
      'name'          => ('Left Footer Widget'),
      'id'            => 'left-footer',
      'description'   => 'Displays a Widget for the Left Footer',
      'before_widget' => '<div class="left-footer">',
      'after_widget'  => '</div>',// End of sidebar widget container
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));

    register_sidebar(array(
      'name'          => ('Center Footer Widget'),
      'id'            => 'center-footer',
      'description'   => 'Displays a Widget for the Center Footer',
      'before_widget' => '<div class="center-footer">',
      'after_widget'  => '</div>',// End of sidebar widget container
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));
  }

  add_action('widgets_init', 'blank_widgets_init');

  /* ======================================

    Social Media Icons Function

  ====================================== */
  function socialMediaIcons($wp_customize){
    $wp_customize->add_section(
      'social_icons_sec',
      array(
        'title'	       => __( 'Social Icons' ),
         'description' => 'Social Icon Section'
      )
    );
    $wp_customize->add_setting(
        'social_facebook',
        array(
          'default'           => '',
          'sanitize_callback' => 'esc_url_raw'
        )
      );
    $wp_customize->add_control(
      'social_facebook',
      array(
        'settings'	=> 'social_facebook',
        'section'		=> 'social_icons_sec',
        'type'			=> 'url',
        'label'			=> __( 'Facebook')
        )
      );
    $wp_customize->add_setting(
      'social_twitter',
      array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
        )
      );
    $wp_customize->add_control(
      'social_twitter',
      array(
        'settings'	=> 'social_twitter',
        'section'		=> 'social_icons_sec',
        'type'			=> 'url',
        'label'			=> __( 'Twitter')
        )
      );
    $wp_customize->add_setting(
      'social_youtube',
      array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
       )
      );
    $wp_customize->add_control(
      'social_youtube',
      array(
        'settings'	=> 'social_youtube',
        'section'		=> 'social_icons_sec',
        'type'			=> 'url',
        'label'			=> __( 'Youtube')
        )
      );
    $wp_customize->add_setting(
      'social_pinterest',
      array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
       )
      );
    $wp_customize->add_control(
      'social_pinterest',
      array(
        'settings'	=> 'social_pinterest',
        'section'		=> 'social_icons_sec',
        'type'			=> 'url',
        'label'			=> __( 'Pinterest')
        )
      );
    $wp_customize->add_setting(
      'social_linkedin',
      array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
       )
      );
    $wp_customize->add_control(
      'social_linkedin',
      array(
        'settings'	=> 'social_linkedin',
        'section'		=> 'social_icons_sec',
        'type'			=> 'url',
        'label'			=> __( 'Linkedin')
        )
      );
    $wp_customize->add_setting(
      'social_instagram',
      array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
       )
      );
    $wp_customize->add_control(
      'social_instagram',
      array(
        'settings'	=> 'social_instagram',
        'section'		=> 'social_icons_sec',
        'type'			=> 'url',
        'label'			=> __( 'Instagram')
        )
      );
    $wp_customize->add_setting(
      'social_tiktok',
      array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
       )
      );
    $wp_customize->add_control(
      'social_tiktok',
      array(
        'settings'	=> 'social_tiktok',
        'section'		=> 'social_icons_sec',
        'type'			=> 'url',
        'label'			=> __( 'Tiktok')
        )
      );
    $wp_customize->add_setting(
      'social_snapchat',
      array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
       )
      );
    $wp_customize->add_control(
      'social_snapchat',
      array(
        'settings'	=> 'social_snapchat',
        'section'		=> 'social_icons_sec',
        'type'			=> 'url',
        'label'			=> __( 'Snapchat')
        )
      );
    }
    add_action('customize_register', 'socialMediaIcons');

  function social_links(){
    $facebook   = get_theme_mod('social_facebook');
    $twitter    = get_theme_mod('social_twitter');
    $pinterest  = get_theme_mod('social_pinterest');
    $youtube    = get_theme_mod('social_youtube');
    $linkedin   = get_theme_mod('social_linkedin');
    $instagram  = get_theme_mod('social_instagram');
    $snapchat   = get_theme_mod('social_snapchat');
    $tiktok     = get_theme_mod('social_tiktok');

    if($facebook)
      echo '<li><a href="'.esc_url( $facebook ).'" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>';

    if($twitter)
      echo '<li><a href="'.esc_url( $twitter ).'" target="_blank"><i class="fa fa-twitter"></i></a></li>';

    if($youtube)
      echo '<li><a href="'.esc_url( $youtube ).'" target="_blank"><i class="fa fa-youtube"></i></a></li>';

    if($pinterest)
      echo '<li><a href="'.esc_url( $pinterest ).'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';

    if($linkedin)
      echo '<li><a href="'.esc_url( $linkedin ).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';

    if($instagram)
      echo '<li><a href="'.esc_url( $instagram ).'" target="_blank"><i class="fa fa-instagram"></i></a></li>';

    if($tiktok)
      echo '<li><a href="'.esc_url( $tiktok ).'" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>';

    if($snapchat)
      echo '<li><a href="'.esc_url( $snapchat ).'" target="_blank"><i class="fa-brands fa-snapchat"></i></a></li>';
  }
  add_action( 'social-media-links', 'social_links');

 /* ======================================

   Theme Settings

 ====================================== */
 function orrchiro_theme_settings_page(){ ?>
   <div class="wrap">
     <h1>Theme Settings</h1>
     <p>Here you can set up your Google Analytics account, address, phone number and more!</p>
     <p>More settings coming soon</p>

     <form method="post" action="options.php">
       <?php
        settings_fields('orrchiro-section'); //Register Section
        do_settings_sections('orrchiro-options'); //Group ID for all of the fields
        submit_button();
       ?>
     </form>
 <? }

 function display_google_analytics_element(){ ?>
   <input type="text" name="google_analytics_code" id="google_analytics_code" value="<?php echo get_option('google_analytics_code'); ?>" /><?php
 }

 function display_company_name(){ ?>
   <input type="text" name="company_name" id="company_name" value="<?php echo get_option('company_name'); ?>" /><?php
 }

 function display_address(){ ?>
   <input type="text" name="company_address" id="company_address" value="<?php echo get_option('company_address'); ?>" /><?php
 }

 function display_city_zip(){ ?>
   <input type="text" name="company_city_zip" id="company_city_zip" value="<?php echo get_option('company_city_zip'); ?>" /><?php
 }

 function display_phone_number(){ ?>
   <input type="text" name="company_number" id="company_number" value="<?php echo get_option('company_number'); ?>" /><?php
 }

 function display_fax_number(){ ?>
   <input type="text" name="company_fax_number" id="company_fax_number" value="<?php echo get_option('company_fax_number'); ?>" /><?php
 }



 function display_theme_panel_fields(){
   add_settings_section('orrchiro-section', "All settings", null, 'orrchiro-options');

   add_settings_field('google_analytics_code', 'Google Analytics Tracking ID (example UA-1234567-1)', 'display_google_analytics_element', 'orrchiro-options', 'orrchiro-section');

   add_settings_field('company_name', 'Company Name', 'display_company_name', 'orrchiro-options', 'orrchiro-section');

   add_settings_field('company_address', 'Company Address', 'display_address', 'orrchiro-options', 'orrchiro-section');

   add_settings_field('company_city_zip', 'Company City, State, Zip', 'display_city_zip', 'orrchiro-options', 'orrchiro-section');

   add_settings_field('company_number', 'Company Phone Number', 'display_phone_number', 'orrchiro-options', 'orrchiro-section');

   add_settings_field('company_fax_number', 'Company Fax Number', 'display_fax_number', 'orrchiro-options', 'orrchiro-section');

   register_setting('orrchiro-section', 'google_analytics_code');
   register_setting('orrchiro-section', 'company_name');
   register_setting('orrchiro-section', 'company_address');
   register_setting('orrchiro-section', 'company_city_zip');
   register_setting('orrchiro-section', 'company_number');
   register_setting('orrchiro-section', 'company_fax_number');
 }

 add_action('admin_init', 'display_theme_panel_fields');

 function add_theme_menu_item(){
   add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-panel', 'orrchiro_theme_settings_page', 'dashicons-admin-settings', 1);
 }

 add_action('admin_menu', 'add_theme_menu_item');

 /* ======================================

   Google Analytics

 ====================================== */
 function themeGoogleAnalyitcs() {
   $googleAnalytics = get_option('google_analytics_code');

   ?>

   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalytics; ?>"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', '<?php echo $googleAnalytics; ?>');
   </script>

 <?php }
 add_action('wp_head', 'themeGoogleAnalyitcs');
 ?>
<?php
/*===============================

Pagination Links for Search/Archive pages

=====================================*/

function orrPagination(){
    global $wp_query;

    $big = 999999999; // need an unlikely integer
    $translated = __( 'Page', 'mytextdomain' ); // Supply translatable string

    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
    ) );
  }

/*==========================
Post Data Information
==========================*/
function post_data(){
    $archive_year   = get_the_time('Y');
    $archive_month  = get_the_time('m');
    $archive_day    = get_the_time('d');
?>

<p>Published on: <a href="<?php echo get_day_link($archive_year,$archive_month,$archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>

<?php
}?>
	   

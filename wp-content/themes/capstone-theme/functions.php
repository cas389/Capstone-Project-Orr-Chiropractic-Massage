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
      'center-footer-links'   => __('Center Footer Menu'),
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
      'name'          => ('Right Footer Widget'),
      'id'            => 'right-footer',
      'description'   => 'Displays a Widget for the Right Footer',
      'before_widget' => '<div class="right-footer">',
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
      echo '<li><a href="'.esc_url( $facebook ).'" target="_blank"><i class="fa fa-facebook"></i></a></li>';

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

 ?>

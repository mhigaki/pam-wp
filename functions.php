<?php
if ( ! function_exists( 'pam_setup' ) ) :

function pam_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'pam', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'pam' ),
        'social'  => __( 'Social Links Menu', 'pam' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    register_nav_menu(  'footer', __( 'Footer', 'pam' )  );

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image Sizes Begin */

    add_image_size( 'agents', 360, 300, true );
    add_image_size( 'agent', 500, 600, true );
    /* Pinegrow generated Image Sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // pam_setup

add_action( 'after_setup_theme', 'pam_setup' );


if ( ! function_exists( 'pam_init' ) ) :

function pam_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('properties', array(
    'labels' => 
      array(
        'name' => __( 'Propriedades', 'pam' ),
        'singular_name' => __( 'Propriedade', 'pam' )
      ),
    'description' => __( 'Cadastro do Imóvel', 'pam' ),
    'public' => true,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
    'has_archive' => true,
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-admin-multisite',
    'taxonomies' => array( 'category' )
  ));

    register_post_type('corretor', array(
    'labels' => 
      array(
        'name' => __( 'Corretores', 'pam' ),
        'singular_name' => __( 'Corretor', 'pam' )
      ),
    'description' => __( 'Nossos Corretores', 'pam' ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-id'
  ));

    register_post_type('sliders', array(
    'labels' => 
      array(
        'name' => __( 'Banners', 'pam' ),
        'singular_name' => __( 'Banner', 'pam' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-slides'
  ));

    register_post_type('servicos', array(
    'labels' => 
      array(
        'name' => __( 'Services', 'pam' ),
        'singular_name' => __( 'Service', 'pam' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-screenoptions',
    'taxonomies' => array( 'category' )
  ));

    register_post_type('testemonials', array(
    'labels' => 
      array(
        'name' => __( 'Testemonials', 'pam' ),
        'singular_name' => __( 'Testemonial', 'pam' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-format-chat'
  ));

    register_post_type('partners', array(
    'labels' => 
      array(
        'name' => __( 'Partners', 'pam' ),
        'singular_name' => __( 'Partner', 'pam' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-nametag'
  ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    register_taxonomy('properties_types', 'properties', array(
    'labels' => 
      array(
        'name' => __( 'Tipos', 'pam' ),
        'singular_name' => __( 'Tipo', 'pam' )
      ),
    'show_in_rest' => true,
    'hierarchical' => true
  ));

    register_taxonomy('properties_status', 'properties', array(
    'labels' => 
      array(
        'name' => __( 'Status', 'pam' ),
        'singular_name' => __( 'Situação', 'pam' )
      ),
    'show_in_rest' => true,
    'hierarchical' => true
  ));

    /* Pinegrow generated Taxonomies End */

}
endif; // pam_setup

add_action( 'init', 'pam_init' );


if ( ! function_exists( 'pam_custom_image_sizes_names' ) ) :

function pam_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin */

    return array_merge( $sizes, array(
        'agents' => __( 'Corretores' ),
        'agent' => __( 'Corretor' )
    ) );

    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'pam_custom_image_sizes_names' );
endif;// pam_custom_image_sizes_names



if ( ! function_exists( 'pam_widgets_init' ) ) :

function pam_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pam_widgets_init' );
endif;// pam_widgets_init



if ( ! function_exists( 'pam_customize_register' ) ) :

function pam_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'pam_sc_header', array(
    'title' => __( 'Header', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_banner', array(
    'title' => __( 'Section Banners', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_features', array(
    'title' => __( 'Section Features', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_services', array(
    'title' => __( 'Section Services', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_categories', array(
    'title' => __( 'Section Categories', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_counters', array(
    'title' => __( 'Section Counters', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_team', array(
    'title' => __( 'Section Team', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_testemonial', array(
    'title' => __( 'Section Testemonial', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_blog', array(
    'title' => __( 'Section Blog', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));

    $wp_customize->add_section( 'pam_sc_partners', array(
    'title' => __( 'Section Partners', 'pam' ),
    'panel' => 'pam_theme_settings'
  ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'What are you looking for?', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'pam_sc_categories_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'Most Popular Places', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_categories_main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_categories'
  ));

    $wp_customize->add_setting( 'pam_sc_categories_main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Find Property In Your City', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_categories_main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_categories'
  ));

    $wp_customize->add_setting( 'pam_sc_header_facebook', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_facebook', array(
    'label' => __( 'Facebook', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'pam_sc_header_twitter', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_twitter', array(
    'label' => __( 'Twitter', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'pam_sc_header_linkedin', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_linkedin', array(
    'label' => __( 'Linkedin', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'pam_sc_header_instagram', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_instagram', array(
    'label' => __( 'Instagram', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'pam_sc_team_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'Our Agent', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_team_main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_team'
  ));

    $wp_customize->add_setting( 'pam_sc_team_main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Meet out small team that make those great products.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_team_main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_team'
  ));

    $wp_customize->add_setting( 'pam_sc_header_telefone', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  ));

    $wp_customize->add_control( 'pam_sc_header_telefone', array(
    'label' => __( 'Telefone', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'pam_sc_header_email', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_email'
  ));

    $wp_customize->add_control( 'pam_sc_header_email', array(
    'label' => __( 'E-Mail', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_header',
    'input_attrs' => 
      array(
        'placeholder' => 'contato@pamconsultoria.com.br'
      )
  ));

    $wp_customize->add_setting( 'pam_sc_header_endereco', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  ));

    $wp_customize->add_control( 'pam_sc_header_endereco', array(
    'label' => __( 'Endereço', 'pam' ),
    'type' => 'textarea',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'pam_brand_logo', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'pam_brand_logo', array(
    'label' => __( 'Logo PAM', 'pam' ),
    'type' => 'media',
    'mime_type' => 'image',
    'section' => 'title_tagline',
    'input_attrs' => 
      array(
        'class' => 'style-svg'
      )
  ) ) );

    $wp_customize->add_setting( 'display_pam_sc_features', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_features', array(
    'label' => __( 'Display Section Features', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'pam_sc_features_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'What are you looking for?', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_features_main_title_h1', array(
    'label' => __( 'Display Section Features', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'pam_sc_features_main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_features_main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'display_pam_sc_services', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_services', array(
    'label' => __( 'Display Section Services', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'pam_sc_services_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'What are you looking for?', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_services_main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'pam_sc_services_main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_services_main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'btn_label', array(
    'type' => 'theme_mod',
    'default' => __( 'Read More', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'btn_label', array(
    'label' => __( 'Button Label', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'btn_link', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'btn_link', array(
    'label' => __( 'Button Link', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'display_pam_sc_categories', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_categories', array(
    'label' => __( 'Display Section Categories', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_categories'
  ));

    $wp_customize->add_setting( 'display_pam_sc_team', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_team', array(
    'label' => __( 'Display Section Team', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_team'
  ));

    $wp_customize->add_setting( 'display_pam_sc_testemonials', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_testemonials', array(
    'label' => __( 'Display Section Testemonials', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_testemonial'
  ));

    $wp_customize->add_setting( 'pam_sc_testemonial_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'Our Testimonial', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_testemonial_main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_testemonial'
  ));

    $wp_customize->add_setting( 'display_pam_sc_blog', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_blog', array(
    'label' => __( 'Display Section Blog', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_blog'
  ));

    $wp_customize->add_setting( 'main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'Latest news', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_blog'
  ));

    $wp_customize->add_setting( 'main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Check out some recent news posts.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_blog'
  ));

    $wp_customize->add_setting( 'display_pam_sc_partners', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_partners', array(
    'label' => __( 'Display Section Partners', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_partners'
  ));

    $wp_customize->add_setting( 'title_h4', array(
    'type' => 'theme_mod',
    'default' => __( 'Brands Partners', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'title_h4', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_partners'
  ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pam_customize_register' );
endif;// pam_customize_register


if ( ! function_exists( 'pam_enqueue_scripts' ) ) :
    function pam_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'pam-ieemulationmodeswarning', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', null, '1.10', false );

    wp_enqueue_script( 'pam-popper', get_template_directory_uri() . '/js/popper.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-bootstrapsubmenu', get_template_directory_uri() . '/js/bootstrap-submenu.js', null, '1.10', true );

    wp_enqueue_script( 'pam-rangeslider', get_template_directory_uri() . '/js/rangeslider.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jquerymbytplayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.js', null, '1.10', true );

    wp_enqueue_script( 'pam-wow', get_template_directory_uri() . '/js/wow.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-bootstrapselect', get_template_directory_uri() . '/js/bootstrap-select.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jqueryscrollup', get_template_directory_uri() . '/js/jquery.scrollUp.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jquerymcustomscrollbarconcat', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-leaflet', get_template_directory_uri() . '/js/leaflet.js', null, '1.10', true );

    wp_enqueue_script( 'pam-leafletproviders', get_template_directory_uri() . '/js/leaflet-providers.js', null, '1.10', true );

    wp_enqueue_script( 'pam-leafletmarkercluster', get_template_directory_uri() . '/js/leaflet.markercluster.js', null, '1.10', true );

    wp_enqueue_script( 'pam-dropzone', get_template_directory_uri() . '/js/dropzone.js', null, '1.10', true );

    wp_enqueue_script( 'pam-slick', get_template_directory_uri() . '/js/slick.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jqueryfilterizr', get_template_directory_uri() . '/js/jquery.filterizr.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jquerymagnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jquerycountdown', get_template_directory_uri() . '/js/jquery.countdown.js', null, '1.10', true );

    wp_enqueue_script( 'pam-maps', get_template_directory_uri() . '/js/maps.js', null, '1.10', true );

    wp_enqueue_script( 'pam-app', get_template_directory_uri() . '/js/app.js', null, '1.10', true );

    wp_enqueue_script( 'pam-ieviewportbugworkaround', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', null, '1.10', true );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_enqueue_style( 'pam-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-animate', get_template_directory_uri() . '/css/animate.min.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-bootstrapsubmenu', get_template_directory_uri() . '/css/bootstrap-submenu.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-bootstrapselect', get_template_directory_uri() . '/css/bootstrap-select.min.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-leaflet', get_template_directory_uri() . '/css/leaflet.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-map', get_template_directory_uri() . '/css/map.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-linearicons', get_template_directory_uri() . '/fonts/linearicons/linearicons.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-jquerymcustomscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-dropzone', get_template_directory_uri() . '/css/dropzone.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-slick', get_template_directory_uri() . '/css/slick.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-style', get_template_directory_uri() . '/css/style.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-red', get_template_directory_uri() . '/css/skins/red.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-style-1', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-ieviewportbugworkaround', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css', null, '1.10', 'all' );

    wp_deregister_style( 'pam-style-2' );
    wp_enqueue_style( 'pam-style-2', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pam_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_pg_pagination.php";
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";
require_once "inc/wp_smart_navwalker.php";
require_once "inc/wp_simple_form_mailer.php";

    /* Pinegrow generated Include Resources End */

/* Enqueue Admin Styles and Scripts */

function pam_selectively_enqueue_admin_script( $page ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Enqueue Admin Styles Begin */

    /* Pinegrow generated Enqueue Admin Styles End */
    
    /* Pinegrow generated Enqueue Admin Scripts Begin */

    /* Pinegrow generated Enqueue Admin Scripts End */
        
}
add_action( 'admin_enqueue_scripts', 'pam_selectively_enqueue_admin_script' );

/* End Enqueue Admin Styles and Scripts */

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'pam_register_required_plugins');

function pam_register_required_plugins()
{
    $plugins = array(

        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name'               => 'Pam Customizer Plugin', // The plugin name.
            'slug'               => 'pam_customizer_plugin', // The plugin slug (typically the folder name).
            'source'             => dirname(__FILE__) . '/inc/plugins/pam_customizer_plugin.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Advanced Custom Fields',
            'slug'      => 'advanced-custom-fields',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'WP-Sweep',
            'slug'      => 'wp-sweep',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'What Template',
            'slug'      => 'what-template',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Theme Check',
            'slug'      => 'theme-check',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Query Monitor',
            'slug'      => 'query-monitor',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'SVG Support',
            'slug'      => 'svg-support',
            'required'  => true,
        ),

		    // This is an example of how to include a plugin from the WordPress Plugin Repository.
		    array(
		        'name'      => 'ACF Theme Code',
		        'slug'      => 'acf-theme-code',
		        'required'  => true,
		    ),

				// This is an example of how to include a plugin from the WordPress Plugin Repository.
				array(
				 'name'      => 'Classic Editor classic-editor',
				 'slug'      => 'classic-editor',
				 'required'  => true,
				),

				// This is an example of how to include a plugin from the WordPress Plugin Repository.
				array(
				 'name'      => 'Log Viewer',
				 'slug'      => 'log-viewer',
				 'required'  => true,
				),

			);

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
     $config = array(
 		'id'           => 'pam',                 // Unique ID for hashing notices for multiple instances of TGMPA.
 		'default_path' => '',                      // Default absolute path to bundled plugins.
 		'menu'         => 'tgmpa-install-plugins', // Menu slug.
 		'parent_slug'  => 'themes.php',            // Parent menu slug.
 		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
 		'has_notices'  => true,                    // Show admin notices or not.
 		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
 		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
 		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
 		'message'      => '',                      // Message to output right before the plugins table.

 		/*
 		'strings'      => array(
 			'page_title'                      => __( 'Install Required Plugins', 'pam' ),
 			'menu_title'                      => __( 'Install Plugins', 'pam' ),
 			/* translators: %s: plugin name. * /
 			'installing'                      => __( 'Installing Plugin: %s', 'pam' ),
 			/* translators: %s: plugin name. * /
 			'updating'                        => __( 'Updating Plugin: %s', 'pam' ),
 			'oops'                            => __( 'Something went wrong with the plugin API.', 'pam' ),
 			'notice_can_install_required'     => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'This theme requires the following plugin: %1$s.',
 				'This theme requires the following plugins: %1$s.',
 				'pam'
 			),
 			'notice_can_install_recommended'  => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'This theme recommends the following plugin: %1$s.',
 				'This theme recommends the following plugins: %1$s.',
 				'pam'
 			),
 			'notice_ask_to_update'            => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
 				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
 				'pam'
 			),
 			'notice_ask_to_update_maybe'      => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'There is an update available for: %1$s.',
 				'There are updates available for the following plugins: %1$s.',
 				'pam'
 			),
 			'notice_can_activate_required'    => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'The following required plugin is currently inactive: %1$s.',
 				'The following required plugins are currently inactive: %1$s.',
 				'pam'
 			),
 			'notice_can_activate_recommended' => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'The following recommended plugin is currently inactive: %1$s.',
 				'The following recommended plugins are currently inactive: %1$s.',
 				'pam'
 			),
 			'install_link'                    => _n_noop(
 				'Begin installing plugin',
 				'Begin installing plugins',
 				'pam'
 			),
 			'update_link' 					  => _n_noop(
 				'Begin updating plugin',
 				'Begin updating plugins',
 				'pam'
 			),
 			'activate_link'                   => _n_noop(
 				'Begin activating plugin',
 				'Begin activating plugins',
 				'pam'
 			),
 			'return'                          => __( 'Return to Required Plugins Installer', 'pam' ),
 			'plugin_activated'                => __( 'Plugin activated successfully.', 'pam' ),
 			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'pam' ),
 			/* translators: 1: plugin name. * /
 			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'pam' ),
 			/* translators: 1: plugin name. * /
 			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'pam' ),
 			/* translators: 1: dashboard link. * /
 			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'pam' ),
 			'dismiss'                         => __( 'Dismiss this notice', 'pam' ),
 			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'pam' ),
 			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'pam' ),

 			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
 		),
 		*/
 	);

 	tgmpa( $plugins, $config );
 }
?>
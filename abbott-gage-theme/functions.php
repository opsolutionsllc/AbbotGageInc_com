<?php
/**
 * Abbott Gage Inc Theme Functions
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function abbott_gage_setup() {
    // Make theme available for translation
    load_theme_textdomain( 'abbott-gage', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    
    // Set default thumbnail size
    set_post_thumbnail_size( 1200, 675, true );
    
    // Add additional image sizes
    add_image_size( 'abbott-gage-hero', 1920, 800, true );
    add_image_size( 'abbott-gage-card', 600, 400, true );
    add_image_size( 'abbott-gage-thumbnail', 400, 300, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'abbott-gage' ),
        'footer'  => esc_html__( 'Footer Menu', 'abbott-gage' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add theme support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for custom background
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
    ) );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor-style.css' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Add support for wide and full alignment
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'abbott_gage_setup' );

/**
 * Set the content width in pixels
 */
function abbott_gage_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'abbott_gage_content_width', 1200 );
}
add_action( 'after_setup_theme', 'abbott_gage_content_width', 0 );

/**
 * Register Widget Areas
 */
function abbott_gage_widgets_init() {
    // Footer Widget Areas
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 1', 'abbott-gage' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets to the first footer column.', 'abbott-gage' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 2', 'abbott-gage' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets to the second footer column.', 'abbott-gage' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 3', 'abbott-gage' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets to the third footer column.', 'abbott-gage' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    // Sidebar for Blog Posts
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'abbott-gage' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets for the blog sidebar.', 'abbott-gage' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'abbott_gage_widgets_init' );

/**
 * Enqueue Scripts and Styles
 */
function abbott_gage_scripts() {
    // Google Fonts
    wp_enqueue_style( 
        'abbott-gage-fonts', 
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@600;700&display=swap', 
        array(), 
        null 
    );

    // Main stylesheet
    wp_enqueue_style( 'abbott-gage-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Additional theme styles
    wp_enqueue_style( 
        'abbott-gage-main', 
        get_template_directory_uri() . '/assets/css/main.css', 
        array( 'abbott-gage-style' ), 
        '1.0.0' 
    );

    // Contact Form 7 custom styles
    wp_enqueue_style( 
        'abbott-gage-cf7', 
        get_template_directory_uri() . '/assets/css/contact-form-7.css', 
        array( 'abbott-gage-main' ), 
        '1.0.0' 
    );

    // Font Awesome
    wp_enqueue_style( 
        'font-awesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', 
        array(), 
        '6.4.0' 
    );

    // Main JavaScript
    wp_enqueue_script( 
        'abbott-gage-script', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array( 'jquery' ), 
        '1.0.0', 
        true 
    );

    // Navigation script
    wp_enqueue_script( 
        'abbott-gage-navigation', 
        get_template_directory_uri() . '/assets/js/navigation.js', 
        array(), 
        '1.0.0', 
        true 
    );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'abbott_gage_scripts' );

/**
 * Add Schema.org markup for LocalBusiness
 */
function abbott_gage_schema_markup() {
    if ( is_front_page() || is_page() ) {
        $business_name = abbott_gage_get_option( 'business_name', 'Abbott Gage, Inc.' );
        $business_desc = abbott_gage_get_option( 'business_description', 'Precision measuring tools, calibration, certification, and repair services. ISO 9001:2015 certified, woman-owned business.' );
        $phone = abbott_gage_get_option( 'phone_primary', '(256) 378-3286' );
        $email = abbott_gage_get_option( 'email', 'info@abbottgageinc.com' );
        $address = abbott_gage_get_option( 'footer_address', '40 Industrial Park' );
        $city_state = abbott_gage_get_option( 'footer_city_state_zip', 'Childersburg, AL 35044' );
        $latitude = abbott_gage_get_option( 'business_latitude', '33.2829' );
        $longitude = abbott_gage_get_option( 'business_longitude', '-86.3553' );
        $hours = abbott_gage_get_option( 'business_hours', 'Mo-Fr 08:00-17:00' );
        
        // Parse city, state, zip
        $address_parts = explode( ',', $city_state );
        $city = isset( $address_parts[0] ) ? trim( $address_parts[0] ) : 'Childersburg';
        $state_zip = isset( $address_parts[1] ) ? trim( $address_parts[1] ) : 'AL 35044';
        $state_zip_parts = explode( ' ', $state_zip );
        $state = isset( $state_zip_parts[0] ) ? $state_zip_parts[0] : 'AL';
        $zip = isset( $state_zip_parts[1] ) ? $state_zip_parts[1] : '35044';
        
        // Format phone for schema
        $phone_schema = preg_replace( '/[^0-9+]/', '', $phone );
        if ( strpos( $phone_schema, '+' ) !== 0 ) {
            $phone_schema = '+1-' . $phone_schema;
        }
        
        $schema = array(
            '@context'      => 'https://schema.org',
            '@type'         => 'LocalBusiness',
            'name'          => $business_name,
            'description'   => $business_desc,
            'url'           => home_url(),
            'telephone'     => $phone_schema,
            'email'         => $email,
            'address'       => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => $address,
                'addressLocality' => $city,
                'addressRegion'   => $state,
                'postalCode'      => $zip,
                'addressCountry'  => 'US',
            ),
            'geo'           => array(
                '@type'     => 'GeoCoordinates',
                'latitude'  => $latitude,
                'longitude' => $longitude,
            ),
            'openingHours'  => $hours,
            'priceRange'    => '$$',
        );
        
        echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'abbott_gage_schema_markup' );

/**
 * Add Open Graph meta tags for better social sharing
 */
function abbott_gage_open_graph() {
    if ( is_singular() ) {
        global $post;
        
        $og_title       = get_the_title();
        $og_description = get_the_excerpt();
        $og_url         = get_permalink();
        $og_image       = has_post_thumbnail() ? get_the_post_thumbnail_url( $post, 'full' ) : get_template_directory_uri() . '/assets/images/default-og-image.jpg';
        
        echo '<meta property="og:title" content="' . esc_attr( $og_title ) . '" />' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( $og_description ) . '" />' . "\n";
        echo '<meta property="og:url" content="' . esc_url( $og_url ) . '" />' . "\n";
        echo '<meta property="og:image" content="' . esc_url( $og_image ) . '" />' . "\n";
        echo '<meta property="og:type" content="website" />' . "\n";
    }
}
add_action( 'wp_head', 'abbott_gage_open_graph' );

/**
 * Custom excerpt length
 */
function abbott_gage_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'abbott_gage_excerpt_length' );

/**
 * Custom excerpt more
 */
function abbott_gage_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'abbott_gage_excerpt_more' );

/**
 * Add custom body classes
 */
function abbott_gage_body_classes( $classes ) {
    // Add page slug
    if ( is_page() ) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    
    // Add class if sidebar is active
    if ( is_active_sidebar( 'sidebar-1' ) && ( is_single() || is_archive() ) ) {
        $classes[] = 'has-sidebar';
    } else {
        $classes[] = 'no-sidebar';
    }
    
    return $classes;
}
add_filter( 'body_class', 'abbott_gage_body_classes' );

/**
 * ACF Fields Registration
 */
require get_template_directory() . '/inc/acf-fields.php';

/**
 * Customizer Additions
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Template Tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Check if ACF is active and show admin notice if not
 */
function abbott_gage_check_acf() {
    if ( ! class_exists( 'ACF' ) && current_user_can( 'install_plugins' ) ) {
        add_action( 'admin_notices', 'abbott_gage_acf_notice' );
    }
}
add_action( 'after_setup_theme', 'abbott_gage_check_acf' );

/**
 * Display ACF required notice
 */
function abbott_gage_acf_notice() {
    ?>
    <div class="notice notice-error">
        <p><strong><?php esc_html_e( 'Abbott Gage Theme:', 'abbott-gage' ); ?></strong> 
        <?php esc_html_e( 'This theme requires the Advanced Custom Fields (ACF) plugin to be installed and activated.', 'abbott-gage' ); ?>
        <a href="<?php echo esc_url( admin_url( 'plugin-install.php?s=advanced+custom+fields&tab=search&type=term' ) ); ?>">
            <?php esc_html_e( 'Install ACF Now', 'abbott-gage' ); ?>
        </a>
        </p>
    </div>
    <?php
}

/**
 * Helper function to get ACF field with fallback
 */
function abbott_gage_get_option( $field_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $field_name, 'option' );
        return $value ? $value : $default;
    }
    return $default;
}


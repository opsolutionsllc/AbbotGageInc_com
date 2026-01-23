<?php
/**
 * Customizer Settings
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

/**
 * Add postMessage support for site title and description
 */
function abbott_gage_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'abbott_gage_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'abbott_gage_customize_partial_blogdescription',
            )
        );
    }

    // Add Company Info Section
    $wp_customize->add_section( 'abbott_gage_company_info', array(
        'title'    => esc_html__( 'Company Information', 'abbott-gage' ),
        'priority' => 30,
    ) );

    // Phone Number
    $wp_customize->add_setting( 'abbott_gage_phone', array(
        'default'           => '(256) 378-3286',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'abbott_gage_phone', array(
        'label'    => esc_html__( 'Phone Number', 'abbott-gage' ),
        'section'  => 'abbott_gage_company_info',
        'type'     => 'text',
    ) );

    // Toll Free Number
    $wp_customize->add_setting( 'abbott_gage_toll_free', array(
        'default'           => '1-800-481-4243',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'abbott_gage_toll_free', array(
        'label'    => esc_html__( 'Toll Free Number', 'abbott-gage' ),
        'section'  => 'abbott_gage_company_info',
        'type'     => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'abbott_gage_email', array(
        'default'           => 'shelby@abbottgageinc.com',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( 'abbott_gage_email', array(
        'label'    => esc_html__( 'Email Address', 'abbott-gage' ),
        'section'  => 'abbott_gage_company_info',
        'type'     => 'email',
    ) );

    // Address
    $wp_customize->add_setting( 'abbott_gage_address', array(
        'default'           => '40 Industrial Park, Childersburg, AL 35044',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'abbott_gage_address', array(
        'label'    => esc_html__( 'Address', 'abbott-gage' ),
        'section'  => 'abbott_gage_company_info',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'abbott_gage_customize_register' );

/**
 * Render the site title for selective refresh
 */
function abbott_gage_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site description for selective refresh
 */
function abbott_gage_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously
 */
function abbott_gage_customize_preview_js() {
    wp_enqueue_script(
        'abbott-gage-customizer',
        get_template_directory_uri() . '/assets/js/customizer.js',
        array( 'customize-preview' ),
        '1.0.0',
        true
    );
}
add_action( 'customize_preview_init', 'abbott_gage_customize_preview_js' );


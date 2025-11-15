<?php
/**
 * ACF Field Groups Registration
 * 
 * This file registers all Advanced Custom Fields for the Abbott Gage theme.
 * Allows users to easily modify all content through the WordPress admin.
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register ACF Field Groups
 */
function abbott_gage_register_acf_fields() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    // ========================================
    // HEADER SETTINGS
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_header_settings',
        'title' => 'Header Settings',
        'fields' => array(
            array(
                'key' => 'field_phone_primary',
                'label' => 'Primary Phone Number',
                'name' => 'phone_primary',
                'type' => 'text',
                'default_value' => '(256) 378-3286',
                'placeholder' => '(256) 378-3286',
            ),
            array(
                'key' => 'field_phone_toll_free',
                'label' => 'Toll Free Phone Number',
                'name' => 'phone_toll_free',
                'type' => 'text',
                'default_value' => '1-800-481-4243',
                'placeholder' => '1-800-481-4243',
            ),
            array(
                'key' => 'field_email',
                'label' => 'Email Address',
                'name' => 'email',
                'type' => 'email',
                'default_value' => 'info@abbottgageinc.com',
            ),
            array(
                'key' => 'field_header_cta_text',
                'label' => 'Header CTA Button Text',
                'name' => 'header_cta_text',
                'type' => 'text',
                'default_value' => 'Get a Quote',
            ),
            array(
                'key' => 'field_header_cta_link',
                'label' => 'Header CTA Button Link',
                'name' => 'header_cta_link',
                'type' => 'page_link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ) );

    // ========================================
    // HERO SECTION
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_hero_section',
        'title' => 'Hero Section',
        'fields' => array(
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Precision Measuring Tools & Calibration Services',
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'State-of-the-art measuring equipment to provide you with the greatest accuracy. On-site calibration service for your dimensional and electronic instruments.',
            ),
            array(
                'key' => 'field_hero_background_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_background_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_hero_feature_1',
                'label' => 'Hero Feature 1',
                'name' => 'hero_feature_1',
                'type' => 'text',
                'default_value' => 'ISO 9001:2015 Certified',
            ),
            array(
                'key' => 'field_hero_feature_2',
                'label' => 'Hero Feature 2',
                'name' => 'hero_feature_2',
                'type' => 'text',
                'default_value' => 'NIST Traceable',
            ),
            array(
                'key' => 'field_hero_feature_3',
                'label' => 'Hero Feature 3',
                'name' => 'hero_feature_3',
                'type' => 'text',
                'default_value' => '30+ Years Experience',
            ),
            array(
                'key' => 'field_hero_cta_1_text',
                'label' => 'Primary CTA Button Text',
                'name' => 'hero_cta_1_text',
                'type' => 'text',
                'default_value' => 'Request a Quote',
            ),
            array(
                'key' => 'field_hero_cta_1_link',
                'label' => 'Primary CTA Button Link',
                'name' => 'hero_cta_1_link',
                'type' => 'page_link',
            ),
            array(
                'key' => 'field_hero_cta_2_text',
                'label' => 'Secondary CTA Button Text',
                'name' => 'hero_cta_2_text',
                'type' => 'text',
                'default_value' => 'Our Services',
            ),
            array(
                'key' => 'field_hero_cta_2_link',
                'label' => 'Secondary CTA Button Link',
                'name' => 'hero_cta_2_link',
                'type' => 'page_link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'front-page.php',
                ),
            ),
        ),
    ) );

    // ========================================
    // SERVICES SECTION
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_services_section',
        'title' => 'Services Section',
        'fields' => array(
            array(
                'key' => 'field_services_title',
                'label' => 'Section Title',
                'name' => 'services_title',
                'type' => 'text',
                'default_value' => 'Our Services',
            ),
            array(
                'key' => 'field_services_description',
                'label' => 'Section Description',
                'name' => 'services_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Comprehensive solutions for all your precision measuring needs',
            ),
            // Service 1 - Laboratory Calibration
            array(
                'key' => 'field_service_1_title',
                'label' => 'Service 1 - Title',
                'name' => 'service_1_title',
                'type' => 'text',
                'default_value' => 'Laboratory Calibration',
            ),
            array(
                'key' => 'field_service_1_description',
                'label' => 'Service 1 - Description',
                'name' => 'service_1_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Send your equipment to our state-of-the-art lab for precise calibration and certification.',
            ),
            array(
                'key' => 'field_service_1_icon',
                'label' => 'Service 1 - Icon Class',
                'name' => 'service_1_icon',
                'type' => 'text',
                'default_value' => 'fas fa-flask',
                'instructions' => 'Font Awesome icon class (e.g., fas fa-flask)',
            ),
            array(
                'key' => 'field_service_1_link',
                'label' => 'Service 1 - Link',
                'name' => 'service_1_link',
                'type' => 'page_link',
            ),
            array(
                'key' => 'field_service_1_feature_1',
                'label' => 'Service 1 - Feature 1',
                'name' => 'service_1_feature_1',
                'type' => 'text',
                'default_value' => 'NIST Traceable Standards',
            ),
            array(
                'key' => 'field_service_1_feature_2',
                'label' => 'Service 1 - Feature 2',
                'name' => 'service_1_feature_2',
                'type' => 'text',
                'default_value' => 'ISO 9001:2015 Certified',
            ),
            array(
                'key' => 'field_service_1_feature_3',
                'label' => 'Service 1 - Feature 3',
                'name' => 'service_1_feature_3',
                'type' => 'text',
                'default_value' => 'Fast Turnaround Time',
            ),
            // Service 2 - Onsite Calibration
            array(
                'key' => 'field_service_2_title',
                'label' => 'Service 2 - Title',
                'name' => 'service_2_title',
                'type' => 'text',
                'default_value' => 'Onsite Calibration',
            ),
            array(
                'key' => 'field_service_2_description',
                'label' => 'Service 2 - Description',
                'name' => 'service_2_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Professional on-site calibration services. Minimize downtime with our mobile service.',
            ),
            array(
                'key' => 'field_service_2_icon',
                'label' => 'Service 2 - Icon Class',
                'name' => 'service_2_icon',
                'type' => 'text',
                'default_value' => 'fas fa-truck',
            ),
            array(
                'key' => 'field_service_2_link',
                'label' => 'Service 2 - Link',
                'name' => 'service_2_link',
                'type' => 'page_link',
            ),
            array(
                'key' => 'field_service_2_featured',
                'label' => 'Service 2 - Featured?',
                'name' => 'service_2_featured',
                'type' => 'true_false',
                'default_value' => 1,
            ),
            array(
                'key' => 'field_service_2_feature_1',
                'label' => 'Service 2 - Feature 1',
                'name' => 'service_2_feature_1',
                'type' => 'text',
                'default_value' => 'At Your Facility',
            ),
            array(
                'key' => 'field_service_2_feature_2',
                'label' => 'Service 2 - Feature 2',
                'name' => 'service_2_feature_2',
                'type' => 'text',
                'default_value' => 'Minimal Downtime',
            ),
            array(
                'key' => 'field_service_2_feature_3',
                'label' => 'Service 2 - Feature 3',
                'name' => 'service_2_feature_3',
                'type' => 'text',
                'default_value' => 'Full Documentation',
            ),
            // Service 3 - Repair Services
            array(
                'key' => 'field_service_3_title',
                'label' => 'Service 3 - Title',
                'name' => 'service_3_title',
                'type' => 'text',
                'default_value' => 'Repair Services',
            ),
            array(
                'key' => 'field_service_3_description',
                'label' => 'Service 3 - Description',
                'name' => 'service_3_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Factory authorized repair center for major brands. Expert repair and maintenance services.',
            ),
            array(
                'key' => 'field_service_3_icon',
                'label' => 'Service 3 - Icon Class',
                'name' => 'service_3_icon',
                'type' => 'text',
                'default_value' => 'fas fa-wrench',
            ),
            array(
                'key' => 'field_service_3_link',
                'label' => 'Service 3 - Link',
                'name' => 'service_3_link',
                'type' => 'page_link',
            ),
            array(
                'key' => 'field_service_3_feature_1',
                'label' => 'Service 3 - Feature 1',
                'name' => 'service_3_feature_1',
                'type' => 'text',
                'default_value' => 'Factory Authorized',
            ),
            array(
                'key' => 'field_service_3_feature_2',
                'label' => 'Service 3 - Feature 2',
                'name' => 'service_3_feature_2',
                'type' => 'text',
                'default_value' => 'Expert Technicians',
            ),
            array(
                'key' => 'field_service_3_feature_3',
                'label' => 'Service 3 - Feature 3',
                'name' => 'service_3_feature_3',
                'type' => 'text',
                'default_value' => 'Quality Parts',
            ),
            // Service 4 - Sales
            array(
                'key' => 'field_service_4_title',
                'label' => 'Service 4 - Title',
                'name' => 'service_4_title',
                'type' => 'text',
                'default_value' => 'Tool Sales',
            ),
            array(
                'key' => 'field_service_4_description',
                'label' => 'Service 4 - Description',
                'name' => 'service_4_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Distributor for all major precision tool manufacturers at competitive prices.',
            ),
            array(
                'key' => 'field_service_4_icon',
                'label' => 'Service 4 - Icon Class',
                'name' => 'service_4_icon',
                'type' => 'text',
                'default_value' => 'fas fa-shopping-cart',
            ),
            array(
                'key' => 'field_service_4_link',
                'label' => 'Service 4 - Link',
                'name' => 'service_4_link',
                'type' => 'page_link',
            ),
            array(
                'key' => 'field_service_4_feature_1',
                'label' => 'Service 4 - Feature 1',
                'name' => 'service_4_feature_1',
                'type' => 'text',
                'default_value' => 'Major Brands',
            ),
            array(
                'key' => 'field_service_4_feature_2',
                'label' => 'Service 4 - Feature 2',
                'name' => 'service_4_feature_2',
                'type' => 'text',
                'default_value' => 'Competitive Pricing',
            ),
            array(
                'key' => 'field_service_4_feature_3',
                'label' => 'Service 4 - Feature 3',
                'name' => 'service_4_feature_3',
                'type' => 'text',
                'default_value' => 'Expert Guidance',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ) );

    // ========================================
    // ABOUT SECTION
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_about_section',
        'title' => 'About Section',
        'fields' => array(
            array(
                'key' => 'field_about_title',
                'label' => 'About Title',
                'name' => 'about_title',
                'type' => 'text',
                'default_value' => 'About Abbott Gage, Inc.',
            ),
            array(
                'key' => 'field_about_lead',
                'label' => 'About Lead Text',
                'name' => 'about_lead',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Over three decades of excellence in precision measuring tools and calibration services.',
            ),
            array(
                'key' => 'field_about_content',
                'label' => 'About Content',
                'name' => 'about_content',
                'type' => 'wysiwyg',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
            ),
            array(
                'key' => 'field_about_image',
                'label' => 'About Image',
                'name' => 'about_image',
                'type' => 'image',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_about_feature_1_icon',
                'label' => 'Feature 1 - Icon',
                'name' => 'about_feature_1_icon',
                'type' => 'text',
                'default_value' => 'fas fa-certificate',
            ),
            array(
                'key' => 'field_about_feature_1_title',
                'label' => 'Feature 1 - Title',
                'name' => 'about_feature_1_title',
                'type' => 'text',
                'default_value' => 'ISO 9001:2015 Certified',
            ),
            array(
                'key' => 'field_about_feature_1_text',
                'label' => 'Feature 1 - Text',
                'name' => 'about_feature_1_text',
                'type' => 'text',
                'default_value' => 'Meeting international quality standards',
            ),
            array(
                'key' => 'field_about_feature_2_icon',
                'label' => 'Feature 2 - Icon',
                'name' => 'about_feature_2_icon',
                'type' => 'text',
                'default_value' => 'fas fa-award',
            ),
            array(
                'key' => 'field_about_feature_2_title',
                'label' => 'Feature 2 - Title',
                'name' => 'about_feature_2_title',
                'type' => 'text',
                'default_value' => 'Woman-Owned Business',
            ),
            array(
                'key' => 'field_about_feature_2_text',
                'label' => 'Feature 2 - Text',
                'name' => 'about_feature_2_text',
                'type' => 'text',
                'default_value' => 'WBENC and WOSB certified',
            ),
            array(
                'key' => 'field_about_feature_3_icon',
                'label' => 'Feature 3 - Icon',
                'name' => 'about_feature_3_icon',
                'type' => 'text',
                'default_value' => 'fas fa-tools',
            ),
            array(
                'key' => 'field_about_feature_3_title',
                'label' => 'Feature 3 - Title',
                'name' => 'about_feature_3_title',
                'type' => 'text',
                'default_value' => 'Factory Authorized',
            ),
            array(
                'key' => 'field_about_feature_3_text',
                'label' => 'Feature 3 - Text',
                'name' => 'about_feature_3_text',
                'type' => 'text',
                'default_value' => 'Certified repair center for major brands',
            ),
            array(
                'key' => 'field_about_cta_text',
                'label' => 'About CTA Button Text',
                'name' => 'about_cta_text',
                'type' => 'text',
                'default_value' => 'Learn More About Us',
            ),
            array(
                'key' => 'field_about_cta_link',
                'label' => 'About CTA Button Link',
                'name' => 'about_cta_link',
                'type' => 'page_link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'front-page.php',
                ),
            ),
        ),
    ) );

    // ========================================
    // WHY CHOOSE US SECTION
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_why_choose_us',
        'title' => 'Why Choose Us Section',
        'fields' => array(
            array(
                'key' => 'field_why_choose_title',
                'label' => 'Section Title',
                'name' => 'why_choose_title',
                'type' => 'text',
                'default_value' => 'Why Choose Abbott Gage, Inc.?',
            ),
            array(
                'key' => 'field_why_choose_description',
                'label' => 'Section Description',
                'name' => 'why_choose_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Your trusted partner for precision measurement solutions',
            ),
            // Reason 1
            array(
                'key' => 'field_reason_1_icon',
                'label' => 'Reason 1 - Icon',
                'name' => 'reason_1_icon',
                'type' => 'text',
                'default_value' => 'fas fa-history',
            ),
            array(
                'key' => 'field_reason_1_title',
                'label' => 'Reason 1 - Title',
                'name' => 'reason_1_title',
                'type' => 'text',
                'default_value' => '30+ Years Experience',
            ),
            array(
                'key' => 'field_reason_1_text',
                'label' => 'Reason 1 - Text',
                'name' => 'reason_1_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Decades of expertise in precision measuring tools and calibration services.',
            ),
            // Reason 2
            array(
                'key' => 'field_reason_2_icon',
                'label' => 'Reason 2 - Icon',
                'name' => 'reason_2_icon',
                'type' => 'text',
                'default_value' => 'fas fa-microscope',
            ),
            array(
                'key' => 'field_reason_2_title',
                'label' => 'Reason 2 - Title',
                'name' => 'reason_2_title',
                'type' => 'text',
                'default_value' => 'State-of-the-Art Lab',
            ),
            array(
                'key' => 'field_reason_2_text',
                'label' => 'Reason 2 - Text',
                'name' => 'reason_2_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Advanced equipment ensuring the highest accuracy and precision.',
            ),
            // Reason 3
            array(
                'key' => 'field_reason_3_icon',
                'label' => 'Reason 3 - Icon',
                'name' => 'reason_3_icon',
                'type' => 'text',
                'default_value' => 'fas fa-user-friends',
            ),
            array(
                'key' => 'field_reason_3_title',
                'label' => 'Reason 3 - Title',
                'name' => 'reason_3_title',
                'type' => 'text',
                'default_value' => 'Expert Team',
            ),
            array(
                'key' => 'field_reason_3_text',
                'label' => 'Reason 3 - Text',
                'name' => 'reason_3_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Knowledgeable, experienced technicians dedicated to your needs.',
            ),
            // Reason 4
            array(
                'key' => 'field_reason_4_icon',
                'label' => 'Reason 4 - Icon',
                'name' => 'reason_4_icon',
                'type' => 'text',
                'default_value' => 'fas fa-shipping-fast',
            ),
            array(
                'key' => 'field_reason_4_title',
                'label' => 'Reason 4 - Title',
                'name' => 'reason_4_title',
                'type' => 'text',
                'default_value' => 'Fast Turnaround',
            ),
            array(
                'key' => 'field_reason_4_text',
                'label' => 'Reason 4 - Text',
                'name' => 'reason_4_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Quick and efficient service to minimize your downtime.',
            ),
            // Reason 5
            array(
                'key' => 'field_reason_5_icon',
                'label' => 'Reason 5 - Icon',
                'name' => 'reason_5_icon',
                'type' => 'text',
                'default_value' => 'fas fa-check-circle',
            ),
            array(
                'key' => 'field_reason_5_title',
                'label' => 'Reason 5 - Title',
                'name' => 'reason_5_title',
                'type' => 'text',
                'default_value' => 'Quality Assurance',
            ),
            array(
                'key' => 'field_reason_5_text',
                'label' => 'Reason 5 - Text',
                'name' => 'reason_5_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'NIST traceable standards and ISO 9001:2015 certification.',
            ),
            // Reason 6
            array(
                'key' => 'field_reason_6_icon',
                'label' => 'Reason 6 - Icon',
                'name' => 'reason_6_icon',
                'type' => 'text',
                'default_value' => 'fas fa-handshake',
            ),
            array(
                'key' => 'field_reason_6_title',
                'label' => 'Reason 6 - Title',
                'name' => 'reason_6_title',
                'type' => 'text',
                'default_value' => 'Customer Service',
            ),
            array(
                'key' => 'field_reason_6_text',
                'label' => 'Reason 6 - Text',
                'name' => 'reason_6_text',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Personalized attention and professional support for every client.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'front-page.php',
                ),
            ),
        ),
    ) );

    // ========================================
    // CTA SECTION
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_cta_section',
        'title' => 'Call-to-Action Section',
        'fields' => array(
            array(
                'key' => 'field_cta_title',
                'label' => 'CTA Title',
                'name' => 'cta_title',
                'type' => 'text',
                'default_value' => 'Ready to Get Started?',
            ),
            array(
                'key' => 'field_cta_description',
                'label' => 'CTA Description',
                'name' => 'cta_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Contact us today for a free quote on our calibration, repair, or sales services.',
            ),
            array(
                'key' => 'field_cta_button_1_text',
                'label' => 'Button 1 Text',
                'name' => 'cta_button_1_text',
                'type' => 'text',
                'default_value' => 'Contact Us',
            ),
            array(
                'key' => 'field_cta_button_1_link',
                'label' => 'Button 1 Link',
                'name' => 'cta_button_1_link',
                'type' => 'page_link',
            ),
            array(
                'key' => 'field_cta_button_2_text',
                'label' => 'Button 2 Text',
                'name' => 'cta_button_2_text',
                'type' => 'text',
                'default_value' => 'Call 1-800-481-4243',
            ),
            array(
                'key' => 'field_cta_button_2_phone',
                'label' => 'Button 2 Phone Number',
                'name' => 'cta_button_2_phone',
                'type' => 'text',
                'default_value' => '+18004814243',
            ),
            array(
                'key' => 'field_cta_hours_text',
                'label' => 'Business Hours Text',
                'name' => 'cta_hours_text',
                'type' => 'text',
                'default_value' => 'Monday - Friday: 8:00 AM - 5:00 PM CST',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ) );

    // ========================================
    // FOOTER SETTINGS
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_footer_settings',
        'title' => 'Footer Settings',
        'fields' => array(
            array(
                'key' => 'field_footer_description',
                'label' => 'Company Description',
                'name' => 'footer_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Precision measuring tools, calibration, certification, and repair services. Over 30 years of excellence.',
            ),
            array(
                'key' => 'field_footer_address',
                'label' => 'Street Address',
                'name' => 'footer_address',
                'type' => 'text',
                'default_value' => '40 Industrial Park',
            ),
            array(
                'key' => 'field_footer_city_state_zip',
                'label' => 'City, State, Zip',
                'name' => 'footer_city_state_zip',
                'type' => 'text',
                'default_value' => 'Childersburg, AL 35044',
            ),
            array(
                'key' => 'field_footer_fax',
                'label' => 'Fax Number',
                'name' => 'footer_fax',
                'type' => 'text',
                'default_value' => '(256) 378-3287',
            ),
            array(
                'key' => 'field_footer_payment_image',
                'label' => 'Payment Methods Image',
                'name' => 'footer_payment_image',
                'type' => 'image',
                'return_format' => 'array',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ) );

    // ========================================
    // MANUFACTURERS SECTION
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_manufacturers_section',
        'title' => 'Manufacturers Section',
        'fields' => array(
            array(
                'key' => 'field_manufacturers_title',
                'label' => 'Section Title',
                'name' => 'manufacturers_title',
                'type' => 'text',
                'default_value' => 'Authorized Distributor & Service Center',
            ),
            array(
                'key' => 'field_manufacturers_description',
                'label' => 'Section Description',
                'name' => 'manufacturers_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Partnered with industry-leading manufacturers',
            ),
            array(
                'key' => 'field_show_manufacturer_logos',
                'label' => 'Show Manufacturer Logos',
                'name' => 'show_manufacturer_logos',
                'type' => 'true_false',
                'default_value' => 1,
                'instructions' => 'Displays the manufacturer logos from assets/images/manufacturers/',
            ),
            array(
                'key' => 'field_manufacturers_cta_text',
                'label' => 'CTA Button Text',
                'name' => 'manufacturers_cta_text',
                'type' => 'text',
                'default_value' => 'View All Manufacturer Partners',
            ),
            array(
                'key' => 'field_manufacturers_cta_link',
                'label' => 'CTA Button Link',
                'name' => 'manufacturers_cta_link',
                'type' => 'page_link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ) );

    // ========================================
    // CERTIFICATIONS SECTION
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_certifications_section',
        'title' => 'Certifications Section',
        'fields' => array(
            array(
                'key' => 'field_certifications_title',
                'label' => 'Section Title',
                'name' => 'certifications_title',
                'type' => 'text',
                'default_value' => 'Our Certifications',
            ),
            array(
                'key' => 'field_certifications_description',
                'label' => 'Section Description',
                'name' => 'certifications_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Certified excellence you can trust',
            ),
            // Certification 1 - ISO
            array(
                'key' => 'field_cert_1_title',
                'label' => 'Certification 1 - Title',
                'name' => 'cert_1_title',
                'type' => 'text',
                'default_value' => 'ISO 9001:2015 Certified',
            ),
            array(
                'key' => 'field_cert_1_description',
                'label' => 'Certification 1 - Description',
                'name' => 'cert_1_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Our quality management system meets international standards for excellence.',
            ),
            array(
                'key' => 'field_cert_1_image',
                'label' => 'Certification 1 - Image',
                'name' => 'cert_1_image',
                'type' => 'image',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_cert_1_pdf',
                'label' => 'Certification 1 - PDF Document',
                'name' => 'cert_1_pdf',
                'type' => 'file',
                'return_format' => 'array',
                'mime_types' => 'pdf',
            ),
            // Certification 2 - WBENC
            array(
                'key' => 'field_cert_2_title',
                'label' => 'Certification 2 - Title',
                'name' => 'cert_2_title',
                'type' => 'text',
                'default_value' => 'WBENC Certified',
            ),
            array(
                'key' => 'field_cert_2_description',
                'label' => 'Certification 2 - Description',
                'name' => 'cert_2_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Certified Women\'s Business Enterprise by the Women\'s Business Enterprise National Council.',
            ),
            array(
                'key' => 'field_cert_2_image',
                'label' => 'Certification 2 - Image',
                'name' => 'cert_2_image',
                'type' => 'image',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_cert_2_pdf',
                'label' => 'Certification 2 - PDF Document',
                'name' => 'cert_2_pdf',
                'type' => 'file',
                'return_format' => 'array',
                'mime_types' => 'pdf',
            ),
            // Certification 3 - WOSB
            array(
                'key' => 'field_cert_3_title',
                'label' => 'Certification 3 - Title',
                'name' => 'cert_3_title',
                'type' => 'text',
                'default_value' => 'WOSB Certified',
            ),
            array(
                'key' => 'field_cert_3_description',
                'label' => 'Certification 3 - Description',
                'name' => 'cert_3_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Woman-Owned Small Business certified, supporting diversity in federal contracting.',
            ),
            array(
                'key' => 'field_cert_3_image',
                'label' => 'Certification 3 - Image',
                'name' => 'cert_3_image',
                'type' => 'image',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_cert_3_pdf',
                'label' => 'Certification 3 - PDF Document',
                'name' => 'cert_3_pdf',
                'type' => 'file',
                'return_format' => 'array',
                'mime_types' => 'pdf',
            ),
            // Certification 4 - NIST
            array(
                'key' => 'field_cert_4_title',
                'label' => 'Certification 4 - Title',
                'name' => 'cert_4_title',
                'type' => 'text',
                'default_value' => 'NIST Traceable',
            ),
            array(
                'key' => 'field_cert_4_description',
                'label' => 'Certification 4 - Description',
                'name' => 'cert_4_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'All certifications are traceable to the National Institute of Standards and Technology.',
            ),
            array(
                'key' => 'field_cert_4_icon',
                'label' => 'Certification 4 - Icon Class',
                'name' => 'cert_4_icon',
                'type' => 'text',
                'default_value' => 'fas fa-balance-scale',
                'instructions' => 'Font Awesome icon class (used if no image provided)',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ) );

    // ========================================
    // BUSINESS INFO (for Schema & SEO)
    // ========================================
    acf_add_local_field_group( array(
        'key' => 'group_business_info',
        'title' => 'Business Information',
        'fields' => array(
            array(
                'key' => 'field_business_name',
                'label' => 'Business Name',
                'name' => 'business_name',
                'type' => 'text',
                'default_value' => 'Abbott Gage, Inc.',
            ),
            array(
                'key' => 'field_business_description',
                'label' => 'Business Description',
                'name' => 'business_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Precision measuring tools, calibration, certification, and repair services. ISO 9001:2015 certified, woman-owned business.',
            ),
            array(
                'key' => 'field_business_latitude',
                'label' => 'Latitude',
                'name' => 'business_latitude',
                'type' => 'text',
                'default_value' => '33.2829',
            ),
            array(
                'key' => 'field_business_longitude',
                'label' => 'Longitude',
                'name' => 'business_longitude',
                'type' => 'text',
                'default_value' => '-86.3553',
            ),
            array(
                'key' => 'field_business_hours',
                'label' => 'Business Hours (Schema format)',
                'name' => 'business_hours',
                'type' => 'text',
                'default_value' => 'Mo-Fr 08:00-17:00',
                'instructions' => 'Format: Mo-Fr 08:00-17:00',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ) );
}
add_action( 'acf/init', 'abbott_gage_register_acf_fields' );

/**
 * Register ACF Options Pages
 */
function abbott_gage_register_acf_options_pages() {
    if ( ! function_exists( 'acf_add_options_page' ) ) {
        return;
    }

    acf_add_options_page( array(
        'page_title'  => 'Theme General Settings',
        'menu_title'  => 'Theme Settings',
        'menu_slug'   => 'theme-general-settings',
        'capability'  => 'edit_posts',
        'icon_url'    => 'dashicons-admin-settings',
        'position'    => 60,
        'redirect'    => false,
    ) );
}
add_action( 'acf/init', 'abbott_gage_register_acf_options_pages' );


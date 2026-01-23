<?php
/**
 * ACF Field Groups Registration
 * ACF Pro 6.6.2
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Create ACF Options Page for Global Settings
 */
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global-settings',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-admin-settings',
        'redirect'      => false
    ));
    
}

function abbott_gage_get_icon_choices() {
    return array(

        // A
        'fas fa-angle-right'       => '› Angle Right',
        'fas fa-arrows-alt-v'      => '↕️ Arrows Vertical',
        'fas fa-atom'              => '⚛️ Atom/Science',
        'fas fa-award'             => '🏆 Award/Trophy',

        // B
        'fas fa-balance-scale'     => '⚖️ Balance Scale',
        'fas fa-bolt'              => '⚡ Bolt',
        'fas fa-box'               => '📦 Package/Box',
        'fas fa-boxes'              => '📦📦 Boxes/Inventory',
        'fas fa-briefcase'         => '💼 Business/Briefcase',
        'fas fa-building'          => '🏢 Building',

        // C
        'fas fa-calendar'          => '📅 Calendar',
        'fas fa-cash-register'     => '💰 Cash Register',
        'fas fa-certificate'       => '🏅 Certificate',
        'fas fa-check-circle'      => '✓ Check Circle',
        'fas fa-check-square'      => '☑ Check Square',
        'fas fa-chevron-right'     => '› Chevron Right',
        'fas fa-circle-notch'      => '⭕ Circle Notch',
        'fas fa-clipboard-check'   => '📋 Clipboard Check',
        'fas fa-clipboard-list'    => '📋 Clipboard List',
        'fas fa-clock'             => '🕐 Clock',
        'fas fa-cog'               => '⚙️ Single Gear',
        'fas fa-cogs'              => '⚙️ Gears/Settings',
        'fas fa-comment'           => '💬 Comment',
        'fas fa-comments'          => '💬 Comments',
        'fas fa-cubes'             => '🧊 Cubes/Blocks',

        // D
        'fas fa-dollar-sign'       => '💵 Dollar Sign',
        'fas fa-dolly'             => '🛒 Cart/Dolly',

        // E
        'fas fa-envelope'          => '✉️ Email/Envelope',
        'fas fa-exclamation-circle'=> '❗ Exclamation Circle',

        // F
        'fas fa-fax'               => '📠 Fax',
        'fas fa-file-alt'          => '📄 Document',
        'fas fa-file-invoice-dollar' => '💰 Invoice/Payment',
        'fas fa-file-pdf'          => '📄 PDF File',
        'fas fa-flask'             => '🧪 Laboratory Flask',

        // G
        'fas fa-graduation-cap'    => '🎓 Education/Training',
        'fas fa-grip-vertical'     => '⋮ Grip Vertical',

        // H
        'fas fa-hammer'            => '🔨 Hammer',
        'fas fa-handshake'         => '🤝 Handshake',
        'fas fa-headset'           => '🎧 Headset/Support',
        'fas fa-heart'             => '❤️ Heart',
        'fas fa-history'           => '🕐 History/Time',
        'fas fa-hourglass-half'    => '⏳ Hourglass',
        'fas fa-info-circle'       => 'ℹ️ Info Circle',
        'fas fa-industry'          => '🏭 Factory/Industry',

        // L
        'fas fa-lightbulb'         => '💡 Light Bulb',
        'fas fa-map-marker-alt'    => '📍 Location Pin',
        'fas fa-medal'             => '🥇 Medal',
        'fas fa-microscope'        => '🔬 Microscope',

        // P
        'fas fa-paper-plane'       => '✈️ Paper Plane',
        'fas fa-phone'             => '📞 Phone',
        'fas fa-phone-alt'         => '☎️ Phone Alt',

        // Q
        'fas fa-question-circle'   => '❓ Question Circle',

        // R
        'fas fa-ruler'             => '📏 Ruler',
        'fas fa-ruler-combined'    => '📐 Ruler Combined',
        'fas fa-rocket'            => '🚀 Rocket',

        // S
        'fas fa-screwdriver'       => '🪛 Screwdriver',
        'fas fa-shield-alt'        => '🛡️ Shield',
        'fas fa-shipping-fast'     => '📦 Fast Shipping',
        'fas fa-shopping-bag'      => '🛍️ Shopping Bag',
        'fas fa-shopping-cart'     => '🛒 Shopping Cart',
        'fas fa-star'              => '⭐ Star',
        'fas fa-stamp'             => '📋 Stamp',

        // T
        'fas fa-tachometer-alt'    => '⏱️ Tachometer Alt',
        'fas fa-team'              => '👥 Team/People',
        'fas fa-temperature-high'  => '🌡️ Temperature',
        'fas fa-thumbs-up'         => '👍 Thumbs Up',
        'fas fa-tools'             => '🔧 Tools',
        'fas fa-truck'             => '🚚 Truck/Delivery',

        // U
        'fas fa-user-check'        => '✓ Verified User',
        'fas fa-user-friends'      => '👥 Team/People',
        'fas fa-user-tie'           => '👔 Professional/Expert',
        'fas fa-users'             => '👥 Multiple Users',

        // V
        'fas fa-vial'              => '🧪 Vial',

        // W
        'fas fa-warehouse'         => '🏭 Warehouse',
        'fas fa-wrench'            => '🔧 Wrench',

        // Z
        'fas fa-arrow-circle-right'=> '➡️ Arrow Circle Right',
        'fas fa-arrow-right'       => '→ Arrow Right',
    );
}


/**
 * Register ACF Field Groups
 */
add_action('acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }
    
    $icon_choices = abbott_gage_get_icon_choices();

    // ==========================================
    // GLOBAL SETTINGS - Options Page
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_global_settings',
        'title' => 'Global Settings',
        'fields' => array(
            // Contact Information Tab
            array(
                'key' => 'field_contact_tab',
                'label' => 'Contact Information',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_company_name',
                'label' => 'Company Name',
                'name' => 'company_name',
                'type' => 'text',
                'default_value' => 'Abbott Gage, Inc.',
            ),
            array(
                'key' => 'field_phone_primary',
                'label' => 'Primary Phone',
                'name' => 'phone_primary',
                'type' => 'text',
                'default_value' => '(256) 378-3286',
            ),
            array(
                'key' => 'field_phone_toll_free',
                'label' => 'Toll Free Phone',
                'name' => 'phone_toll_free',
                'type' => 'text',
                'default_value' => '1-800-481-4243',
            ),
            array(
                'key' => 'field_fax',
                'label' => 'Fax Number',
                'name' => 'fax',
                'type' => 'text',
                'default_value' => '(256) 378-3287',
            ),
            array(
                'key' => 'field_email',
                'label' => 'Email Address',
                'name' => 'email',
                'type' => 'email',
                'default_value' => 'shelby@abbottgageinc.com',
            ),
            array(
                'key' => 'field_address_street',
                'label' => 'Street Address',
                'name' => 'address_street',
                'type' => 'text',
                'default_value' => '40 Industrial Park',
            ),
            array(
                'key' => 'field_address_city',
                'label' => 'City',
                'name' => 'address_city',
                'type' => 'text',
                'default_value' => 'Childersburg',
            ),
            array(
                'key' => 'field_address_state',
                'label' => 'State',
                'name' => 'address_state',
                'type' => 'text',
                'default_value' => 'AL',
            ),
            array(
                'key' => 'field_address_zip',
                'label' => 'ZIP Code',
                'name' => 'address_zip',
                'type' => 'text',
                'default_value' => '35044',
            ),
            array(
                'key' => 'field_business_hours',
                'label' => 'Business Hours',
                'name' => 'business_hours',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => "Monday - Friday\n8:00 AM - 5:00 PM CST",
            ),
            
            // Social Media Tab
            array(
                'key' => 'field_social_tab',
                'label' => 'Social Media',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_facebook_url',
                'label' => 'Facebook URL',
                'name' => 'facebook_url',
                'type' => 'url',
            ),
            array(
                'key' => 'field_linkedin_url',
                'label' => 'LinkedIn URL',
                'name' => 'linkedin_url',
                'type' => 'url',
            ),
            array(
                'key' => 'field_twitter_url',
                'label' => 'Twitter URL',
                'name' => 'twitter_url',
                'type' => 'url',
            ),
            
            // ==========================================
            // SHARED CONTENT TAB - Reusable Sections
            // ==========================================
            array(
                'key' => 'field_shared_tab',
                'label' => 'Services',
                'name' => '',
                'type' => 'tab',
                'instructions' => 'Content sections that can be reused across multiple pages.',
            ),
            
            // Shared Services Section
            array(
                'key' => 'field_shared_services_heading',
                'label' => 'Services Section',
                'name' => '',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_services_title',
                'label' => 'Section Title',
                'name' => 'global_services_title',
                'type' => 'text',
                'default_value' => 'Our Services',
            ),
            array(
                'key' => 'field_global_services_description',
                'label' => 'Section Description',
                'name' => 'global_services_description',
                'type' => 'text',
                'default_value' => 'Comprehensive solutions for all your precision measuring needs',
            ),
            array(
                'key' => 'field_global_services_items',
                'label' => 'Services',
                'name' => 'global_services_items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Service',
                'sub_fields' => array(
                    array(
                        'key' => 'field_global_service_icon',
                        'label' => 'Service Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-flask',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_global_service_title',
                        'label' => 'Service Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_global_service_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_global_service_features',
                        'label' => 'Features List',
                        'name' => 'features',
                        'type' => 'repeater',
                        'min' => 0,
                        'max' => 5,
                        'layout' => 'table',
                        'button_label' => 'Add Feature',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_global_service_feature_text',
                                'label' => 'Feature',
                                'name' => 'text',
                                'type' => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_global_service_link',
                        'label' => 'Service Link',
                        'name' => 'link',
                        'type' => 'link',
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_global_service_featured',
                        'label' => 'Featured Service',
                        'name' => 'featured',
                        'type' => 'true_false',
                        'ui' => 1,
                        'message' => 'Mark as featured/popular service',
                    ),
                    array(
                        'key' => 'field_global_service_featured_badge',
                        'label' => 'Featured Badge Text',
                        'name' => 'featured_badge',
                        'type' => 'text',
                        'default_value' => 'Popular',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_global_service_featured',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_shared_services_end',
                'label' => 'Services Section End',
                'name' => '',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

            array(
                'key' => 'field_cta_tab',
                'label' => 'CTA Information',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            
            // Shared CTA Section
            array(
                'key' => 'field_shared_cta_heading',
                'label' => 'Call to Action Section',
                'name' => '',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_cta_title',
                'label' => 'CTA Title',
                'name' => 'global_cta_title',
                'type' => 'text',
                'default_value' => 'Ready to Get Started?',
            ),
            array(
                'key' => 'field_global_cta_description',
                'label' => 'CTA Description',
                'name' => 'global_cta_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Contact us today for a free quote on our calibration, repair, or sales services.',
            ),
            array(
                'key' => 'field_global_cta_buttons',
                'label' => 'CTA Buttons',
                'name' => 'global_cta_buttons',
                'type' => 'repeater',
                'min' => 1,
                'max' => 2,
                'layout' => 'table',
                'button_label' => 'Add Button',
                'sub_fields' => array(
                    array(
                        'key' => 'field_global_cta_button_text',
                        'label' => 'Button Text',
                        'name' => 'text',
                        'type' => 'text',
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_global_cta_button_url',
                        'label' => 'Button URL',
                        'name' => 'url',
                        'type' => 'text',
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_global_cta_button_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'allow_null' => 1,
                        'ui' => 1,
                        'wrapper' => array('width' => '20'),
                    ),
                    array(
                        'key' => 'field_global_cta_button_style',
                        'label' => 'Style',
                        'name' => 'style',
                        'type' => 'select',
                        'choices' => array(
                            'btn-secondary' => 'Secondary',
                            'btn-outline-light' => 'Outline',
                        ),
                        'wrapper' => array('width' => '20'),
                    ),
                ),
            ),
            array(
                'key' => 'field_global_cta_hours_show',
                'label' => 'Show Business Hours',
                'name' => 'global_cta_hours_show',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ),
            array(
                'key' => 'field_shared_cta_end',
                'label' => 'CTA Section End',
                'name' => '',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
            
            array(
                'key' => 'field_certifications_tab',
                'label' => 'Certifications',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ),
            array(
                'key' => 'field_shared_certs_heading',
                'label' => 'Certifications Section',
                'name' => '',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_certifications_title',
                'label' => 'Section Title',
                'name' => 'global_certifications_title',
                'type' => 'text',
                'default_value' => 'Our Certifications',
            ),
            array(
                'key' => 'field_global_certifications_description',
                'label' => 'Section Description',
                'name' => 'global_certifications_description',
                'type' => 'text',
                'default_value' => 'Certified excellence you can trust',
            ),
            array(
                'key' => 'field_global_certifications_items',
                'label' => 'Certifications',
                'name' => 'global_certifications_items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Certification',
                'sub_fields' => array(
                    array(
                        'key' => 'field_global_certification_image',
                        'label' => 'Certification Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Upload an image OR select an icon below (not both)',
                    ),
                    array(
                        'key' => 'field_global_certification_icon',
                        'label' => 'Icon (alternative to image)',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-certificate',
                        'instructions' => 'Select an icon if you don\'t have an image',
                        'allow_null' => 1,
                        'ui' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_global_certification_image',
                                    'operator' => '==empty',
                                ),
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_global_certification_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_global_certification_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'key' => 'field_global_certification_pdf',
                        'label' => 'Certificate PDF',
                        'name' => 'pdf',
                        'type' => 'file',
                        'return_format' => 'array',
                        'mime_types' => 'pdf',
                    ),
                ),
            ),
            array(
                'key' => 'field_shared_certs_end',
                'label' => 'Certifications Section End',
                'name' => '',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'global-settings',
                ),
            ),
        ),
        'style' => 'default',
    ));

    // ==========================================
    // HOMEPAGE - ALL SECTIONS (CONSOLIDATED WITH TABS)
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_homepage_sections',
        'title' => 'Homepage Content',
        'fields' => array(
            
            // Hero Section Tab
            array(
                'key' => 'field_tab_hero',
                'label' => 'Hero Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Precision Measuring Tools & Calibration Services',
                'required' => 1,
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'State-of-the-art measuring equipment to provide you with the greatest accuracy. On-site calibration service for your dimensional and electronic instruments.',
                'required' => 1,
            ),
            array(
                'key' => 'field_hero_features',
                'label' => 'Hero Features',
                'name' => 'hero_features',
                'type' => 'repeater',
                'min' => 0,
                'max' => 5,
                'layout' => 'table',
                'button_label' => 'Add Feature',
                'sub_fields' => array(
                    array(
                        'key' => 'field_hero_feature_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-check-circle',
                        'ui' => 1,
                        'wrapper' => array('width' => '40'),
                    ),
                    array(
                        'key' => 'field_hero_feature_text',
                        'label' => 'Feature Text',
                        'name' => 'text',
                        'type' => 'text',
                        'wrapper' => array('width' => '60'),
                    ),
                ),
            ),
            array(
                'key' => 'field_hero_buttons',
                'label' => 'Hero Buttons',
                'name' => 'hero_buttons',
                'type' => 'repeater',
                'min' => 0,
                'max' => 2,
                'layout' => 'table',
                'button_label' => 'Add Button',
                'sub_fields' => array(
                    array(
                        'key' => 'field_hero_button_text',
                        'label' => 'Button Text',
                        'name' => 'text',
                        'type' => 'text',
                        'wrapper' => array('width' => '25'),
                    ),
                    array(
                        'key' => 'field_hero_button_url',
                        'label' => 'Button URL',
                        'name' => 'url',
                        'type' => 'link',
                        'return_format' => 'array',
                        'wrapper' => array('width' => '35'),
                    ),
                    array(
                        'key' => 'field_hero_button_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-paper-plane',
                        'allow_null' => 1,
                        'ui' => 1,
                        'wrapper' => array('width' => '20'),
                    ),
                    array(
                        'key' => 'field_hero_button_style',
                        'label' => 'Button Style',
                        'name' => 'style',
                        'type' => 'select',
                        'choices' => array(
                            'btn-secondary' => 'Secondary (Orange)',
                            'btn-outline-light' => 'Outline Light',
                            'btn-primary' => 'Primary (Blue)',
                        ),
                        'default_value' => 'btn-secondary',
                        'wrapper' => array('width' => '20'),
                    ),
                ),
            ),
            
            // Services Section Tab
            array(
                'key' => 'field_tab_services',
                'label' => 'Services Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
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
                'type' => 'text',
                'default_value' => 'Comprehensive solutions for all your precision measuring needs',
            ),
            array(
                'key' => 'field_services_items',
                'label' => 'Services',
                'name' => 'services_items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Service',
                'sub_fields' => array(
                    array(
                        'key' => 'field_service_icon',
                        'label' => 'Service Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-flask',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_service_title',
                        'label' => 'Service Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_service_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_service_features',
                        'label' => 'Features List',
                        'name' => 'features',
                        'type' => 'repeater',
                        'min' => 0,
                        'max' => 5,
                        'layout' => 'table',
                        'button_label' => 'Add Feature',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_service_feature_text',
                                'label' => 'Feature',
                                'name' => 'text',
                                'type' => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_service_link',
                        'label' => 'Service Link',
                        'name' => 'link',
                        'type' => 'link',
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_service_featured',
                        'label' => 'Featured Service',
                        'name' => 'featured',
                        'type' => 'true_false',
                        'ui' => 1,
                        'message' => 'Mark as featured/popular service',
                    ),
                    array(
                        'key' => 'field_service_featured_badge',
                        'label' => 'Featured Badge Text',
                        'name' => 'featured_badge',
                        'type' => 'text',
                        'default_value' => 'Popular',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_service_featured',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            
            // Certifications Section Tab
            array(
                'key' => 'field_tab_certifications',
                'label' => 'Certifications Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
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
                'type' => 'text',
                'default_value' => 'Certified excellence you can trust',
            ),
            array(
                'key' => 'field_certifications_items',
                'label' => 'Certifications',
                'name' => 'certifications_items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Certification',
                'sub_fields' => array(
                    array(
                        'key' => 'field_certification_image',
                        'label' => 'Certification Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Upload an image OR select an icon below (not both)',
                    ),
                    array(
                        'key' => 'field_certification_icon',
                        'label' => 'Icon (alternative to image)',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-certificate',
                        'instructions' => 'Select an icon if you don\'t have an image',
                        'allow_null' => 1,
                        'ui' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_certification_image',
                                    'operator' => '==empty',
                                ),
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_certification_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_certification_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'key' => 'field_certification_pdf',
                        'label' => 'Certificate PDF',
                        'name' => 'pdf',
                        'type' => 'file',
                        'return_format' => 'array',
                        'mime_types' => 'pdf',
                    ),
                ),
            ),
            
            // About Section Tab
            array(
                'key' => 'field_tab_about',
                'label' => 'About Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_home_about_title',
                'label' => 'Section Title',
                'name' => 'home_about_title',
                'type' => 'text',
                'default_value' => 'About Abbott Gage, Inc.',
            ),
            array(
                'key' => 'field_home_about_lead',
                'label' => 'Lead Text',
                'name' => 'home_about_lead',
                'type' => 'text',
                'default_value' => 'Over three decades of excellence in precision measuring tools and calibration services.',
            ),
            array(
                'key' => 'field_home_about_content',
                'label' => 'Content',
                'name' => 'home_about_content',
                'type' => 'wysiwyg',
                'tabs' => 'all',
                'toolbar' => 'full',
            ),
            array(
                'key' => 'field_home_about_features',
                'label' => 'Features',
                'name' => 'home_about_features',
                'type' => 'repeater',
                'min' => 0,
                'max' => 3,
                'layout' => 'table',
                'button_label' => 'Add Feature',
                'sub_fields' => array(
                    array(
                        'key' => 'field_home_about_feature_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-check-circle',
                        'ui' => 1,
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_home_about_feature_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'wrapper' => array('width' => '35'),
                    ),
                    array(
                        'key' => 'field_home_about_feature_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'text',
                        'wrapper' => array('width' => '35'),
                    ),
                ),
            ),
            array(
                'key' => 'field_home_about_button',
                'label' => 'Button',
                'name' => 'home_about_button',
                'type' => 'link',
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_home_about_image',
                'label' => 'Image',
                'name' => 'home_about_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            
            // Manufacturers Section Tab
            array(
                'key' => 'field_tab_manufacturers',
                'label' => 'Manufacturers Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
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
                'type' => 'text',
                'default_value' => 'Partnered with industry-leading manufacturers',
            ),
            array(
                'key' => 'field_manufacturers_items',
                'label' => 'Manufacturers',
                'name' => 'manufacturers_items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'table',
                'button_label' => 'Add Manufacturer',
                'sub_fields' => array(
                    array(
                        'key' => 'field_manufacturer_logo',
                        'label' => 'Logo',
                        'name' => 'logo',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'required' => 1,
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_manufacturer_name',
                        'label' => 'Name',
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 1,
                        'wrapper' => array('width' => '40'),
                    ),
                    array(
                        'key' => 'field_manufacturer_authorized',
                        'label' => 'Factory Authorized',
                        'name' => 'authorized',
                        'type' => 'true_false',
                        'ui' => 1,
                        'wrapper' => array('width' => '30'),
                    ),
                ),
            ),
            array(
                'key' => 'field_manufacturers_button',
                'label' => 'View All Button',
                'name' => 'manufacturers_button',
                'type' => 'link',
                'return_format' => 'array',
            ),
            
            // Why Choose Us Section Tab
            array(
                'key' => 'field_tab_why',
                'label' => 'Why Choose Us',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_why_title',
                'label' => 'Section Title',
                'name' => 'why_title',
                'type' => 'text',
                'default_value' => 'Why Choose Abbott Gage, Inc.?',
            ),
            array(
                'key' => 'field_why_description',
                'label' => 'Section Description',
                'name' => 'why_description',
                'type' => 'text',
                'default_value' => 'Your trusted partner for precision measurement solutions',
            ),
            array(
                'key' => 'field_why_reasons',
                'label' => 'Reasons',
                'name' => 'why_reasons',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Reason',
                'sub_fields' => array(
                    array(
                        'key' => 'field_why_reason_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-check-circle',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_why_reason_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_why_reason_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
            
            // CTA Section Tab
            array(
                'key' => 'field_tab_cta',
                'label' => 'Call to Action',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
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
                'key' => 'field_cta_buttons',
                'label' => 'CTA Buttons',
                'name' => 'cta_buttons',
                'type' => 'repeater',
                'min' => 1,
                'max' => 2,
                'layout' => 'table',
                'button_label' => 'Add Button',
                'sub_fields' => array(
                    array(
                        'key' => 'field_cta_button_text',
                        'label' => 'Button Text',
                        'name' => 'text',
                        'type' => 'text',
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_cta_button_url',
                        'label' => 'Button URL',
                        'name' => 'url',
                        'type' => 'text',
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_cta_button_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'allow_null' => 1,
                        'ui' => 1,
                        'wrapper' => array('width' => '20'),
                    ),
                    array(
                        'key' => 'field_cta_button_style',
                        'label' => 'Style',
                        'name' => 'style',
                        'type' => 'select',
                        'choices' => array(
                            'btn-secondary' => 'Secondary',
                            'btn-outline-light' => 'Outline',
                        ),
                        'wrapper' => array('width' => '20'),
                    ),
                ),
            ),
            array(
                'key' => 'field_cta_hours_show',
                'label' => 'Show Business Hours',
                'name' => 'cta_hours_show',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
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
        'style' => 'default',
        'position' => 'normal',
    ));

    // ==========================================
    // ABOUT PAGE
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_about_page',
        'title' => 'About Page Content',
        'fields' => array(
            
            // Introduction Tab
            array(
                'key' => 'field_about_intro_tab',
                'label' => 'Introduction',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_about_intro_image',
                'label' => 'Introduction Image',
                'name' => 'about_intro_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            
            // Company Story Section
            array(
                'key' => 'field_about_story_tab',
                'label' => 'Company Story',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_about_history_title',
                'label' => 'History Title',
                'name' => 'about_history_title',
                'type' => 'text',
                'default_value' => 'Company History',
            ),
            array(
                'key' => 'field_about_history_content',
                'label' => 'History Content',
                'name' => 'about_history_content',
                'type' => 'wysiwyg',
                'tabs' => 'all',
                'toolbar' => 'full',
            ),
            array(
                'key' => 'field_about_commitment_title',
                'label' => 'Commitment Title',
                'name' => 'about_commitment_title',
                'type' => 'text',
                'default_value' => 'Our Commitment',
            ),
            array(
                'key' => 'field_about_commitment_content',
                'label' => 'Commitment Content',
                'name' => 'about_commitment_content',
                'type' => 'wysiwyg',
                'tabs' => 'all',
                'toolbar' => 'full',
            ),
            
            // Certifications & Credentials
            array(
                'key' => 'field_about_highlights_tab',
                'label' => 'Certifications',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_about_highlights_title',
                'label' => 'Section Title',
                'name' => 'about_highlights_title',
                'type' => 'text',
                'default_value' => 'Our Certifications & Credentials',
            ),
            array(
                'key' => 'field_about_highlights',
                'label' => 'Highlights',
                'name' => 'about_highlights',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Highlight',
                'sub_fields' => array(
                    array(
                        'key' => 'field_about_highlight_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-certificate',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_about_highlight_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_about_highlight_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
            
            // Team Section
            array(
                'key' => 'field_about_team_tab',
                'label' => 'Team Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_about_team_title',
                'label' => 'Team Title',
                'name' => 'about_team_title',
                'type' => 'text',
                'default_value' => 'Our Expert Team',
            ),
            array(
                'key' => 'field_about_team_description',
                'label' => 'Team Description',
                'name' => 'about_team_description',
                'type' => 'text',
                'default_value' => 'Experienced technicians and calibration specialists dedicated to precision and quality',
            ),
            array(
                'key' => 'field_about_team_content',
                'label' => 'Team Content',
                'name' => 'about_team_content',
                'type' => 'wysiwyg',
                'tabs' => 'all',
                'toolbar' => 'full',
            ),
            array(
                'key' => 'field_about_team_features',
                'label' => 'Team Features',
                'name' => 'about_team_features',
                'type' => 'repeater',
                'min' => 0,
                'max' => 3,
                'layout' => 'table',
                'button_label' => 'Add Feature',
                'sub_fields' => array(
                    array(
                        'key' => 'field_about_team_feature_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-user-check',
                        'ui' => 1,
                        'wrapper' => array('width' => '30'),
                    ),
                    array(
                        'key' => 'field_about_team_feature_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'wrapper' => array('width' => '70'),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-about.php',
                ),
            ),
        ),
        'style' => 'default',
        'position' => 'normal',
    ));

    // ==========================================
    // CONTACT PAGE
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_contact_page',
        'title' => 'Contact Page Content',
        'fields' => array(
            // Contact Form Tab
            array(
                'key' => 'field_contact_tab',
                'label' => 'Contact Form',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_contact_form_title',
                'label' => 'Form Title',
                'name' => 'contact_form_title',
                'type' => 'text',
                'default_value' => 'Send Us a Message',
            ),
            array(
                'key' => 'field_contact_form_description',
                'label' => 'Form Description',
                'name' => 'contact_form_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Fill out the form below and we\'ll get back to you as soon as possible.',
            ),
            array(
                'key' => 'field_contact_form_shortcode',
                'label' => 'Contact Form 7 Shortcode',
                'name' => 'contact_form_shortcode',
                'type' => 'text',
                'instructions' => 'Enter the Contact Form 7 shortcode for the contact form',
            ),
            // Quote Form Tab
            array(
                'key' => 'field_quote_tab',
                'label' => 'Quote Form',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_quote_form_title',
                'label' => 'Form Title',
                'name' => 'quote_form_title',
                'type' => 'text',
                'default_value' => 'Request a Quote',
            ),
            array(
                'key' => 'field_quote_form_description',
                'label' => 'Form Description',
                'name' => 'quote_form_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Need calibration, repair, or sales services? Get a detailed quote tailored to your needs.',
            ),
            array(
                'key' => 'field_quote_form_shortcode',
                'label' => 'Quote Form 7 Shortcode',
                'name' => 'quote_form_shortcode',
                'type' => 'text',
                'instructions' => 'Enter the Contact Form 7 shortcode for the quote form',
            ),
            // Contact Info Tab
            array(
                'key' => 'field_contact_info_tab',
                'label' => 'Contact Information',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_contact_info_title',
                'label' => 'Section Title',
                'name' => 'contact_info_title',
                'type' => 'text',
                'default_value' => 'Contact Information',
            ),
            array(
                'key' => 'field_contact_cert_title',
                'label' => 'Certifications Title',
                'name' => 'contact_cert_title',
                'type' => 'text',
                'default_value' => 'Our Certifications',
            ),
            array(
                'key' => 'field_contact_certifications',
                'label' => 'Certification Badges',
                'name' => 'contact_certifications',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'table',
                'button_label' => 'Add Badge',
                'sub_fields' => array(
                    array(
                        'key' => 'field_contact_cert_text',
                        'label' => 'Badge Text',
                        'name' => 'text',
                        'type' => 'text',
                    ),
                ),
            ),
            // Map Section Tab
            array(
                'key' => 'field_contact_map_tab',
                'label' => 'Map Section',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_contact_map_title',
                'label' => 'Section Title',
                'name' => 'contact_map_title',
                'type' => 'text',
                'default_value' => 'Our Location',
            ),
            array(
                'key' => 'field_contact_map_embed',
                'label' => 'Google Maps Embed Code',
                'name' => 'contact_map_embed',
                'type' => 'textarea',
                'rows' => 4,
                'instructions' => 'Paste the Google Maps embed iframe code here',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-contact.php',
                ),
            ),
        ),
        'style' => 'default',
        'position' => 'normal',
    ));

    // ==========================================
    // SERVICES PAGE
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_services_page',
        'title' => 'Services Page Content',
        'fields' => array(
            
            // Service Areas Section Tab
            array(
                'key' => 'field_services_areas_tab',
                'label' => 'Service Areas Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_services_areas_title',
                'label' => 'Section Title',
                'name' => 'services_areas_title',
                'type' => 'text',
                'default_value' => 'Whatever Your Needs',
            ),
            array(
                'key' => 'field_services_areas_description',
                'label' => 'Section Description',
                'name' => 'services_areas_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'We handle all types of precision measuring equipment',
            ),
            array(
                'key' => 'field_services_areas_items',
                'label' => 'Service Areas',
                'name' => 'services_areas_items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Service Area',
                'sub_fields' => array(
                    array(
                        'key' => 'field_service_area_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-ruler',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_service_area_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_service_area_items',
                        'label' => 'Equipment List',
                        'name' => 'items',
                        'type' => 'repeater',
                        'min' => 1,
                        'layout' => 'table',
                        'button_label' => 'Add Equipment Item',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_service_area_item_text',
                                'label' => 'Equipment Name',
                                'name' => 'text',
                                'type' => 'text',
                                'required' => 1,
                            ),
                        ),
                    ),
                ),
            ),
            
            // Process Section Tab
            array(
                'key' => 'field_services_process_tab',
                'label' => 'Process Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_services_process_title',
                'label' => 'Section Title',
                'name' => 'services_process_title',
                'type' => 'text',
                'default_value' => 'Our Process',
            ),
            array(
                'key' => 'field_services_process_description',
                'label' => 'Section Description',
                'name' => 'services_process_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Simple, professional, and reliable',
            ),
            array(
                'key' => 'field_services_process_steps',
                'label' => 'Process Steps',
                'name' => 'services_process_steps',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Process Step',
                'sub_fields' => array(
                    array(
                        'key' => 'field_process_step_number',
                        'label' => 'Step Number',
                        'name' => 'number',
                        'type' => 'number',
                        'default_value' => 1,
                        'min' => 1,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_process_step_title',
                        'label' => 'Step Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_process_step_description',
                        'label' => 'Step Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                        'required' => 1,
                    ),
                ),
            ),
            
            // FAQ Section Tab
            array(
                'key' => 'field_services_faq_tab',
                'label' => 'FAQ Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_services_faq_title',
                'label' => 'FAQ Section Title',
                'name' => 'services_faq_title',
                'type' => 'text',
                'default_value' => 'Calibration Services FAQs',
            ),
            array(
                'key' => 'field_services_faq_items',
                'label' => 'FAQ Items',
                'name' => 'services_faq_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add FAQ',
                'sub_fields' => array(
                    array(
                        'key' => 'field_faq_question',
                        'label' => 'Question',
                        'name' => 'question',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_faq_answer',
                        'label' => 'Answer',
                        'name' => 'answer',
                        'type' => 'textarea',
                        'rows' => 4,
                        'required' => 1,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-services.php',
                ),
            ),
        ),
        'style' => 'default',
        'position' => 'normal',
    ));

});


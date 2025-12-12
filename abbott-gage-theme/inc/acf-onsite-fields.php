<?php
/**
 * ACF Field Groups for Onsite Page
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
 * Register ACF Field Groups for Onsite Page
 */
add_action('acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }
    
    // Get icon choices function from main ACF fields file
    $icon_choices = function_exists( 'abbott_gage_get_icon_choices' ) ? abbott_gage_get_icon_choices() : array();

    // ==========================================
    // ONSITE PAGE
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_onsite_page',
        'title' => 'Onsite Page Content',
        'fields' => array(
            
            // Main Content Section Tab
            array(
                'key' => 'field_onsite_main_tab',
                'label' => 'Main Content Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_onsite_main_title',
                'label' => 'Section Title',
                'name' => 'onsite_main_title',
                'type' => 'text',
                'default_value' => 'Convenient On-Site Service',
            ),
            array(
                'key' => 'field_onsite_lead_text',
                'label' => 'Lead Paragraph',
                'name' => 'onsite_lead_text',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'We bring our state-of-the-art equipment and experienced technicians directly to your facility for professional calibration services.',
            ),
            array(
                'key' => 'field_onsite_description',
                'label' => 'Description Paragraph',
                'name' => 'onsite_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'On-site calibrations by Abbott Gage, Inc. range from basic micrometers and indicators to surface plates and pressure equipment. Our mobile calibration service minimizes equipment downtime and keeps your operations running smoothly.',
            ),
            
            // Benefits Section
            array(
                'key' => 'field_onsite_benefits_title',
                'label' => 'Benefits Section Title',
                'name' => 'onsite_benefits_title',
                'type' => 'text',
                'default_value' => 'On-Site Advantages',
            ),
            array(
                'key' => 'field_onsite_benefits_items',
                'label' => 'Benefits',
                'name' => 'onsite_benefits_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Benefit',
                'sub_fields' => array(
                    array(
                        'key' => 'field_onsite_benefit_icon',
                        'label' => 'Benefit Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-shipping-fast',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_onsite_benefit_title',
                        'label' => 'Benefit Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_onsite_benefit_description',
                        'label' => 'Benefit Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                        'required' => 1,
                    ),
                ),
            ),
            
            // Services Include Section
            array(
                'key' => 'field_onsite_services_title',
                'label' => 'Services Include Section Title',
                'name' => 'onsite_services_title',
                'type' => 'text',
                'default_value' => 'On-Site Calibration Services Include',
            ),
            array(
                'key' => 'field_onsite_services_columns',
                'label' => 'Service Columns',
                'name' => 'onsite_services_columns',
                'type' => 'repeater',
                'min' => 1,
                'max' => 2,
                'layout' => 'block',
                'button_label' => 'Add Service Column',
                'sub_fields' => array(
                    array(
                        'key' => 'field_onsite_service_column_items',
                        'label' => 'Service Items',
                        'name' => 'items',
                        'type' => 'repeater',
                        'min' => 1,
                        'layout' => 'table',
                        'button_label' => 'Add Service Item',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_onsite_service_item_text',
                                'label' => 'Service Name',
                                'name' => 'text',
                                'type' => 'text',
                                'required' => 1,
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-onsite.php',
                ),
            ),
        ),
        'style' => 'default',
        'position' => 'normal',
    ));

});


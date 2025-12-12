<?php
/**
 * ACF Field Groups for Manufacturers Page
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
 * Register ACF Field Groups for Manufacturers Page
 */
add_action('acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }
    
    // Get icon choices function from main ACF fields file
    $icon_choices = function_exists( 'abbott_gage_get_icon_choices' ) ? abbott_gage_get_icon_choices() : array();

    // ==========================================
    // MANUFACTURERS PAGE
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_manufacturers_page',
        'title' => 'Manufacturers Page Content',
        'fields' => array(
            
            // All Manufacturers Grid Section Tab
            array(
                'key' => 'field_manufacturers_grid_tab',
                'label' => 'All Manufacturers Grid',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_manufacturers_title',
                'label' => 'Section Title',
                'name' => 'manufacturers_title',
                'type' => 'text',
                'default_value' => 'Authorized Distributor & Manufacturing Partners',
            ),
            array(
                'key' => 'field_manufacturers_description',
                'label' => 'Section Description',
                'name' => 'manufacturers_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'We proudly service these manufacturers and many more',
            ),
            array(
                'key' => 'field_manufacturers_items',
                'label' => 'Manufacturers',
                'name' => 'manufacturers_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Manufacturer',
                'sub_fields' => array(
                    array(
                        'key' => 'field_manufacturer_logo',
                        'label' => 'Manufacturer Logo',
                        'name' => 'logo',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'required' => 1,
                        'instructions' => 'Upload the manufacturer logo image',
                    ),
                    array(
                        'key' => 'field_manufacturer_name',
                        'label' => 'Manufacturer Name',
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_manufacturer_authorized',
                        'label' => 'Factory Authorized',
                        'name' => 'authorized',
                        'type' => 'true_false',
                        'ui' => 1,
                        'message' => 'Mark as factory authorized',
                        'default_value' => 0,
                    ),
                ),
            ),
            array(
                'key' => 'field_manufacturers_button',
                'label' => 'View All Button',
                'name' => 'manufacturers_button',
                'type' => 'link',
                'return_format' => 'array',
                'instructions' => 'Button shown on other pages linking to this manufacturers page (not shown on the manufacturers page itself)',
            ),
            
            // Additional Partners Section Tab
            array(
                'key' => 'field_manufacturers_partners_tab',
                'label' => 'Additional Partners Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_manufacturers_partners_title',
                'label' => 'Section Title',
                'name' => 'manufacturers_partners_title',
                'type' => 'text',
                'default_value' => 'Additional Manufacturing Partners',
            ),
            array(
                'key' => 'field_manufacturers_partners_description',
                'label' => 'Section Description',
                'name' => 'manufacturers_partners_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'We represent and service products from these quality manufacturers',
            ),
            array(
                'key' => 'field_manufacturers_partners_items',
                'label' => 'Partners',
                'name' => 'manufacturers_partners_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Partner',
                'sub_fields' => array(
                    array(
                        'key' => 'field_partner_logo',
                        'label' => 'Partner Logo',
                        'name' => 'logo',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'required' => 1,
                        'instructions' => 'Upload the manufacturer logo image',
                    ),
                    array(
                        'key' => 'field_partner_name',
                        'label' => 'Partner Name',
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_partner_description',
                        'label' => 'Partner Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
            
            // Partner Benefits Section Tab
            array(
                'key' => 'field_manufacturers_benefits_tab',
                'label' => 'Partner Benefits Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_manufacturers_benefits_title',
                'label' => 'Section Title',
                'name' => 'manufacturers_benefits_title',
                'type' => 'text',
                'default_value' => 'Benefits of Our Manufacturer Partnerships',
            ),
            array(
                'key' => 'field_manufacturers_benefits_items',
                'label' => 'Benefits',
                'name' => 'manufacturers_benefits_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Benefit',
                'sub_fields' => array(
                    array(
                        'key' => 'field_benefit_icon',
                        'label' => 'Benefit Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-certificate',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_benefit_title',
                        'label' => 'Benefit Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_benefit_description',
                        'label' => 'Benefit Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
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
                    'value' => 'page-manufacturers.php',
                ),
            ),
        ),
        'style' => 'default',
        'position' => 'normal',
    ));

});


<?php
/**
 * ACF Field Groups for Repairs Page
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
 * Register ACF Field Groups for Repairs Page
 */
add_action('acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }
    
    // Get icon choices function from main ACF fields file
    $icon_choices = function_exists( 'abbott_gage_get_icon_choices' ) ? abbott_gage_get_icon_choices() : array();

    // ==========================================
    // REPAIRS PAGE
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_repairs_page',
        'title' => 'Repairs Page Content',
        'fields' => array(
            
            // Repair Services Include Section Tab
            array(
                'key' => 'field_repairs_services_tab',
                'label' => 'Repair Services Include',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_repairs_services_title',
                'label' => 'Section Title',
                'name' => 'repairs_services_title',
                'type' => 'text',
                'default_value' => 'Repair Services Include',
            ),
            array(
                'key' => 'field_repairs_services_columns',
                'label' => 'Service Columns',
                'name' => 'repairs_services_columns',
                'type' => 'repeater',
                'min' => 1,
                'max' => 2,
                'layout' => 'block',
                'button_label' => 'Add Service Column',
                'sub_fields' => array(
                    array(
                        'key' => 'field_repairs_service_column_items',
                        'label' => 'Service Items',
                        'name' => 'items',
                        'type' => 'repeater',
                        'min' => 1,
                        'layout' => 'table',
                        'button_label' => 'Add Service Item',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_repairs_service_item_text',
                                'label' => 'Service Name',
                                'name' => 'text',
                                'type' => 'text',
                                'required' => 1,
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_repairs_services_callout',
                'label' => 'Info Callout Text',
                'name' => 'repairs_services_callout',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'All repaired equipment is calibrated before return.',
            ),
            
            // Repair Process Section Tab
            array(
                'key' => 'field_repairs_process_tab',
                'label' => 'Repair Process',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_repairs_process_title',
                'label' => 'Section Title',
                'name' => 'repairs_process_title',
                'type' => 'text',
                'default_value' => 'Our Repair Process',
            ),
            array(
                'key' => 'field_repairs_process_steps',
                'label' => 'Process Steps',
                'name' => 'repairs_process_steps',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Process Step',
                'sub_fields' => array(
                    array(
                        'key' => 'field_repairs_process_step_number',
                        'label' => 'Step Number',
                        'name' => 'number',
                        'type' => 'number',
                        'default_value' => 1,
                        'min' => 1,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_repairs_process_step_title',
                        'label' => 'Step Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_repairs_process_step_description',
                        'label' => 'Step Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                        'required' => 1,
                    ),
                ),
            ),
            array(
                'key' => 'field_repairs_turnaround_label',
                'label' => 'Turnaround Time Label',
                'name' => 'repairs_turnaround_label',
                'type' => 'text',
                'default_value' => 'Average Turnaround:',
            ),
            array(
                'key' => 'field_repairs_turnaround_text',
                'label' => 'Turnaround Time Text',
                'name' => 'repairs_turnaround_text',
                'type' => 'text',
                'default_value' => '5-10 business days depending on parts availability',
            ),
            
            // Brands We Service Section Tab
            array(
                'key' => 'field_repairs_brands_tab',
                'label' => 'Brands We Service',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_repairs_brands_title',
                'label' => 'Section Title',
                'name' => 'repairs_brands_title',
                'type' => 'text',
                'default_value' => 'Brands We Service',
            ),
            array(
                'key' => 'field_repairs_brands_items',
                'label' => 'Brand Names',
                'name' => 'repairs_brands_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'table',
                'button_label' => 'Add Brand',
                'sub_fields' => array(
                    array(
                        'key' => 'field_repairs_brand_name',
                        'label' => 'Brand Name',
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 1,
                    ),
                ),
            ),
            array(
                'key' => 'field_repairs_brands_footer',
                'label' => 'Footer Text',
                'name' => 'repairs_brands_footer',
                'type' => 'text',
                'default_value' => 'And many other major brands',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-repairs.php',
                ),
            ),
        ),
        'style' => 'default',
        'position' => 'normal',
    ));

});


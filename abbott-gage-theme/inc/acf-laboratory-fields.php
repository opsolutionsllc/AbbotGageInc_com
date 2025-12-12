<?php
/**
 * ACF Field Groups for Laboratory Page
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
 * Register ACF Field Groups for Laboratory Page
 */
add_action('acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }
    
    // Get icon choices function from main ACF fields file
    $icon_choices = function_exists( 'abbott_gage_get_icon_choices' ) ? abbott_gage_get_icon_choices() : array();

    // ==========================================
    // LABORATORY PAGE
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_laboratory_page',
        'title' => 'Laboratory Page Content',
        'fields' => array(
            
            // Main Content Section Tab
            array(
                'key' => 'field_laboratory_main_tab',
                'label' => 'Main Content Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_laboratory_main_title',
                'label' => 'Section Title',
                'name' => 'laboratory_main_title',
                'type' => 'text',
                'default_value' => 'Calibration & Certification Process',
            ),
            array(
                'key' => 'field_laboratory_lead_text',
                'label' => 'Lead Paragraph',
                'name' => 'laboratory_lead_text',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'We have the tools necessary to work on a wide range of customers with various needs. Our experienced technical staff and trained technicians will be glad to help you through the certification process.',
            ),
            array(
                'key' => 'field_laboratory_description',
                'label' => 'Description Paragraph',
                'name' => 'laboratory_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Take the guesswork out of the certification process and call Abbott Gage for your calibration needs. Laboratory calibrations by Abbott Gage, Inc. range from basic micrometers and indicators to surface plates and pressure equipment.',
            ),
            
            // Equipment Categories Section
            array(
                'key' => 'field_laboratory_equipment_title',
                'label' => 'Equipment Section Title',
                'name' => 'laboratory_equipment_title',
                'type' => 'text',
                'default_value' => 'What We Calibrate',
            ),
            array(
                'key' => 'field_laboratory_equipment_categories',
                'label' => 'Equipment Categories',
                'name' => 'laboratory_equipment_categories',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Equipment Category',
                'sub_fields' => array(
                    array(
                        'key' => 'field_equipment_category_title',
                        'label' => 'Category Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_equipment_category_items',
                        'label' => 'Equipment Items',
                        'name' => 'items',
                        'type' => 'repeater',
                        'min' => 1,
                        'layout' => 'table',
                        'button_label' => 'Add Equipment Item',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_equipment_item_text',
                                'label' => 'Equipment Name',
                                'name' => 'text',
                                'type' => 'text',
                                'required' => 1,
                            ),
                        ),
                    ),
                ),
            ),
            
            // Benefits Section
            array(
                'key' => 'field_laboratory_benefits_title',
                'label' => 'Benefits Section Title',
                'name' => 'laboratory_benefits_title',
                'type' => 'text',
                'default_value' => 'Laboratory Calibration Benefits',
            ),
            array(
                'key' => 'field_laboratory_benefits_items',
                'label' => 'Benefits',
                'name' => 'laboratory_benefits_items',
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
            
            // FAQ Section Tab
            array(
                'key' => 'field_laboratory_faq_tab',
                'label' => 'FAQ Section',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_laboratory_faq_title',
                'label' => 'FAQ Section Title',
                'name' => 'laboratory_faq_title',
                'type' => 'text',
                'default_value' => 'Laboratory Calibration FAQs',
            ),
            array(
                'key' => 'field_laboratory_faq_items',
                'label' => 'FAQ Items',
                'name' => 'laboratory_faq_items',
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
                    'value' => 'page-laboratory.php',
                ),
            ),
        ),
        'style' => 'default',
        'position' => 'normal',
    ));

});


<?php
/**
 * ACF Field Groups for Sales Page
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
 * Register ACF Field Groups for Sales Page
 */
add_action('acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }
    
    // Get icon choices function from main ACF fields file
    $icon_choices = function_exists( 'abbott_gage_get_icon_choices' ) ? abbott_gage_get_icon_choices() : array();

    // ==========================================
    // SALES PAGE
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_sales_page',
        'title' => 'Sales Page Content',
        'fields' => array(
            
            // Product Categories Section Tab
            array(
                'key' => 'field_sales_categories_tab',
                'label' => 'Product Categories',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_sales_categories_title',
                'label' => 'Section Title',
                'name' => 'sales_categories_title',
                'type' => 'text',
                'default_value' => 'Product Categories',
            ),
            array(
                'key' => 'field_sales_categories_description',
                'label' => 'Section Description',
                'name' => 'sales_categories_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Complete range of precision measuring tools and equipment',
            ),
            array(
                'key' => 'field_sales_categories_items',
                'label' => 'Product Categories',
                'name' => 'sales_categories_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Product Category',
                'sub_fields' => array(
                    array(
                        'key' => 'field_sales_category_icon',
                        'label' => 'Category Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-ruler',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_sales_category_title',
                        'label' => 'Category Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_sales_category_items',
                        'label' => 'Product Items',
                        'name' => 'items',
                        'type' => 'repeater',
                        'min' => 1,
                        'layout' => 'table',
                        'button_label' => 'Add Product Item',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_sales_category_item_text',
                                'label' => 'Product Name',
                                'name' => 'text',
                                'type' => 'text',
                                'required' => 1,
                            ),
                        ),
                    ),
                ),
            ),
            
            // Why Buy From Us Section Tab
            array(
                'key' => 'field_sales_why_buy_tab',
                'label' => 'Why Buy From Us',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_sales_why_buy_title',
                'label' => 'Section Title',
                'name' => 'sales_why_buy_title',
                'type' => 'text',
                'default_value' => 'Why Buy From Abbott Gage?',
            ),
            array(
                'key' => 'field_sales_why_buy_items',
                'label' => 'Benefits',
                'name' => 'sales_why_buy_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Benefit',
                'sub_fields' => array(
                    array(
                        'key' => 'field_sales_benefit_icon',
                        'label' => 'Benefit Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-certificate',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_sales_benefit_title',
                        'label' => 'Benefit Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_sales_benefit_description',
                        'label' => 'Benefit Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                        'required' => 1,
                    ),
                ),
            ),
            
            // Featured Manufacturers Section Tab
            array(
                'key' => 'field_sales_manufacturers_tab',
                'label' => 'Featured Manufacturers',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_sales_manufacturers_title',
                'label' => 'Section Title',
                'name' => 'sales_manufacturers_title',
                'type' => 'text',
                'default_value' => 'Authorized Distributor & Manufacturing Partners',
            ),
            array(
                'key' => 'field_sales_manufacturers_description',
                'label' => 'Section Description',
                'name' => 'sales_manufacturers_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'We proudly service these manufacturers and many more',
            ),
            array(
                'key' => 'field_sales_manufacturers_items',
                'label' => 'Manufacturers',
                'name' => 'sales_manufacturers_items',
                'type' => 'repeater',
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Manufacturer',
                'sub_fields' => array(
                    array(
                        'key' => 'field_sales_manufacturer_logo',
                        'label' => 'Manufacturer Logo',
                        'name' => 'logo',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'required' => 1,
                        'instructions' => 'Upload the manufacturer logo image',
                    ),
                    array(
                        'key' => 'field_sales_manufacturer_name',
                        'label' => 'Manufacturer Name',
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_sales_manufacturer_authorized',
                        'label' => 'Factory Authorized',
                        'name' => 'authorized',
                        'type' => 'true_false',
                        'ui' => 1,
                        'message' => 'Mark as factory authorized',
                        'default_value' => 0,
                    ),
                ),
            ),
            
            // Ordering Process Section Tab
            array(
                'key' => 'field_sales_ordering_tab',
                'label' => 'Ordering Process',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_sales_ordering_title',
                'label' => 'Section Title',
                'name' => 'sales_ordering_title',
                'type' => 'text',
                'default_value' => 'How to Order',
            ),
            array(
                'key' => 'field_sales_ordering_description',
                'label' => 'Section Description',
                'name' => 'sales_ordering_description',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Simple and straightforward ordering process',
            ),
            array(
                'key' => 'field_sales_ordering_steps',
                'label' => 'Ordering Steps',
                'name' => 'sales_ordering_steps',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Ordering Step',
                'sub_fields' => array(
                    array(
                        'key' => 'field_sales_ordering_step_icon',
                        'label' => 'Step Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-phone-alt',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_sales_ordering_step_title',
                        'label' => 'Step Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_sales_ordering_step_description',
                        'label' => 'Step Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                        'required' => 1,
                    ),
                ),
            ),
            array(
                'key' => 'field_sales_payment_title',
                'label' => 'Payment Methods Title',
                'name' => 'sales_payment_title',
                'type' => 'text',
                'default_value' => 'Payment Methods Accepted',
            ),
            array(
                'key' => 'field_sales_payment_image',
                'label' => 'Payment Methods Image',
                'name' => 'sales_payment_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'instructions' => 'Upload image showing accepted payment methods (e.g., credit cards)',
            ),
            array(
                'key' => 'field_sales_payment_image_alt',
                'label' => 'Payment Image Alt Text',
                'name' => 'sales_payment_image_alt',
                'type' => 'text',
                'default_value' => 'Accepted Payment Methods: Visa, Mastercard, Discover, American Express',
            ),
            array(
                'key' => 'field_sales_payment_footer',
                'label' => 'Payment Footer Text',
                'name' => 'sales_payment_footer',
                'type' => 'text',
                'default_value' => 'NET 30 terms available for approved accounts',
            ),
            
            // Special Offer Section Tab
            array(
                'key' => 'field_sales_special_offer_tab',
                'label' => 'Special Offers',
                'name' => '',
                'type' => 'tab',
                'placement' => 'left',
            ),
            array(
                'key' => 'field_sales_promo_cards',
                'label' => 'Promo Cards',
                'name' => 'sales_promo_cards',
                'type' => 'repeater',
                'min' => 0,
                'max' => 2,
                'layout' => 'block',
                'button_label' => 'Add Promo Card',
                'sub_fields' => array(
                    array(
                        'key' => 'field_sales_promo_icon',
                        'label' => 'Card Icon',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => $icon_choices,
                        'default_value' => 'fas fa-certificate',
                        'required' => 1,
                        'ui' => 1,
                    ),
                    array(
                        'key' => 'field_sales_promo_title',
                        'label' => 'Card Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_sales_promo_text',
                        'label' => 'Card Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'rows' => 3,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_sales_promo_button_text',
                        'label' => 'Button Text',
                        'name' => 'button_text',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_sales_promo_button_url',
                        'label' => 'Button URL',
                        'name' => 'button_url',
                        'type' => 'text',
                        'default_value' => '/contact#quote',
                    ),
                    array(
                        'key' => 'field_sales_promo_phone_links',
                        'label' => 'Show Phone Links',
                        'name' => 'show_phone_links',
                        'type' => 'true_false',
                        'ui' => 1,
                        'default_value' => 0,
                        'instructions' => 'Show phone number links instead of button',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-sales.php',
                ),
            ),
        ),
        'style' => 'default',
        'position' => 'normal',
    ));

});


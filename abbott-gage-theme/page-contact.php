<?php
/**
 * Template Name: Contact Us
 * Template for contact page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();

// Get ACF fields
$contact_form_title = get_field('contact_form_title') ?: 'Send Us a Message';
$contact_form_description = get_field('contact_form_description') ?: 'Fill out the form below and we\'ll get back to you as soon as possible.';
$contact_form_shortcode = get_field('contact_form_shortcode');
$contact_info_title = get_field('contact_info_title') ?: 'Contact Information';
$contact_cert_title = get_field('contact_cert_title') ?: 'Our Certifications';
$contact_certifications = get_field('contact_certifications');
$contact_map_title = get_field('contact_map_title') ?: 'Our Location';
$contact_map_embed = get_field('contact_map_embed');

// Get global settings
$company_name = get_field('company_name', 'option') ?: 'Abbott Gage, Inc.';
$phone_primary = get_field('phone_primary', 'option') ?: '(256) 378-3286';
$phone_toll_free = get_field('phone_toll_free', 'option') ?: '1-800-481-4243';
$fax = get_field('fax', 'option') ?: '(256) 378-3287';
$email = get_field('email', 'option') ?: 'info@abbottgageinc.com';
$address_street = get_field('address_street', 'option') ?: '40 Industrial Park';
$address_city = get_field('address_city', 'option') ?: 'Childersburg';
$address_state = get_field('address_state', 'option') ?: 'AL';
$address_zip = get_field('address_zip', 'option') ?: '35044';
$business_hours = get_field('business_hours', 'option');
?>

<main id="main" class="site-main contact-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Get in touch with our team for calibration, repair, or sales inquiries', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Contact Content -->
    <section class="section">
        <div class="container">
            <div class="contact-grid">
                
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2><?php echo esc_html( $contact_form_title ); ?></h2>
                    <p><?php echo esc_html( $contact_form_description ); ?></p>
                    
                    <?php
                    if ( $contact_form_shortcode ) {
                        echo do_shortcode( $contact_form_shortcode );
                    } else {
                        echo do_shortcode( '[contact-form-7 id="81b4f8c" title="Contact Form"]' );
                    }
                    ?>
                </div>
                
                <!-- Contact Information -->
                <div class="contact-info-wrapper">
                    
                    <div class="contact-info-card">
                        <h3><?php echo esc_html( $contact_info_title ); ?></h3>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Address', 'abbott-gage' ); ?></h4>
                                <p>
                                    <?php echo esc_html( $company_name ); ?><br>
                                    <?php echo esc_html( $address_street ); ?><br>
                                    <?php echo esc_html( $address_city ); ?>, <?php echo esc_html( $address_state ); ?> <?php echo esc_html( $address_zip ); ?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Phone', 'abbott-gage' ); ?></h4>
                                <p>
                                    <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone_primary ) ); ?>"><?php echo esc_html( $phone_primary ); ?></a><br>
                                    <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone_toll_free ) ); ?>"><?php echo esc_html( $phone_toll_free ); ?> (Gage)</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-fax"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Fax', 'abbott-gage' ); ?></h4>
                                <p><?php echo esc_html( $fax ); ?></p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Email', 'abbott-gage' ); ?></h4>
                                <p><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Business Hours', 'abbott-gage' ); ?></h4>
                                <p>
                                    <?php 
                                    if ( $business_hours ) {
                                        echo nl2br( esc_html( $business_hours ) );
                                    } else {
                                        esc_html_e( 'Monday - Friday', 'abbott-gage' );
                                        echo '<br>';
                                        esc_html_e( '8:00 AM - 5:00 PM CST', 'abbott-gage' );
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="certifications-badges">
                        <h4><?php echo esc_html( $contact_cert_title ); ?></h4>
                        <div class="cert-badges">
                            <?php if ( $contact_certifications ) : ?>
                                <?php foreach ( $contact_certifications as $cert ) : ?>
                                    <span class="cert-badge"><?php echo esc_html( $cert['text'] ); ?></span>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <span class="cert-badge">ISO 9001:2015</span>
                                <span class="cert-badge">WBENC</span>
                                <span class="cert-badge">WOSB</span>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h3 class="text-center"><?php echo esc_html( $contact_map_title ); ?></h3>
            <div class="map-placeholder">
                <?php if ( $contact_map_embed ) : ?>
                    <?php echo wp_kses_post( $contact_map_embed ); ?>
                <?php else : ?>
                    <p><?php esc_html_e( 'Google Maps embed can be added here', 'abbott-gage' ); ?></p>
                    <p><small><?php echo esc_html( $address_street . ', ' . $address_city . ', ' . $address_state . ' ' . $address_zip ); ?></small></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
</main>

<?php
get_footer();

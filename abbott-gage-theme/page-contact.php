<?php
/**
 * Template Name: Contact Us
 * Template for contact page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
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
                    <h2><?php esc_html_e( 'Send Us a Message', 'abbott-gage' ); ?></h2>
                    <p><?php esc_html_e( 'Fill out the form below and we\'ll get back to you as soon as possible.', 'abbott-gage' ); ?></p>
                    
                    <?php
                    echo do_shortcode( '[contact-form-7 id="81b4f8c" title="Contact Form"]' );
                    ?>
                </div>
                
                <!-- Contact Information -->
                <div class="contact-info-wrapper">
                    
                    <div class="contact-info-card">
                        <h3><?php esc_html_e( 'Contact Information', 'abbott-gage' ); ?></h3>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Address', 'abbott-gage' ); ?></h4>
                                <p>
                                    Abbott Gage, Inc.<br>
                                    40 Industrial Park<br>
                                    Childersburg, AL 35044
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
                                    <a href="tel:+12563783286">(256) 378-3286</a><br>
                                    <a href="tel:+18004814243">1-800-481-4243 (Gage)</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-fax"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Fax', 'abbott-gage' ); ?></h4>
                                <p>(256) 378-3287</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Email', 'abbott-gage' ); ?></h4>
                                <p><a href="mailto:info@abbottgageinc.com">info@abbottgageinc.com</a></p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <h4><?php esc_html_e( 'Business Hours', 'abbott-gage' ); ?></h4>
                                <p>
                                    <?php esc_html_e( 'Monday - Friday', 'abbott-gage' ); ?><br>
                                    <?php esc_html_e( '8:00 AM - 5:00 PM CST', 'abbott-gage' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="certifications-badges">
                        <h4><?php esc_html_e( 'Our Certifications', 'abbott-gage' ); ?></h4>
                        <div class="cert-badges">
                            <span class="cert-badge">ISO 9001:2015</span>
                            <span class="cert-badge">WBENC</span>
                            <span class="cert-badge">WOSB</span>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Map Section (Optional - can be added with Google Maps embed) -->
    <section class="map-section">
        <div class="container">
            <h3 class="text-center"><?php esc_html_e( 'Our Location', 'abbott-gage' ); ?></h3>
            <div class="map-placeholder">
                <p><?php esc_html_e( 'Google Maps embed can be added here', 'abbott-gage' ); ?></p>
                <p><small><?php esc_html_e( '40 Industrial Park, Childersburg, AL 35044', 'abbott-gage' ); ?></small></p>
            </div>
        </div>
    </section>
    
</main>

<?php
get_footer();


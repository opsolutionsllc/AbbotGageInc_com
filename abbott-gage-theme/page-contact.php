<?php
/**
 * Template Name: Contact Us
 * Template for contact page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: calibration services quote
 * Alternative Keyphrases: contact calibration company, request calibration service
 * 
 * SEO Title: Contact Abbott Gage | Request Calibration Quote | Get Expert Assistance
 * 
 * Meta Description: Contact Abbott Gage Inc for precision calibration services. Request a quote, 
 * schedule service, or speak with our expert team. Phone, email, or online form available.
 */

get_header();

// Get ACF fields
$contact_form_title = get_field('contact_form_title') ?: 'Send Us a Message';
$contact_form_description = get_field('contact_form_description') ?: 'Fill out the form below and we\'ll get back to you as soon as possible.';
$contact_form_shortcode = get_field('contact_form_shortcode');
$quote_form_title = get_field('quote_form_title') ?: 'Request a Quote';
$quote_form_description = get_field('quote_form_description') ?: 'Need calibration, repair, or sales services? Get a detailed quote tailored to your needs.';
$quote_form_shortcode = get_field('quote_form_shortcode');
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
$email = get_field('email', 'option') ?: 'hello@abbottgageinc.com';
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
                
                <!-- Forms Wrapper with Tabs -->
                <div class="contact-form-wrapper">
                    
                    <!-- Form Tabs -->
                    <div class="form-tabs">
                        <button class="form-tab active" data-tab="contact">
                            <i class="fas fa-envelope"></i>
                            <span><?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?></span>
                        </button>
                        <button class="form-tab" data-tab="quote">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span><?php esc_html_e( 'Get a Quote', 'abbott-gage' ); ?></span>
                        </button>
                    </div>
                    
                    <!-- Contact Form Tab -->
                    <div class="form-content active" id="contact-form-content">
                        <div class="form-header">
                            <h2><?php echo esc_html( $contact_form_title ); ?></h2>
                            <p><?php echo esc_html( $contact_form_description ); ?></p>
                        </div>
                        
                        <?php
                        if ( $contact_form_shortcode ) {
                            echo do_shortcode( $contact_form_shortcode );
                        } else {
                            echo do_shortcode( '[contact-form-7 id="81b4f8c" title="Contact Form"]' );
                        }
                        ?>
                    </div>
                    
                    <!-- Quote Form Tab -->
                    <div class="form-content" id="quote-form-content">
                        <div class="form-header">
                            <h2><?php echo esc_html( $quote_form_title ); ?></h2>
                            <p><?php echo esc_html( $quote_form_description ); ?></p>
                        </div>
                        
                        <?php
                        if ( $quote_form_shortcode ) {
                            echo do_shortcode( $quote_form_shortcode );
                        }
                        ?>
                    </div>
                    
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
                                        esc_html_e( '8:30 AM - 4:30 PM CST', 'abbott-gage' );
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
                    <?php 
                    // Allow iframe in output for Google Maps
                    $allowed_html = array(
                        'iframe' => array(
                            'src' => array(),
                            'width' => array(),
                            'height' => array(),
                            'style' => array(),
                            'allowfullscreen' => array(),
                            'loading' => array(),
                            'referrerpolicy' => array(),
                            'frameborder' => array(),
                        ),
                    );
                    echo wp_kses( $contact_map_embed, $allowed_html );
                    ?>
                <?php else : ?>
                    <!-- Debug: Map embed field is empty -->
                    <p><?php esc_html_e( 'Google Maps embed can be added here', 'abbott-gage' ); ?></p>
                    <p><small><?php echo esc_html( $address_street . ', ' . $address_city . ', ' . $address_state . ' ' . $address_zip ); ?></small></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var formTabs = document.querySelectorAll('.form-tab');
    var formContents = document.querySelectorAll('.form-content');
    
    // ============================================
    // TAB SWITCHING FUNCTIONALITY
    // ============================================
    function switchTab(targetTab) {
        formTabs.forEach(function(t) { t.classList.remove('active'); });
        formContents.forEach(function(c) { c.classList.remove('active'); });
        
        var targetTabButton = document.querySelector('.form-tab[data-tab="' + targetTab + '"]');
        var targetContent = document.getElementById(targetTab + '-form-content');
        
        if (targetTabButton && targetContent) {
            targetTabButton.classList.add('active');
            targetContent.classList.add('active');
            
            setTimeout(function() {
                targetContent.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 100);
        }
    }
    
    // Check URL for auto-tab switching
    var urlHash = window.location.hash.substring(1);
    var urlParams = new URLSearchParams(window.location.search);
    var formParam = urlParams.get('form');
    
    if (urlHash === 'quote' || formParam === 'quote') {
        switchTab('quote');
    } else if (urlHash === 'contact' || formParam === 'contact') {
        switchTab('contact');
    }
    
    // Tab click handlers
    formTabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            var targetTab = this.getAttribute('data-tab');
            switchTab(targetTab);
            history.replaceState(null, null, '#' + targetTab);
        });
    });
    
    // ============================================
    // CONTACT FORM 7 ENHANCEMENT
    // ============================================
    
    // Enhanced CF7 form submission handling
    document.addEventListener('wpcf7mailsent', function(event) {
        var formWrapper = event.target.closest('.form-content');
        if (!formWrapper) return;
        
        // Hide the form with animation
        var formElement = event.target;
        formElement.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        formElement.style.opacity = '0';
        formElement.style.transform = 'scale(0.95)';
        
        setTimeout(function() {
            formElement.style.display = 'none';
            
            // Show custom success message
            var successMessage = document.createElement('div');
            successMessage.className = 'custom-success-message';
            successMessage.innerHTML = `
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Message Sent Successfully!</h3>
                <p>Thank you for reaching out to Abbott Gage, Inc. We've received your message and will get back to you as soon as possible.</p>
                <div class="success-actions">
                    <button class="btn-secondary reset-form-btn">Send Another Message</button>
                </div>
            `;
            
            formWrapper.appendChild(successMessage);
            
            // Animate success message in
            setTimeout(function() {
                successMessage.style.opacity = '1';
                successMessage.style.transform = 'translateY(0)';
            }, 50);
            
            // Reset form button
            var resetBtn = successMessage.querySelector('.reset-form-btn');
            resetBtn.addEventListener('click', function() {
                successMessage.style.opacity = '0';
                successMessage.style.transform = 'translateY(-20px)';
                
                setTimeout(function() {
                    successMessage.remove();
                    formElement.style.display = 'flex';
                    formElement.reset();
                    setTimeout(function() {
                        formElement.style.opacity = '1';
                        formElement.style.transform = 'scale(1)';
                    }, 50);
                }, 300);
            });
            
            // Scroll to success message
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }, 300);
    }, false);
    
    // Handle CF7 form errors
    document.addEventListener('wpcf7invalid', function(event) {
        var formWrapper = event.target.closest('.form-content');
        if (!formWrapper) return;
        
        // Scroll to first error
        var firstError = event.target.querySelector('.wpcf7-not-valid');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }, false);
    
    // Enhanced input interactions
    var wpcf7Form = document.querySelector('.wpcf7-form');
    if (wpcf7Form) {
        var wpcf7Inputs = wpcf7Form.querySelectorAll('input, textarea');
        
        wpcf7Inputs.forEach(function(input) {
            input.addEventListener('focus', function() {
                var p = this.closest('p');
                if (p) {
                    p.style.transform = 'scale(1.01)';
                    p.style.transition = 'transform 0.2s ease';
                }
            });
            
            input.addEventListener('blur', function() {
                var p = this.closest('p');
                if (p) {
                    p.style.transform = 'scale(1)';
                }
            });
        });
    }
});
</script>

<style>
/* ============================================
   FORM TABS STYLING
   ============================================ */
.form-tabs {
    display: flex;
    gap: 0;
    margin-bottom: 0;
    border-bottom: 2px solid #e5e7eb;
    background: #f9fafb;
    border-radius: 0.75rem 0.75rem 0 0;
    overflow: hidden;
}

.form-tab {
    flex: 1;
    padding: 1.25rem 1.5rem;
    background: transparent;
    border: none;
    border-bottom: 3px solid transparent;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    color: #6b7280;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    position: relative;
    bottom: -2px;
}

.form-tab i {
    font-size: 1.25rem;
    transition: transform 0.3s ease;
}

.form-tab:hover {
    color: var(--color-primary, #1a56db);
    background: rgba(26, 86, 219, 0.08);
}

.form-tab:hover i {
    transform: scale(1.1);
}

.form-tab.active {
    color: var(--color-primary, #1a56db);
    border-bottom-color: var(--color-primary, #1a56db);
    background: #ffffff;
}

.form-content {
    display: none;
    animation: fadeIn 0.4s ease;
    padding: 1.5rem;
    background: #ffffff;
    border-radius: 0 0 0.75rem 0.75rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.form-content.active {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.form-header {
    margin-bottom: 1.25rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #e5e7eb;
}

.form-header h2 {
    margin-bottom: 0.75rem;
    color: #111827;
    font-size: 1.75rem;
}

.form-header p {
    color: #6b7280;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
}

/* ============================================
   FORM ROW & GROUP STYLING
   ============================================ */
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.form-group label {
    font-weight: 600;
    color: #374151;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.form-group .required {
    color: #dc2626;
    font-size: 1.1rem;
}

/* ============================================
   INPUT WRAPPER
   ============================================ */
.input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.input-wrapper input,
.input-wrapper select,
.input-wrapper textarea {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 0.5rem;
    font-size: 0.95rem;
    font-family: inherit;
    transition: all 0.2s ease;
    background: #ffffff;
    color: #111827;
}

.input-wrapper input::placeholder,
.input-wrapper textarea::placeholder {
    color: #9ca3af;
}

.input-wrapper input:hover,
.input-wrapper select:hover,
.input-wrapper textarea:hover {
    border-color: #d1d5db;
}

.input-wrapper input:focus,
.input-wrapper select:focus,
.input-wrapper textarea:focus {
    outline: none;
    border-color: var(--color-primary, #1a56db);
    box-shadow: 0 0 0 4px rgba(26, 86, 219, 0.1);
}

.input-wrapper textarea {
    resize: vertical;
    min-height: 100px;
    line-height: 1.6;
}

.input-wrapper select {
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 1.25rem;
    padding-right: 3rem;
}

/* Number input styling */
.input-wrapper input[type="number"] {
    -moz-appearance: textfield;
}

.input-wrapper input[type="number"]::-webkit-outer-spin-button,
.input-wrapper input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* ============================================
   FORM ACTIONS & BUTTONS
   ============================================ */
.form-actions {
    display: flex;
    flex-direction: column;
    gap: 0.875rem;
    padding-top: 0.5rem;
    margin-top: 0.25rem;
}

.btn-large {
    padding: 0.875rem 2.25rem;
    font-size: 1rem;
    font-weight: 600;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.625rem;
    background: linear-gradient(135deg, var(--color-primary, #1a56db) 0%, #1e40af 100%);
    color: #fff;
    align-self: flex-start;
    box-shadow: 0 4px 6px -1px rgba(26, 86, 219, 0.2);
    position: relative;
    overflow: hidden;
}

.btn-large::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.btn-large:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px -5px rgba(26, 86, 219, 0.35);
}

.btn-large:hover::before {
    opacity: 1;
}

.btn-large:active {
    transform: translateY(0);
    box-shadow: 0 4px 6px -1px rgba(26, 86, 219, 0.2);
}

.btn-large i {
    font-size: 1.15rem;
}

/* ============================================
   FORM NOTICE
   ============================================ */
.form-notice {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    padding: 0.875rem 1rem;
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    border-left: 4px solid #0284c7;
    border-radius: 0.5rem;
    color: #0c4a6e;
    font-size: 0.875rem;
    line-height: 1.5;
    margin: 0;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}

.form-notice i {
    margin-top: 0.125rem;
    color: #0284c7;
    font-size: 1.1rem;
    flex-shrink: 0;
}

/* ============================================
   CONTACT FORM 7 STYLING
   ============================================ */
.wpcf7-form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}

.wpcf7-form p {
    margin: 0;
}

.wpcf7-form label {
    font-weight: 600;
    color: #374151;
    font-size: 0.95rem;
    margin-bottom: 0.5rem;
    display: block;
}

.wpcf7-form input[type="text"],
.wpcf7-form input[type="email"],
.wpcf7-form input[type="tel"],
.wpcf7-form textarea {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 0.5rem;
    font-size: 0.95rem;
    font-family: inherit;
    transition: all 0.2s ease;
    background: #ffffff;
}

.wpcf7-form input:hover,
.wpcf7-form textarea:hover {
    border-color: #d1d5db;
}

.wpcf7-form input:focus,
.wpcf7-form textarea:focus {
    outline: none;
    border-color: var(--color-primary, #1a56db);
    box-shadow: 0 0 0 4px rgba(26, 86, 219, 0.1);
}

.wpcf7-form textarea {
    resize: vertical;
    min-height: 100px;
}

.wpcf7-form .wpcf7-submit {
    padding: 0.875rem 2.25rem;
    font-size: 1rem;
    font-weight: 600;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
    background: linear-gradient(135deg, var(--color-primary, #1a56db) 0%, #1e40af 100%);
    color: #fff;
    box-shadow: 0 4px 6px -1px rgba(26, 86, 219, 0.2);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    align-self: flex-start;
    margin-top: 0.5rem;
}

.wpcf7-form .wpcf7-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px -5px rgba(26, 86, 219, 0.35);
}

/* ============================================
   RESPONSIVE DESIGN
   ============================================ */
@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .form-tabs {
        flex-direction: column;
        gap: 0;
        border-radius: 0.75rem;
    }
    
    .form-tab {
        border-bottom: 1px solid #e5e7eb;
        border-left: 3px solid transparent;
        justify-content: flex-start;
        padding: 0.875rem 1.25rem;
        bottom: 0;
    }
    
    .form-tab:last-child {
        border-bottom: none;
    }
    
    .form-tab.active {
        border-bottom-color: #e5e7eb;
        border-left-color: var(--color-primary, #1a56db);
        background: rgba(26, 86, 219, 0.05);
    }
    
    .form-content {
        padding: 1.25rem;
        border-radius: 0 0 0.75rem 0.75rem;
    }
    
    .form-header {
        margin-bottom: 1rem;
        padding-bottom: 0.875rem;
    }
    
    .form-header h2 {
        font-size: 1.5rem;
    }
    
    .wpcf7-form {
        gap: 1rem;
    }
    
    .btn-large {
        width: 100%;
        justify-content: center;
    }
    
    .form-actions {
        margin-top: 1.25rem;
        padding-top: 1.25rem;
    }
}

@media (max-width: 480px) {
    .input-wrapper input,
    .input-wrapper select,
    .input-wrapper textarea {
        font-size: 16px; /* Prevents zoom on iOS */
    }
    
    .form-content {
        padding: 1rem;
    }
    
    .form-header {
        margin-bottom: 0.875rem;
        padding-bottom: 0.75rem;
    }
    
    .wpcf7-form {
        gap: 0.875rem;
    }
    
    .form-group {
        gap: 0.375rem;
    }
}


/* ============================================
   CUSTOM SCROLLBAR
   ============================================ */
.form-content textarea::-webkit-scrollbar {
    width: 8px;
}

.form-content textarea::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}

.form-content textarea::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
}

.form-content textarea::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

/* ============================================
   HCAPTCHA STYLING
   ============================================ */
.wpcf7-form p:has(.wpcf7-form-control-wrap[data-name*="hcaptcha"]),
.wpcf7-form p:has(div[class*="hcaptcha"]),
.wpcf7-form p:has(div[class*="h-captcha"]) {
    margin: 1.5rem 0 !important;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Target the hCaptcha container directly */
.wpcf7-form div[class*="hcaptcha"],
.wpcf7-form div[class*="h-captcha"],
.wpcf7-form .h-captcha,
.wpcf7-form .hcaptcha {
    margin: 0 auto;
    display: block;
}

/* Ensure proper spacing before form actions */
.form-actions {
    margin-top: 1.5rem;
    padding-top: 1.5rem;
    border-top: 1px solid #e5e7eb;
}

/* ============================================
   CUSTOM SUCCESS MESSAGE
   ============================================ */
.custom-success-message {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 3rem 2rem;
    opacity: 0;
    transform: translateY(-20px);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.custom-success-message .success-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
    animation: successPulse 2s ease-in-out infinite;
}

@keyframes successPulse {
    0%, 100% {
        transform: scale(1);
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
    }
    50% {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(16, 185, 129, 0.4);
    }
}

.custom-success-message .success-icon i {
    font-size: 2.5rem;
    color: #ffffff;
}

.custom-success-message h3 {
    font-size: 1.75rem;
    color: #111827;
    margin-bottom: 0.75rem;
    font-weight: 700;
}

.custom-success-message p {
    font-size: 1rem;
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 2rem;
    max-width: 500px;
}

.custom-success-message .success-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    justify-content: center;
}

.btn-secondary {
    padding: 0.75rem 1.75rem;
    font-size: 0.95rem;
    font-weight: 600;
    border: 2px solid var(--color-primary, #1a56db);
    border-radius: 0.5rem;
    cursor: pointer;
    background: #ffffff;
    color: var(--color-primary, #1a56db);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.btn-secondary:hover {
    background: var(--color-primary, #1a56db);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(26, 86, 219, 0.3);
}

/* ============================================
   CF7 RESPONSE MESSAGES OVERRIDE
   ============================================ */
.wpcf7-response-output {
    display: none !important;
}

.wpcf7-mail-sent-ok {
    display: none !important;
}
</style>

<?php
get_footer();

<?php
/**
 * Template Name: Services Overview
 * Template for displaying services overview page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main services-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Our Services', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Comprehensive precision measuring solutions for all your calibration, certification, and repair needs', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Services Cards -->
    <?php get_template_part( 'template-parts/services', 'cards' ); ?>
    
    <!-- Service Areas Section -->
    <section class="service-areas section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Whatever Your Needs', 'abbott-gage' ); ?></h2>
                <p class="section-description">
                    <?php esc_html_e( 'We handle all types of precision measuring equipment', 'abbott-gage' ); ?>
                </p>
            </div>
            
            <div class="service-areas-grid">
                <div class="service-area-card">
                    <div class="service-area-icon">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <h3><?php esc_html_e( 'Dimensional', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Micrometers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Calipers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Height Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Surface Plates', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Gage Blocks', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="service-area-card">
                    <div class="service-area-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3><?php esc_html_e( 'Electronic', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Multimeters', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Oscilloscopes', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Tachometers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Thermometers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Balances & Scales', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="service-area-card">
                    <div class="service-area-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3><?php esc_html_e( 'Pressure', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Pressure Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Dead Weight Testers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Pressure Transmitters', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Vacuum Gages', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="service-area-card">
                    <div class="service-area-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3><?php esc_html_e( 'Torque', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Torque Wrenches', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Torque Analyzers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Torque Screwdrivers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Dynamometers', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Process Section -->
    <section class="process-section section">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Our Process', 'abbott-gage' ); ?></h2>
                <p class="section-description">
                    <?php esc_html_e( 'Simple, professional, and reliable', 'abbott-gage' ); ?>
                </p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3><?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Reach out via phone, email, or our contact form to discuss your needs.', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3><?php esc_html_e( 'Receive Quote', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Get a detailed quote tailored to your equipment and requirements.', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3><?php esc_html_e( 'Service Delivery', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'We perform calibration, certification, or repairs with expert precision.', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3><?php esc_html_e( 'Documentation', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Receive comprehensive certification documentation with NIST traceability.', 'abbott-gage' ); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


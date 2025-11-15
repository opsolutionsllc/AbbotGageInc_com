<?php
/**
 * Template Name: Onsite Calibration
 * Template for onsite calibration services page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main onsite-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Onsite Calibration Services', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Professional calibration services at your facility - minimize downtime and maximize efficiency', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Main Content -->
    <section class="section">
        <div class="container">
            <div class="content-wrapper">
                <div class="main-content">
                    <h2><?php esc_html_e( 'Convenient On-Site Service', 'abbott-gage' ); ?></h2>
                    
                    <p class="lead">
                        <?php esc_html_e( 'We bring our state-of-the-art equipment and experienced technicians directly to your facility for professional calibration services.', 'abbott-gage' ); ?>
                    </p>
                    
                    <p>
                        <?php esc_html_e( 'On-site calibrations by Abbott Gage, Inc. range from basic micrometers and indicators to surface plates and pressure stations. Our mobile calibration service minimizes equipment downtime and keeps your operations running smoothly.', 'abbott-gage' ); ?>
                    </p>
                    
                    <div class="advantages-grid">
                        <div class="advantage-card">
                            <div class="advantage-icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <h3><?php esc_html_e( 'Reduced Downtime', 'abbott-gage' ); ?></h3>
                            <p><?php esc_html_e( 'Equipment stays at your facility, eliminating shipping time and keeping your operations running.', 'abbott-gage' ); ?></p>
                        </div>
                        
                        <div class="advantage-card">
                            <div class="advantage-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h3><?php esc_html_e( 'Cost-Effective', 'abbott-gage' ); ?></h3>
                            <p><?php esc_html_e( 'No packaging or shipping costs. We come to you with everything needed for calibration.', 'abbott-gage' ); ?></p>
                        </div>
                        
                        <div class="advantage-card">
                            <div class="advantage-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3><?php esc_html_e( 'Expert Technicians', 'abbott-gage' ); ?></h3>
                            <p><?php esc_html_e( 'Certified professionals with decades of experience in precision measurement.', 'abbott-gage' ); ?></p>
                        </div>
                        
                        <div class="advantage-card">
                            <div class="advantage-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h3><?php esc_html_e( 'Complete Documentation', 'abbott-gage' ); ?></h3>
                            <p><?php esc_html_e( 'Full certification with NIST traceable standards provided on-site.', 'abbott-gage' ); ?></p>
                        </div>
                    </div>
                    
                    <h3><?php esc_html_e( 'On-Site Calibration Services Include:', 'abbott-gage' ); ?></h3>
                    
                    <div class="services-columns">
                        <div class="service-column">
                            <ul class="checkmark-list">
                                <li><?php esc_html_e( 'Micrometers (Inside, Outside, Depth)', 'abbott-gage' ); ?></li>
                                <li><?php esc_html_e( 'Calipers (Dial, Digital, Vernier)', 'abbott-gage' ); ?></li>
                                <li><?php esc_html_e( 'Indicators (Dial, Digital, Test)', 'abbott-gage' ); ?></li>
                                <li><?php esc_html_e( 'Height Gages', 'abbott-gage' ); ?></li>
                                <li><?php esc_html_e( 'Surface Plates', 'abbott-gage' ); ?></li>
                            </ul>
                        </div>
                        <div class="service-column">
                            <ul class="checkmark-list">
                                <li><?php esc_html_e( 'Torque Wrenches', 'abbott-gage' ); ?></li>
                                <li><?php esc_html_e( 'Pressure Gauges', 'abbott-gage' ); ?></li>
                                <li><?php esc_html_e( 'Scales & Balances', 'abbott-gage' ); ?></li>
                                <li><?php esc_html_e( 'Thermometers', 'abbott-gage' ); ?></li>
                                <li><?php esc_html_e( 'And Much More', 'abbott-gage' ); ?></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="cta-box">
                        <h3><?php esc_html_e( 'Schedule Your On-Site Calibration Today', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Contact us to schedule a convenient time for our technicians to visit your facility.', 'abbott-gage' ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-lg">
                            <?php esc_html_e( 'Request Service', 'abbott-gage' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


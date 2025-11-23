<?php
/**
 * Template Name: Laboratory Calibration
 * Template for laboratory calibration services page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main laboratory-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Laboratory Calibration Services', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Send equipment to our state-of-the-art lab for precise calibration and certification', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Main Content -->
    <section class="section">
        <div class="container">
            <div class="two-column-layout">
                <div class="content-column">
                    <h2><?php esc_html_e( 'Calibration & Certification Process', 'abbott-gage' ); ?></h2>
                    
                    <p class="lead">
                        <?php esc_html_e( 'We have the tools necessary to work on a wide range of customers with various needs. Our experienced technical staff and trained technicians will be glad to help you through the certification process.', 'abbott-gage' ); ?>
                    </p>
                    
                    <p>
                        <?php esc_html_e( 'Take the guesswork out of the certification process and call Abbott Gage for your calibration needs. Laboratory calibrations by Abbott Gage, Inc. range from basic micrometers and indicators to surface plates and pressure stations.', 'abbott-gage' ); ?>
                    </p>
                    
                    <!-- What We Calibrate -->
                    <div class="calibration-equipment-section">
                        <h3><?php esc_html_e( 'What We Calibrate', 'abbott-gage' ); ?></h3>
                        <div class="row g-4">
                            <div class="col-12 col-md-6">
                                <div class="equipment-category h-100">
                                    <h4><?php esc_html_e( 'Dimensional Equipment', 'abbott-gage' ); ?></h4>
                                    <ul>
                                        <li><?php esc_html_e( 'Micrometers & Calipers', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Height Gages & Depth Gages', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Indicators & Comparators', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Surface Plates & Gage Blocks', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Pin Gages & Ring Gages', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Angle Plates & V-Blocks', 'abbott-gage' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6">
                                <div class="equipment-category h-100">
                                    <h4><?php esc_html_e( 'Electronic Equipment', 'abbott-gage' ); ?></h4>
                                    <ul>
                                        <li><?php esc_html_e( 'Multimeters & Voltmeters', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Oscilloscopes', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Thermometers & Thermocouples', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Balances & Scales', 'abbott-gage' ); ?></li>
                                        <li><?php esc_html_e( 'Tachometers', 'abbott-gage' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Benefits -->
                    <div class="benefits-section">
                        <h3><?php esc_html_e( 'Laboratory Calibration Benefits', 'abbott-gage' ); ?></h3>
                        <div class="row g-4">
                            <div class="col-12 col-md-6">
                                <div class="benefit-item h-100">
                                    <i class="fas fa-certificate"></i>
                                    <div>
                                        <h4><?php esc_html_e( 'Full Certification', 'abbott-gage' ); ?></h4>
                                        <p><?php esc_html_e( 'Complete documentation with NIST traceability', 'abbott-gage' ); ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6">
                                <div class="benefit-item h-100">
                                    <i class="fas fa-microscope"></i>
                                    <div>
                                        <h4><?php esc_html_e( 'Controlled Environment', 'abbott-gage' ); ?></h4>
                                        <p><?php esc_html_e( 'Temperature and humidity controlled lab', 'abbott-gage' ); ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6">
                                <div class="benefit-item h-100">
                                    <i class="fas fa-clock"></i>
                                    <div>
                                        <h4><?php esc_html_e( 'Quick Turnaround', 'abbott-gage' ); ?></h4>
                                        <p><?php esc_html_e( 'Fast processing to minimize downtime', 'abbott-gage' ); ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6">
                                <div class="benefit-item h-100">
                                    <i class="fas fa-tools"></i>
                                    <div>
                                        <h4><?php esc_html_e( 'State-of-the-Art Facility', 'abbott-gage' ); ?></h4>
                                        <p><?php esc_html_e( 'Modern equipment and proven procedures', 'abbott-gage' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sidebar-column">
                    <div class="info-box">
                        <h3><?php esc_html_e( 'Send Your Equipment', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Ready to get your equipment calibrated?', 'abbott-gage' ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/contact#quote' ) ); ?>" class="btn btn-primary btn-block">
                            <?php esc_html_e( 'Request Service', 'abbott-gage' ); ?>
                        </a>
                    </div>
                    
                    <div class="info-box">
                        <h3><?php esc_html_e( 'Contact Information', 'abbott-gage' ); ?></h3>
                        <ul class="contact-list">
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+12563783286">(256) 378-3286</a>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:+18004814243">1-800-481-4243</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@abbottgageinc.com">info@abbottgageinc.com</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="info-box highlight">
                        <h4><?php esc_html_e( 'Why Lab Calibration?', 'abbott-gage' ); ?></h4>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Controlled environment</li>
                            <li><i class="fas fa-check"></i> Highest accuracy</li>
                            <li><i class="fas fa-check"></i> NIST traceable</li>
                            <li><i class="fas fa-check"></i> ISO 9001:2015 certified</li>
                            <li><i class="fas fa-check"></i> Full documentation</li>
                        </ul>
                    </div>
                    
                    <div class="image-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/equipment/micrometer_surface-plate_height-gage.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Laboratory Equipment', 'abbott-gage' ); ?>"
                             loading="lazy">
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


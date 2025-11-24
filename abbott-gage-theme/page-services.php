<?php
/**
 * Template Name: Services Overview
 * Template for displaying services overview page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: precision measurement services
 * Alternative Keyphrases: calibration certification and repair, metrology services company
 * 
 * SEO Title: Precision Measurement Services | Calibration, Repair & Sales | Abbott Gage
 * 
 * Meta Description: Comprehensive precision measurement services: laboratory & on-site calibration, 
 * equipment repair, and tool sales. ISO certified, NIST traceable. Serving industries nationwide.
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
    
    <!-- FAQ Section -->
    <?php 
    $services_faqs = array(
        array(
            'question' => 'What types of calibration services do you offer?',
            'answer' => 'We offer comprehensive calibration services including laboratory calibration, on-site calibration, and mobile calibration services. Our services cover dimensional equipment (micrometers, calipers, gages), electronic equipment (multimeters, oscilloscopes, thermometers), pressure equipment, and more. All calibrations are NIST traceable and ISO 9001:2015 certified.'
        ),
        array(
            'question' => 'Are you ISO certified?',
            'answer' => 'Yes, Abbott Gage Inc. is ISO 9001:2015 certified. Our quality management system meets international standards for excellence and continuous improvement. All our calibrations are performed to ISO/IEC 17025 requirements and include NIST traceable standards.'
        ),
        array(
            'question' => 'Do you offer same-day or expedited service?',
            'answer' => 'Yes, we offer expedited service options for urgent calibration needs. Standard turnaround is 3-5 business days for laboratory calibration, but we can accommodate rush requests. On-site calibration can often be scheduled within 1-2 weeks depending on location and availability. Contact us to discuss your specific timing requirements.'
        ),
        array(
            'question' => 'What is the difference between laboratory and on-site calibration?',
            'answer' => 'Laboratory calibration involves sending equipment to our temperature-controlled facility for the highest level of accuracy. On-site calibration brings our mobile lab to your location, minimizing equipment downtime and transportation risks. Both methods are NIST traceable, but on-site is ideal for large, stationary equipment or when you need to minimize production interruption.'
        ),
        array(
            'question' => 'Do you repair equipment?',
            'answer' => 'Yes, we are a factory-authorized repair center for major brands including Mitutoyo, Fowler, and Brown & Sharpe. We can repair most precision measuring equipment and recalibrate it before returning it to you. We also offer preventive maintenance services to extend equipment life.'
        ),
        array(
            'question' => 'How do I request a quote for calibration services?',
            'answer' => 'You can request a quote by contacting us via phone at (256) 378-3286, email at info@abbottgageinc.com, or through our online contact form. Please provide details about the type and quantity of equipment you need calibrated, and we\'ll respond promptly with a competitive quote.'
        )
    );
    
    get_template_part( 'template-parts/faq', 'section', array( 
        'title' => 'Calibration Services FAQs',
        'items' => $services_faqs 
    ) ); 
    ?>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


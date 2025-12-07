<?php
/**
 * Template Name: Repair Services
 * Template for repair services page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: precision measuring equipment repair
 * Alternative Keyphrases: Mitutoyo authorized repair center, gage and caliper repair
 * 
 * SEO Title: Precision Measuring Equipment Repair | Factory Authorized Service Center
 * 
 * Meta Description: Factory authorized repair center for Mitutoyo, Fowler & Brown & Sharpe. 
 * Expert repair services for precision measuring tools. Fast turnaround, quality guaranteed.
 */

get_header();
?>

<main id="main" class="site-main repairs-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Repair Services', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Factory authorized repair center for precision measuring tools and equipment', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Main Content -->
    <section class="section">
        <div class="container">
            <div class="two-column-layout">
                <div class="content-column">
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                    
                    <!-- Repair Services Include -->
                    <div class="services-include-section">
                        <h3><?php esc_html_e( 'Repair Services Include', 'abbott-gage' ); ?></h3>
                        <div class="services-columns">
                            <div class="service-column">
                                <ul class="checkmark-list">
                                    <li><?php esc_html_e( 'Complete overhaul and refurbishment', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Parts replacement with genuine OEM components', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Accuracy testing and calibration', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Technical support to ensure your equipment is repaired to original specifications', 'abbott-gage' ); ?></li>
                                </ul>
                            </div>
                            <div class="service-column">
                                <ul class="checkmark-list">
                                    <li><?php esc_html_e( 'Cosmetic restoration when needed', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Warranty support for authorized brands', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Post-Repair Certification when Requested', 'abbott-gage' ); ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-callout">
                            <i class="fas fa-info-circle"></i>
                            <p><?php esc_html_e( 'All repaired equipment is calibrated before return.', 'abbott-gage' ); ?></p>
                        </div>
                    </div>
                    
                    <!-- Repair Process -->
                    <div class="repair-process-section">
                        <h3><?php esc_html_e( 'Our Repair Process', 'abbott-gage' ); ?></h3>
                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <h4><?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Discuss the issue with our staff', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="process-step">
                                <div class="step-number">2</div>
                                <h4><?php esc_html_e( 'Send Equipment', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Ship to our facility or drop off locally', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="process-step">
                                <div class="step-number">3</div>
                                <h4><?php esc_html_e( 'Diagnosis & Quote', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'We diagnose and provide a repair quote when requested', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="process-step">
                                <div class="step-number">4</div>
                                <h4><?php esc_html_e( 'Repair & Test', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Complete repair with thorough testing', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="process-step">
                                <div class="step-number">5</div>
                                <h4><?php esc_html_e( 'Calibrate & Return', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Calibrated and returned', 'abbott-gage' ); ?></p>
                            </div>
                        </div>
                        <p class="turnaround-time">
                            <strong><?php esc_html_e( 'Average Turnaround:', 'abbott-gage' ); ?></strong>
                            <?php esc_html_e( ' 5-10 business days depending on parts availability', 'abbott-gage' ); ?>
                        </p>
                    </div>
                    
                    <!-- Brands We Service -->
                    <div class="brands-serviced-section">
                        <h3><?php esc_html_e( 'Brands We Service', 'abbott-gage' ); ?></h3>
                        <div class="brands-grid">
                            <span class="brand-tag">Mitutoyo</span>
                            <span class="brand-tag">Fowler</span>
                            <span class="brand-tag">Brown & Sharpe</span>
                            <span class="brand-tag">TESA</span>
                            <span class="brand-tag">Starrett</span>
                            <span class="brand-tag">CDI Torque</span>
                            <span class="brand-tag">Snap-On</span>
                            <span class="brand-tag">Williams</span>
                        </div>
                        <p class="text-center mt-3">
                            <?php esc_html_e( 'And many other major brands', 'abbott-gage' ); ?>
                        </p>
                    </div>
                    
                </div>
                
                <!-- Sidebar -->
                <div class="sidebar-column">
                    <div class="info-box">
                        <h3><?php esc_html_e( 'Request Repair Service', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Need equipment repaired? Contact us for a quote.', 'abbott-gage' ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/contact#quote' ) ); ?>" class="btn btn-primary btn-block">
                            <?php esc_html_e( 'Get a Quote', 'abbott-gage' ); ?>
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
                        <h4><?php esc_html_e( 'Why Choose Us?', 'abbott-gage' ); ?></h4>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Technical expertise</li>
                            <li><i class="fas fa-check"></i> Genuine OEM parts</li>
                            <li><i class="fas fa-check"></i> Expert technicians</li>
                            <li><i class="fas fa-check"></i> Fast turnaround</li>
                            <li><i class="fas fa-check"></i> Quality service</li>
                        </ul>
                    </div>
                    
                    <div class="image-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/equipment/micrometer_surface-plate_height-gage.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Precision Measuring Equipment', 'abbott-gage' ); ?>"
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


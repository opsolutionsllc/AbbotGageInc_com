<?php
/**
 * Template Name: Repair Services
 * Template for repair services page
 *
 * @package Abbott_Gage
 * @since 1.0.0
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
                    
                    <!-- Factory Authorized Section -->
                        <h2><?php esc_html_e( 'Factory Authorized Repair Center', 'abbott-gage' ); ?></h2>
                        <p class="lead">
                            <?php esc_html_e( 'Abbott Gage, Inc. is proud to be a Factory Authorized Repair Center for major precision measuring tool manufacturers.', 'abbott-gage' ); ?>
                        </p>
                        <div class="authorized-brands-grid">
                            <div class="brand-card">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/mit.gif' ); ?>" 
                                     alt="Mitutoyo" loading="lazy">
                                <h4><?php esc_html_e( 'Mitutoyo', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Complete line of precision measuring tools', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="brand-card">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/fowler.gif' ); ?>" 
                                     alt="Fowler" loading="lazy">
                                <h4><?php esc_html_e( 'Fowler', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'High precision measuring instruments', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="brand-card">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/brownsharpe.gif' ); ?>" 
                                     alt="Brown & Sharpe" loading="lazy">
                                <h4><?php esc_html_e( 'Brown & Sharpe', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Micro-Hites and Tesa-Hites', 'abbott-gage' ); ?></p>
                            </div>
                        </div>
                        <p>
                            <?php esc_html_e( 'As an authorized repair center, we have access to genuine OEM parts, factory training, and technical support to ensure your equipment is repaired to original specifications.', 'abbott-gage' ); ?>
                        </p>
                    
                    <!-- Repair Services Include -->
                    <div class="services-include-section">
                        <h3><?php esc_html_e( 'Repair Services Include', 'abbott-gage' ); ?></h3>
                        <div class="services-columns">
                            <div class="service-column">
                                <ul class="checkmark-list">
                                    <li><?php esc_html_e( 'Complete overhaul and refurbishment', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Parts replacement with genuine OEM components', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Accuracy testing and calibration', 'abbott-gage' ); ?></li>
                                </ul>
                            </div>
                            <div class="service-column">
                                <ul class="checkmark-list">
                                    <li><?php esc_html_e( 'Cosmetic restoration when needed', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Warranty support for authorized brands', 'abbott-gage' ); ?></li>
                                    <li><?php esc_html_e( 'Post-repair calibration certification', 'abbott-gage' ); ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-callout">
                            <i class="fas fa-info-circle"></i>
                            <p><?php esc_html_e( 'All repaired equipment is calibrated and certified before return.', 'abbott-gage' ); ?></p>
                        </div>
                    </div>
                    
                    <!-- Repair Process -->
                    <div class="repair-process-section">
                        <h3><?php esc_html_e( 'Our Repair Process', 'abbott-gage' ); ?></h3>
                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <h4><?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Discuss the issue with our technicians', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="process-step">
                                <div class="step-number">2</div>
                                <h4><?php esc_html_e( 'Send Equipment', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Ship to our facility or drop off locally', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="process-step">
                                <div class="step-number">3</div>
                                <h4><?php esc_html_e( 'Diagnosis & Quote', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'We diagnose and provide a repair quote', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="process-step">
                                <div class="step-number">4</div>
                                <h4><?php esc_html_e( 'Repair & Test', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Complete repair with thorough testing', 'abbott-gage' ); ?></p>
                            </div>
                            <div class="process-step">
                                <div class="step-number">5</div>
                                <h4><?php esc_html_e( 'Calibrate & Return', 'abbott-gage' ); ?></h4>
                                <p><?php esc_html_e( 'Calibrated and returned with documentation', 'abbott-gage' ); ?></p>
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
                            <span class="brand-tag">Starrett</span>
                            <span class="brand-tag">CDI Torque</span>
                            <span class="brand-tag">Meyer Gage</span>
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
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-block">
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
                            <li><i class="fas fa-check"></i> Factory authorized</li>
                            <li><i class="fas fa-check"></i> Genuine OEM parts</li>
                            <li><i class="fas fa-check"></i> Expert technicians</li>
                            <li><i class="fas fa-check"></i> Fast turnaround</li>
                            <li><i class="fas fa-check"></i> Full certification</li>
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


<?php
/**
 * Template Name: Manufacturers
 * Template for manufacturing partners page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main manufacturers-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Our Manufacturing Partners', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Authorized distributor and service center for industry-leading precision tool manufacturers', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Introduction Section -->
    <section class="section bg-white">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="page-content text-center">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
    
    <!-- Featured Partners Section -->
    <section class="featured-partners section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Featured Manufacturing Partners', 'abbott-gage' ); ?></h2>
                <p class="section-description">
                    <?php esc_html_e( 'Factory authorized repair centers for leading brands', 'abbott-gage' ); ?>
                </p>
            </div>
            
            <div class="featured-partners-grid">
                <div class="partner-featured-card">
                    <div class="partner-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/mit.gif' ); ?>" 
                             alt="Mitutoyo" loading="lazy">
                    </div>
                    <div class="partner-info">
                        <h3><?php esc_html_e( 'Mitutoyo', 'abbott-gage' ); ?></h3>
                        <span class="partner-badge"><?php esc_html_e( 'Factory Authorized Repair Center', 'abbott-gage' ); ?></span>
                        <p>
                            <?php esc_html_e( 'Mitutoyo is the world\'s leading manufacturer of precision measuring equipment. We are proud to be a factory-authorized service center for the complete Mitutoyo line, including micrometers, calipers, height gages, indicators, and more.', 'abbott-gage' ); ?>
                        </p>
                        <ul class="partner-services">
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Sales & Distribution', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Factory Authorized Repairs', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Calibration Services', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Technical Support', 'abbott-gage' ); ?></li>
                        </ul>
                    </div>
                </div>
                
                <div class="partner-featured-card">
                    <div class="partner-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/fowler.gif' ); ?>" 
                             alt="Fowler High Precision" loading="lazy">
                    </div>
                    <div class="partner-info">
                        <h3><?php esc_html_e( 'Fowler High Precision', 'abbott-gage' ); ?></h3>
                        <span class="partner-badge"><?php esc_html_e( 'Factory Authorized Repair Center', 'abbott-gage' ); ?></span>
                        <p>
                            <?php esc_html_e( 'Fowler offers a comprehensive range of precision measuring tools. As an authorized repair center, we provide complete service for all Fowler products including sales, calibration, and expert repairs.', 'abbott-gage' ); ?>
                        </p>
                        <ul class="partner-services">
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Authorized Distributor', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Factory Repairs', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Calibration & Certification', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Parts & Accessories', 'abbott-gage' ); ?></li>
                        </ul>
                    </div>
                </div>
                
                <div class="partner-featured-card">
                    <div class="partner-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/brownsharpe.gif' ); ?>" 
                             alt="Brown & Sharpe" loading="lazy">
                    </div>
                    <div class="partner-info">
                        <h3><?php esc_html_e( 'Brown & Sharpe', 'abbott-gage' ); ?></h3>
                        <span class="partner-badge"><?php esc_html_e( 'Factory Authorized Repair Center', 'abbott-gage' ); ?></span>
                        <p>
                            <?php esc_html_e( 'Brown & Sharpe Tesa measuring instruments represent precision engineering at its finest. We are authorized for repair and calibration of all Brown & Sharpe Micro-Hites and Tesa-Hites.', 'abbott-gage' ); ?>
                        </p>
                        <ul class="partner-services">
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Micro-Hites Service', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Tesa-Hites Repair', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'Calibration Services', 'abbott-gage' ); ?></li>
                            <li><i class="fas fa-check"></i> <?php esc_html_e( 'OEM Parts', 'abbott-gage' ); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- All Manufacturers Grid -->
    <?php get_template_part( 'template-parts/manufacturers', 'section' ); ?>
    
    <!-- Additional Partners Section -->
    <section class="additional-partners section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Additional Manufacturing Partners', 'abbott-gage' ); ?></h2>
                <p class="section-description">
                    <?php esc_html_e( 'We represent and service products from these quality manufacturers', 'abbott-gage' ); ?>
                </p>
            </div>
            
            <div class="partners-list-grid">
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/starrett.gif' ); ?>" 
                             alt="Starrett" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Starrett', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Precision measuring tools since 1880', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/snapon.gif' ); ?>" 
                             alt="Snap-On Tools" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Snap-On Tools', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Industrial and automotive measuring tools', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/cditorque.gif' ); ?>" 
                             alt="CDI Torque" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'CDI Torque', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Torque measurement solutions', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/hioki.gif' ); ?>" 
                             alt="Hioki" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Hioki', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Electronic test and measuring instruments', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/ashcroft.gif' ); ?>" 
                             alt="Ashcroft" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Ashcroft', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Pressure and temperature instrumentation', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/williams.gif' ); ?>" 
                             alt="Williams Tools" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Williams Tools', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Industrial hand tools', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/ames.gif' ); ?>" 
                             alt="Ames" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Ames', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Precision gaging solutions', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/meyergage.gif' ); ?>" 
                             alt="Meyer Gage" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Meyer Gage', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Pin gages and thread gages', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/hedland.gif' ); ?>" 
                             alt="Hedland" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Hedland', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Flow meters and indicators', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="partner-list-card">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/gagemaker.gif' ); ?>" 
                             alt="GageMaker" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'GageMaker', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Custom gaging solutions', 'abbott-gage' ); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Partner Benefits Section -->
    <section class="partner-benefits section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Benefits of Our Manufacturer Partnerships', 'abbott-gage' ); ?></h2>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3><?php esc_html_e( 'Genuine Products', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'All products are genuine, direct from authorized manufacturers', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3><?php esc_html_e( 'Factory Support', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Access to factory training, support, and OEM parts', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3><?php esc_html_e( 'Warranty Coverage', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Full manufacturer warranties honored on all products', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3><?php esc_html_e( 'Product Expertise', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'In-depth knowledge to help you select the right tools', 'abbott-gage' ); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


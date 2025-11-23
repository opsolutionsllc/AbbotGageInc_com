<?php
/**
 * Template part for displaying services cards
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields
$services_title = get_field('services_title') ?: 'Our Services';
$services_description = get_field('services_description') ?: 'Comprehensive solutions for all your precision measuring needs';
$services_items = get_field('services_items');
?>

<section class="services-section section">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php echo esc_html( $services_title ); ?></h2>
            <p class="section-description">
                <?php echo esc_html( $services_description ); ?>
            </p>
        </div>
        
        <div class="services-grid">
            <?php if ( $services_items ) : ?>
                <?php foreach ( $services_items as $service ) : 
                    $link = $service['link'];
                    $link_url = is_array( $link ) ? $link['url'] : ( $link ?: '#' );
                    $link_title = is_array( $link ) ? $link['title'] : 'Learn More';
                    ?>
                    <div class="service-card<?php echo $service['featured'] ? ' featured' : ''; ?>">
                        <?php if ( $service['featured'] && ! empty( $service['featured_badge'] ) ) : ?>
                            <div class="featured-badge"><?php echo esc_html( $service['featured_badge'] ); ?></div>
                        <?php endif; ?>
                        
                        <div class="service-icon">
                            <i class="<?php echo esc_attr( $service['icon'] ); ?>"></i>
                        </div>
                        
                        <h3 class="service-title">
                            <a href="<?php echo esc_url( $link_url ); ?>">
                                <?php echo esc_html( $service['title'] ); ?>
                            </a>
                        </h3>
                        
                        <p class="service-description">
                            <?php echo esc_html( $service['description'] ); ?>
                        </p>
                        
                        <?php if ( ! empty( $service['features'] ) ) : ?>
                            <ul class="service-features">
                                <?php foreach ( $service['features'] as $feature ) : ?>
                                    <li><i class="fas fa-check"></i> <?php echo esc_html( $feature['text'] ); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        
                        <a href="<?php echo esc_url( $link_url ); ?>" class="service-link">
                            <?php echo esc_html( $link_title ); ?> <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <!-- Default services if none are set in ACF -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="<?php echo esc_url( home_url( '/laboratory-calibration' ) ); ?>">
                            <?php esc_html_e( 'Laboratory Calibration', 'abbott-gage' ); ?>
                        </a>
                    </h3>
                    <p class="service-description">
                        <?php esc_html_e( 'Send your equipment to our state-of-the-art lab for precise calibration and certification.', 'abbott-gage' ); ?>
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'NIST Traceable Standards', 'abbott-gage' ); ?></li>
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'ISO 9001:2015 Certified', 'abbott-gage' ); ?></li>
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Fast Turnaround Time', 'abbott-gage' ); ?></li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/laboratory-calibration' ) ); ?>" class="service-link">
                        <?php esc_html_e( 'Learn More', 'abbott-gage' ); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="service-card featured">
                    <div class="featured-badge"><?php esc_html_e( 'Popular', 'abbott-gage' ); ?></div>
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="<?php echo esc_url( home_url( '/onsite-calibration' ) ); ?>">
                            <?php esc_html_e( 'Onsite Calibration', 'abbott-gage' ); ?>
                        </a>
                    </h3>
                    <p class="service-description">
                        <?php esc_html_e( 'Professional on-site calibration services. Minimize downtime with our mobile service.', 'abbott-gage' ); ?>
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'At Your Facility', 'abbott-gage' ); ?></li>
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Minimal Downtime', 'abbott-gage' ); ?></li>
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Full Documentation', 'abbott-gage' ); ?></li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/onsite-calibration' ) ); ?>" class="service-link">
                        <?php esc_html_e( 'Learn More', 'abbott-gage' ); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="<?php echo esc_url( home_url( '/repair-services' ) ); ?>">
                            <?php esc_html_e( 'Repair Services', 'abbott-gage' ); ?>
                        </a>
                    </h3>
                    <p class="service-description">
                        <?php esc_html_e( 'Factory authorized repair center for Mitutoyo, Fowler, and Brown & Sharpe precision measuring tools.', 'abbott-gage' ); ?>
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></li>
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Expert Technicians', 'abbott-gage' ); ?></li>
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Quality Parts', 'abbott-gage' ); ?></li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/repair-services' ) ); ?>" class="service-link">
                        <?php esc_html_e( 'Learn More', 'abbott-gage' ); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="service-title">
                        <a href="<?php echo esc_url( home_url( '/sales' ) ); ?>">
                            <?php esc_html_e( 'Tool Sales', 'abbott-gage' ); ?>
                        </a>
                    </h3>
                    <p class="service-description">
                        <?php esc_html_e( 'Distributor for all major precision tool manufacturers at competitive prices.', 'abbott-gage' ); ?>
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Major Brands', 'abbott-gage' ); ?></li>
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Competitive Pricing', 'abbott-gage' ); ?></li>
                        <li><i class="fas fa-check"></i> <?php esc_html_e( 'Expert Guidance', 'abbott-gage' ); ?></li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/sales' ) ); ?>" class="service-link">
                        <?php esc_html_e( 'Learn More', 'abbott-gage' ); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

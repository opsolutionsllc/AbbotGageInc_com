<?php
/**
 * Template part for displaying services cards
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields with fallbacks
$services_title = abbott_gage_get_option( 'services_title', 'Our Services' );
$services_description = abbott_gage_get_option( 'services_description', 'Comprehensive solutions for all your precision measuring needs' );

// Define all 4 services
$services = array();
for ( $i = 1; $i <= 4; $i++ ) {
    $service = array(
        'title' => abbott_gage_get_option( "service_{$i}_title", '' ),
        'description' => abbott_gage_get_option( "service_{$i}_description", '' ),
        'icon' => abbott_gage_get_option( "service_{$i}_icon", 'fas fa-cog' ),
        'link' => abbott_gage_get_option( "service_{$i}_link", '#' ),
        'featured' => ( $i === 2 ) ? abbott_gage_get_option( "service_{$i}_featured", false ) : false,
        'feature_1' => abbott_gage_get_option( "service_{$i}_feature_1", '' ),
        'feature_2' => abbott_gage_get_option( "service_{$i}_feature_2", '' ),
        'feature_3' => abbott_gage_get_option( "service_{$i}_feature_3", '' ),
    );
    
    if ( $service['title'] ) {
        $services[] = $service;
    }
}

// If no services found, use defaults
if ( empty( $services ) ) {
    $services = array(
        array(
            'title' => 'Laboratory Calibration',
            'description' => 'Send your equipment to our state-of-the-art lab for precise calibration and certification.',
            'icon' => 'fas fa-flask',
            'link' => home_url( '/laboratory-calibration' ),
            'featured' => false,
            'feature_1' => 'NIST Traceable Standards',
            'feature_2' => 'ISO 9001:2015 Certified',
            'feature_3' => 'Fast Turnaround Time',
        ),
        array(
            'title' => 'Onsite Calibration',
            'description' => 'Professional on-site calibration services. Minimize downtime with our mobile service.',
            'icon' => 'fas fa-truck',
            'link' => home_url( '/onsite-calibration' ),
            'featured' => true,
            'feature_1' => 'At Your Facility',
            'feature_2' => 'Minimal Downtime',
            'feature_3' => 'Full Documentation',
        ),
        array(
            'title' => 'Repair Services',
            'description' => 'Factory authorized repair center for major brands. Expert repair and maintenance services.',
            'icon' => 'fas fa-wrench',
            'link' => home_url( '/repair-services' ),
            'featured' => false,
            'feature_1' => 'Factory Authorized',
            'feature_2' => 'Expert Technicians',
            'feature_3' => 'Quality Parts',
        ),
        array(
            'title' => 'Tool Sales',
            'description' => 'Distributor for all major precision tool manufacturers at competitive prices.',
            'icon' => 'fas fa-shopping-cart',
            'link' => home_url( '/sales' ),
            'featured' => false,
            'feature_1' => 'Major Brands',
            'feature_2' => 'Competitive Pricing',
            'feature_3' => 'Expert Guidance',
        ),
    );
}
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
            
            <?php foreach ( $services as $service ) : ?>
                <div class="service-card<?php echo $service['featured'] ? ' featured' : ''; ?>">
                    <?php if ( $service['featured'] ) : ?>
                        <div class="featured-badge"><?php esc_html_e( 'Popular', 'abbott-gage' ); ?></div>
                    <?php endif; ?>
                    
                    <div class="service-icon">
                        <i class="<?php echo esc_attr( $service['icon'] ); ?>"></i>
                    </div>
                    
                    <h3 class="service-title">
                        <a href="<?php echo esc_url( $service['link'] ); ?>">
                            <?php echo esc_html( $service['title'] ); ?>
                        </a>
                    </h3>
                    
                    <p class="service-description">
                        <?php echo esc_html( $service['description'] ); ?>
                    </p>
                    
                    <?php if ( $service['feature_1'] || $service['feature_2'] || $service['feature_3'] ) : ?>
                        <ul class="service-features">
                            <?php if ( $service['feature_1'] ) : ?>
                                <li><i class="fas fa-check"></i> <?php echo esc_html( $service['feature_1'] ); ?></li>
                            <?php endif; ?>
                            <?php if ( $service['feature_2'] ) : ?>
                                <li><i class="fas fa-check"></i> <?php echo esc_html( $service['feature_2'] ); ?></li>
                            <?php endif; ?>
                            <?php if ( $service['feature_3'] ) : ?>
                                <li><i class="fas fa-check"></i> <?php echo esc_html( $service['feature_3'] ); ?></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                    
                    <a href="<?php echo esc_url( $service['link'] ); ?>" class="service-link">
                        <?php esc_html_e( 'Learn More', 'abbott-gage' ); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>

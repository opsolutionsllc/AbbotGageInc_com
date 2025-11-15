<?php
/**
 * Template part for displaying the hero section
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields with fallbacks
$hero_title = get_field( 'hero_title' ) ?: 'Precision Measuring Tools & Calibration Services';
$hero_subtitle = get_field( 'hero_subtitle' ) ?: 'State-of-the-art measuring equipment to provide you with the greatest accuracy. On-site calibration service for your dimensional and electronic instruments.';
$hero_bg_image = get_field( 'hero_background_image' );
$hero_feature_1 = get_field( 'hero_feature_1' ) ?: 'ISO 9001:2015 Certified';
$hero_feature_2 = get_field( 'hero_feature_2' ) ?: 'NIST Traceable';
$hero_feature_3 = get_field( 'hero_feature_3' ) ?: '30+ Years Experience';
$hero_cta_1_text = get_field( 'hero_cta_1_text' ) ?: 'Request a Quote';
$hero_cta_1_link = get_field( 'hero_cta_1_link' ) ?: home_url( '/contact' );
$hero_cta_2_text = get_field( 'hero_cta_2_text' ) ?: 'Our Services';
$hero_cta_2_link = get_field( 'hero_cta_2_link' ) ?: home_url( '/services' );
?>

<section class="hero-section" <?php if ( $hero_bg_image ) : ?>style="background-image: url('<?php echo esc_url( $hero_bg_image ); ?>');"<?php endif; ?>>
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <?php echo esc_html( $hero_title ); ?>
            </h1>
            <p class="hero-subtitle">
                <?php echo esc_html( $hero_subtitle ); ?>
            </p>
            <div class="hero-features">
                <?php if ( $hero_feature_1 ) : ?>
                    <div class="hero-feature">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo esc_html( $hero_feature_1 ); ?></span>
                    </div>
                <?php endif; ?>
                
                <?php if ( $hero_feature_2 ) : ?>
                    <div class="hero-feature">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo esc_html( $hero_feature_2 ); ?></span>
                    </div>
                <?php endif; ?>
                
                <?php if ( $hero_feature_3 ) : ?>
                    <div class="hero-feature">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo esc_html( $hero_feature_3 ); ?></span>
                    </div>
                <?php endif; ?>
            </div>
            <div class="hero-cta">
                <?php if ( $hero_cta_1_text && $hero_cta_1_link ) : ?>
                    <a href="<?php echo esc_url( $hero_cta_1_link ); ?>" class="btn btn-secondary btn-lg">
                        <i class="fas fa-paper-plane"></i>
                        <?php echo esc_html( $hero_cta_1_text ); ?>
                    </a>
                <?php endif; ?>
                
                <?php if ( $hero_cta_2_text && $hero_cta_2_link ) : ?>
                    <a href="<?php echo esc_url( $hero_cta_2_link ); ?>" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-info-circle"></i>
                        <?php echo esc_html( $hero_cta_2_text ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

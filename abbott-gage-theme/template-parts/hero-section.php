<?php
/**
 * Template part for displaying the hero section
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields
$hero_title = get_field('hero_title') ?: 'Precision Measuring Tools & Calibration Services';
$hero_subtitle = get_field('hero_subtitle') ?: 'State-of-the-art measuring equipment to provide you with the greatest accuracy. On-site calibration service for your dimensional and electronic instruments.';
$hero_features = get_field('hero_features');
$hero_buttons = get_field('hero_buttons');
?>

<section class="hero-section">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <?php echo esc_html( $hero_title ); ?>
            </h1>
            <p class="hero-subtitle">
                <?php echo esc_html( $hero_subtitle ); ?>
            </p>
            
            <?php if ( $hero_features ) : ?>
                <div class="hero-features">
                    <?php foreach ( $hero_features as $feature ) : ?>
                        <div class="hero-feature">
                            <i class="<?php echo esc_attr( $feature['icon'] ?: 'fas fa-check-circle' ); ?>"></i>
                            <span><?php echo esc_html( $feature['text'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <!-- Default features if none are set -->
                <div class="hero-features">
                    <div class="hero-feature">
                        <i class="fas fa-check-circle"></i>
                        <span><?php esc_html_e( 'ISO 9001:2015 Certified', 'abbott-gage' ); ?></span>
                    </div>
                    <div class="hero-feature">
                        <i class="fas fa-check-circle"></i>
                        <span><?php esc_html_e( 'NIST Traceable', 'abbott-gage' ); ?></span>
                    </div>
                    <div class="hero-feature">
                        <i class="fas fa-check-circle"></i>
                        <span><?php esc_html_e( '30+ Years Experience', 'abbott-gage' ); ?></span>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if ( $hero_buttons ) : ?>
                <div class="hero-cta">
                    <?php foreach ( $hero_buttons as $button ) : 
                        $button_url = is_array( $button['url'] ) ? $button['url']['url'] : $button['url'];
                        $button_target = is_array( $button['url'] ) && isset( $button['url']['target'] ) ? $button['url']['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $button_url ); ?>" 
                           class="btn <?php echo esc_attr( $button['style'] ?: 'btn-secondary' ); ?> btn-lg"
                           target="<?php echo esc_attr( $button_target ); ?>">
                            <?php if ( ! empty( $button['icon'] ) ) : ?>
                                <i class="<?php echo esc_attr( $button['icon'] ); ?>"></i>
                            <?php endif; ?>
                            <?php echo esc_html( $button['text'] ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <!-- Default buttons if none are set -->
                <div class="hero-cta">
                    <a href="<?php echo esc_url( home_url( '/contact#quote' ) ); ?>" class="btn btn-secondary btn-lg">
                        <i class="fas fa-paper-plane"></i>
                        <?php esc_html_e( 'Request a Quote', 'abbott-gage' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-info-circle"></i>
                        <?php esc_html_e( 'Our Services', 'abbott-gage' ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>


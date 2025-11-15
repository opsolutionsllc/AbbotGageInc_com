<?php
/**
 * Template part for call-to-action section
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields with fallbacks
$cta_title = abbott_gage_get_option( 'cta_title', 'Ready to Get Started?' );
$cta_description = abbott_gage_get_option( 'cta_description', 'Contact us today for a free quote on our calibration, repair, or sales services.' );
$cta_btn_1_text = abbott_gage_get_option( 'cta_button_1_text', 'Contact Us' );
$cta_btn_1_link = abbott_gage_get_option( 'cta_button_1_link', home_url( '/contact' ) );
$cta_btn_2_text = abbott_gage_get_option( 'cta_button_2_text', 'Call 1-800-481-4243' );
$cta_btn_2_phone = abbott_gage_get_option( 'cta_button_2_phone', '+18004814243' );
$cta_hours = abbott_gage_get_option( 'cta_hours_text', 'Monday - Friday: 8:00 AM - 5:00 PM CST' );
?>

<section class="cta-section section bg-primary">
    <div class="container">
        <div class="cta-content text-center text-white">
            <h2><?php echo esc_html( $cta_title ); ?></h2>
            <p class="cta-description">
                <?php echo esc_html( $cta_description ); ?>
            </p>
            <div class="cta-buttons">
                <?php if ( $cta_btn_1_text && $cta_btn_1_link ) : ?>
                    <a href="<?php echo esc_url( $cta_btn_1_link ); ?>" class="btn btn-secondary btn-lg">
                        <i class="fas fa-phone-alt"></i>
                        <?php echo esc_html( $cta_btn_1_text ); ?>
                    </a>
                <?php endif; ?>
                
                <?php if ( $cta_btn_2_text && $cta_btn_2_phone ) : ?>
                    <a href="tel:<?php echo esc_attr( $cta_btn_2_phone ); ?>" class="btn btn-outline btn-lg">
                        <i class="fas fa-phone"></i>
                        <?php echo esc_html( $cta_btn_2_text ); ?>
                    </a>
                <?php endif; ?>
            </div>
            <?php if ( $cta_hours ) : ?>
                <div class="cta-hours">
                    <p>
                        <i class="far fa-clock"></i>
                        <?php echo esc_html( $cta_hours ); ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

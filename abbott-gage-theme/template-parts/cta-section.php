<?php
/**
 * Template part for call-to-action section
 * 
 * This template is REUSABLE across any page.
 * Priority: Page-specific fields → Global Settings → Defaults
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get fields: Check page-specific first, then global settings, then defaults
$cta_title = get_field('cta_title') 
    ?: get_field('global_cta_title', 'option') 
    ?: 'Ready to Get Started?';

$cta_description = get_field('cta_description') 
    ?: get_field('global_cta_description', 'option') 
    ?: 'Contact us today for a free quote on our calibration, repair, or sales services.';

$cta_buttons = get_field('cta_buttons') 
    ?: get_field('global_cta_buttons', 'option');

// For boolean fields, check if page-specific is set, otherwise use global
$page_cta_hours = get_field('cta_hours_show');
$global_cta_hours = get_field('global_cta_hours_show', 'option');
$cta_hours_show = ($page_cta_hours !== null) ? $page_cta_hours : $global_cta_hours;

$business_hours = get_field('business_hours', 'option');
?>

<section class="cta-section section bg-primary">
    <div class="container">
        <div class="cta-content text-center text-white">
            <h2><?php echo esc_html( $cta_title ); ?></h2>
            <p class="cta-description">
                <?php echo esc_html( $cta_description ); ?>
            </p>
            
            <?php if ( $cta_buttons ) : ?>
                <div class="cta-buttons">
                    <?php foreach ( $cta_buttons as $button ) : ?>
                        <a href="<?php echo esc_url( $button['url'] ); ?>" 
                           class="btn <?php echo esc_attr( $button['style'] ?: 'btn-secondary' ); ?> btn-lg">
                            <?php if ( ! empty( $button['icon'] ) ) : ?>
                                <i class="<?php echo esc_attr( $button['icon'] ); ?>"></i>
                            <?php endif; ?>
                            <?php echo esc_html( $button['text'] ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <!-- Default buttons if none are set -->
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-secondary btn-lg">
                        <i class="fas fa-phone-alt"></i>
                        <?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?>
                    </a>
                    <a href="tel:+18004814243" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-phone"></i>
                        <?php esc_html_e( 'Call 1-800-481-4243', 'abbott-gage' ); ?>
                    </a>
                </div>
            <?php endif; ?>
            
            <?php if ( $cta_hours_show !== false ) : ?>
                <div class="cta-hours">
                    <p>
                        <i class="far fa-clock"></i>
                        <?php 
                        if ( $business_hours ) {
                            echo nl2br( esc_html( $business_hours ) );
                        } else {
                            esc_html_e( 'Monday - Friday: 8:30 AM - 4:30 PM CST', 'abbott-gage' );
                        }
                        ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

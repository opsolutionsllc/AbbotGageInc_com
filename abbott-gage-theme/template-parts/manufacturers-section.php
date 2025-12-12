<?php
/**
 * Template part for displaying manufacturers
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields
$manufacturers_title = get_field('manufacturers_title') ?: 'Authorized Distributor & Manufacturing Partners';
$manufacturers_description = get_field('manufacturers_description') ?: 'We proudly service these manufacturers and many more';
$manufacturers_items = get_field('manufacturers_items');
$manufacturers_button = get_field('manufacturers_button');
?>

<section class="manufacturers-section section">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php echo esc_html( $manufacturers_title ); ?></h2>
            <p class="section-description">
                <?php echo esc_html( $manufacturers_description ); ?>
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <?php if ( $manufacturers_items ) : ?>
                <?php foreach ( $manufacturers_items as $manufacturer ) : ?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="manufacturer-item">
                        <img src="<?php echo esc_url( $manufacturer['logo']['url'] ); ?>" 
                             alt="<?php echo esc_attr( $manufacturer['logo']['alt'] ?: $manufacturer['name'] ); ?>" 
                             loading="lazy">
                        <?php if ( $manufacturer['authorized'] ) : ?>
                            <div class="manufacturer-badge"><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></div>
                        <?php endif; ?>
                    </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
        <?php 
        // Only show the button if we're NOT on the manufacturers page
        if ( ! is_page_template( 'page-manufacturers.php' ) ) :
            if ( $manufacturers_button ) : ?>
                <div class="text-center mt-5">
                    <a href="<?php echo esc_url( $manufacturers_button['url'] ); ?>" 
                       class="btn btn-outline"
                       <?php if ( ! empty( $manufacturers_button['target'] ) ) : ?>target="<?php echo esc_attr( $manufacturers_button['target'] ); ?>"<?php endif; ?>>
                        <?php echo esc_html( $manufacturers_button['title'] ?: 'View All Manufacturer Partners' ); ?>
                    </a>
                </div>
            <?php else : ?>
                <div class="text-center mt-5">
                    <a href="<?php echo esc_url( home_url( '/manufacturers' ) ); ?>" class="btn btn-outline">
                        <?php esc_html_e( 'View All Manufacturer Partners', 'abbott-gage' ); ?>
                    </a>
                </div>
            <?php endif;
        endif; ?>
    </div>
</section>

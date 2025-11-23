<?php
/**
 * Template part for displaying manufacturers
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields
$manufacturers_title = get_field('manufacturers_title') ?: 'Authorized Distributor & Service Center';
$manufacturers_description = get_field('manufacturers_description') ?: 'Partnered with industry-leading manufacturers';
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
        
        <div class="manufacturers-grid">
            <?php if ( $manufacturers_items ) : ?>
                <?php foreach ( $manufacturers_items as $manufacturer ) : ?>
                    <div class="manufacturer-item">
                        <img src="<?php echo esc_url( $manufacturer['logo']['url'] ); ?>" 
                             alt="<?php echo esc_attr( $manufacturer['logo']['alt'] ?: $manufacturer['name'] ); ?>" 
                             loading="lazy">
                        <?php if ( $manufacturer['authorized'] ) : ?>
                            <div class="manufacturer-badge"><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <!-- Default manufacturers if none are set in ACF -->
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/mit.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Mitutoyo', 'abbott-gage' ); ?>" 
                         loading="lazy">
                    <div class="manufacturer-badge"><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></div>
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/brownsharpe.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Brown & Sharpe', 'abbott-gage' ); ?>" 
                         loading="lazy">
                    <div class="manufacturer-badge"><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></div>
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/fowler.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Fowler', 'abbott-gage' ); ?>" 
                         loading="lazy">
                    <div class="manufacturer-badge"><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></div>
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/snapon.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Snap-On', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/starrett.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Starrett', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/hioki.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Hioki', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/ashcroft.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Ashcroft', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/williams.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Williams', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/cditorque.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'CDI Torque', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/ames.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Ames', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/hedland.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Hedland', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/meyergage.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'Meyer Gage', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
                
                <div class="manufacturer-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/gagemaker.gif' ); ?>" 
                         alt="<?php esc_attr_e( 'GageMaker', 'abbott-gage' ); ?>" 
                         loading="lazy">
                </div>
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

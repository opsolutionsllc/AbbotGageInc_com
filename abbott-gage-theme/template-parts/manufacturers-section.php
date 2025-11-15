<?php
/**
 * Template part for displaying manufacturers
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields with fallbacks
$manufacturers_title = abbott_gage_get_option( 'manufacturers_title', 'Authorized Distributor & Service Center' );
$manufacturers_description = abbott_gage_get_option( 'manufacturers_description', 'Partnered with industry-leading manufacturers' );
$show_logos = abbott_gage_get_option( 'show_manufacturer_logos', true );
$cta_text = abbott_gage_get_option( 'manufacturers_cta_text', 'View All Manufacturer Partners' );
$cta_link = abbott_gage_get_option( 'manufacturers_cta_link', home_url( '/manufacturers' ) );

// List of manufacturer logos
$manufacturers = array(
    array( 'name' => 'Mitutoyo', 'file' => 'mit.gif', 'factory_authorized' => true ),
    array( 'name' => 'Brown & Sharpe', 'file' => 'brownsharpe.gif', 'factory_authorized' => true ),
    array( 'name' => 'Fowler', 'file' => 'fowler.gif', 'factory_authorized' => true ),
    array( 'name' => 'Snap-On', 'file' => 'snapon.gif', 'factory_authorized' => false ),
    array( 'name' => 'Starrett', 'file' => 'starrett.gif', 'factory_authorized' => false ),
    array( 'name' => 'Hioki', 'file' => 'hioki.gif', 'factory_authorized' => false ),
    array( 'name' => 'Ashcroft', 'file' => 'ashcroft.gif', 'factory_authorized' => false ),
    array( 'name' => 'Williams', 'file' => 'williams.gif', 'factory_authorized' => false ),
    array( 'name' => 'CDI Torque', 'file' => 'cditorque.gif', 'factory_authorized' => false ),
    array( 'name' => 'Ames', 'file' => 'ames.gif', 'factory_authorized' => false ),
    array( 'name' => 'Hedland', 'file' => 'hedland.gif', 'factory_authorized' => false ),
    array( 'name' => 'Meyer Gage', 'file' => 'meyergage.gif', 'factory_authorized' => false ),
    array( 'name' => 'GageMaker', 'file' => 'gagemaker.gif', 'factory_authorized' => false ),
);
?>

<section class="manufacturers-section section">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php echo esc_html( $manufacturers_title ); ?></h2>
            <p class="section-description">
                <?php echo esc_html( $manufacturers_description ); ?>
            </p>
        </div>
        
        <?php if ( $show_logos ) : ?>
            <div class="manufacturers-grid">
                <?php foreach ( $manufacturers as $manufacturer ) : 
                    $image_path = get_template_directory() . '/assets/images/manufacturers/' . $manufacturer['file'];
                    if ( file_exists( $image_path ) ) :
                        $image_url = get_template_directory_uri() . '/assets/images/manufacturers/' . $manufacturer['file'];
                        ?>
                        <div class="manufacturer-item">
                            <img src="<?php echo esc_url( $image_url ); ?>" 
                                 alt="<?php echo esc_attr( $manufacturer['name'] ); ?>" 
                                 loading="lazy">
                            <?php if ( $manufacturer['factory_authorized'] ) : ?>
                                <div class="manufacturer-badge"><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endif;
                endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if ( $cta_text && $cta_link ) : ?>
            <div class="text-center mt-5">
                <a href="<?php echo esc_url( $cta_link ); ?>" class="btn btn-outline">
                    <?php echo esc_html( $cta_text ); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

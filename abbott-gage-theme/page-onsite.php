<?php
/**
 * Template Name: Onsite Calibration
 * Template for onsite calibration services page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: on-site calibration services
 * Alternative Keyphrases: mobile calibration services, field calibration equipment
 * 
 * SEO Title: On-Site Calibration Services | Mobile Lab Service | Abbott Gage Inc
 * 
 * Meta Description: Convenient on-site calibration services at your facility. Minimize downtime 
 * with our mobile calibration lab. Dimensional & electronic equipment certified to NIST standards.
 */

get_header();
?>

<main id="main" class="site-main onsite-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Professional calibration services at your facility - minimize downtime and maximize efficiency', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Main Content -->
    <?php 
    $onsite_main_title = get_field( 'onsite_main_title' );
    $onsite_lead_text = get_field( 'onsite_lead_text' );
    $onsite_description = get_field( 'onsite_description' );
    $onsite_benefits_title = get_field( 'onsite_benefits_title' );
    $onsite_benefits_items = get_field( 'onsite_benefits_items' );
    $onsite_services_title = get_field( 'onsite_services_title' );
    $onsite_services_columns = get_field( 'onsite_services_columns' );
    ?>
    <section class="section">
        <div class="container">
            <div class="two-column-layout">
                <div class="content-column">
                    <?php if ( $onsite_main_title ) : ?>
                        <h2><?php echo esc_html( $onsite_main_title ); ?></h2>
                    <?php endif; ?>
                    
                    <?php if ( $onsite_lead_text ) : ?>
                        <p class="lead">
                            <?php echo esc_html( $onsite_lead_text ); ?>
                        </p>
                    <?php endif; ?>
                    
                    <?php if ( $onsite_description ) : ?>
                        <p>
                            <?php echo esc_html( $onsite_description ); ?>
                        </p>
                    <?php endif; ?>
                    
                    <!-- Benefits Section -->
                    <?php if ( $onsite_benefits_items && ! empty( $onsite_benefits_items ) ) : ?>
                    <div class="benefits-section">
                        <?php if ( $onsite_benefits_title ) : ?>
                            <h3><?php echo esc_html( $onsite_benefits_title ); ?></h3>
                        <?php endif; ?>
                        <div class="row g-4">
                            <?php foreach ( $onsite_benefits_items as $benefit ) : 
                                $benefit_icon = isset( $benefit['icon'] ) ? $benefit['icon'] : '';
                                $benefit_title = isset( $benefit['title'] ) ? $benefit['title'] : '';
                                $benefit_description = isset( $benefit['description'] ) ? $benefit['description'] : '';
                                ?>
                                <div class="col-12 col-md-6">
                                    <div class="benefit-item h-100">
                                        <?php if ( $benefit_icon ) : ?>
                                            <i class="<?php echo esc_attr( $benefit_icon ); ?>"></i>
                                        <?php endif; ?>
                                        <div>
                                            <?php if ( $benefit_title ) : ?>
                                                <h4><?php echo esc_html( $benefit_title ); ?></h4>
                                            <?php endif; ?>
                                            <?php if ( $benefit_description ) : ?>
                                                <p><?php echo esc_html( $benefit_description ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Services Include -->
                    <?php if ( $onsite_services_columns && ! empty( $onsite_services_columns ) ) : ?>
                    <div class="services-include-section">
                        <?php if ( $onsite_services_title ) : ?>
                            <h3><?php echo esc_html( $onsite_services_title ); ?></h3>
                        <?php endif; ?>
                        <div class="services-columns">
                            <?php foreach ( $onsite_services_columns as $column ) : 
                                $column_items = isset( $column['items'] ) ? $column['items'] : array();
                                ?>
                                <?php if ( ! empty( $column_items ) ) : ?>
                                    <?php
                                        // Split $column_items into 2 groups as evenly as possible
                                        $total = count( $column_items );
                                        $half = (int) ceil( $total / 2 );
                                        $chunks = array_chunk( $column_items, $half );
                                    ?>
                                    <?php foreach ( $chunks as $group ) : ?>
                                        <div class="service-column">
                                            <ul class="checkmark-list">
                                                <?php foreach ( $group as $item ) : 
                                                    $item_text = isset( $item['text'] ) ? $item['text'] : '';
                                                    if ( $item_text ) : ?>
                                                        <li><?php echo esc_html( $item_text ); ?></li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                </div>
                
                <!-- Sidebar -->
                <div class="sidebar-column">
                    <div class="info-box">
                        <h3><?php esc_html_e( 'Schedule Service', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Contact us to schedule a convenient time for our technicians to visit your facility.', 'abbott-gage' ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/contact#quote' ) ); ?>" class="btn btn-primary btn-block">
                            <?php esc_html_e( 'Request Service', 'abbott-gage' ); ?>
                        </a>
                    </div>
                    
                    <div class="info-box">
                        <h3><?php esc_html_e( 'Contact Information', 'abbott-gage' ); ?></h3>
                        <ul class="contact-list">
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+12563783286">(256) 378-3286</a>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:+18004814243">1-800-481-4243</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@abbottgageinc.com">info@abbottgageinc.com</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="info-box highlight">
                        <h4><?php esc_html_e( 'Why On-Site?', 'abbott-gage' ); ?></h4>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Zero shipping time</li>
                            <li><i class="fas fa-check"></i> No equipment downtime</li>
                            <li><i class="fas fa-check"></i> Same-day service available</li>
                            <li><i class="fas fa-check"></i> NIST traceable</li>
                            <li><i class="fas fa-check"></i> Full certification</li>
                        </ul>
                    </div>
                    
                    <div class="image-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/equipment/micrometer_surface-plate_height-gage.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'On-Site Calibration Equipment', 'abbott-gage' ); ?>"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


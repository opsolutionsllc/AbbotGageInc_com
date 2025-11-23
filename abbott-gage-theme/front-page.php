<?php
/**
 * Template Name: Homepage
 * The front page template file
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main homepage">
    
    <?php
    // Hero Section
    get_template_part( 'template-parts/hero', 'section' );
    
    // Services Section
    get_template_part( 'template-parts/services', 'cards' );
    
    // Certifications Section
    get_template_part( 'template-parts/certifications', 'section' );
    
    // About Section
    $home_about_title = get_field('home_about_title') ?: 'About Abbott Gage, Inc.';
    $home_about_lead = get_field('home_about_lead') ?: 'Over three decades of excellence in precision measuring tools and calibration services.';
    $home_about_content = get_field('home_about_content');
    $home_about_features = get_field('home_about_features');
    $home_about_button = get_field('home_about_button');
    $home_about_image = get_field('home_about_image');
    ?>
    <section class="about-section section">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2><?php echo esc_html( $home_about_title ); ?></h2>
                    <p class="lead">
                        <?php echo esc_html( $home_about_lead ); ?>
                    </p>
                    <?php if ( $home_about_content ) : ?>
                        <?php echo wp_kses_post( $home_about_content ); ?>
                    <?php else : ?>
                        <p>
                            <?php esc_html_e( 'Abbott Gage, Inc. has been a trusted name in the precision measuring tool industry since our founding. We are ISO 9001:2015 certified, and our standards are traceable to the NIST (National Institute of Standards and Technology).', 'abbott-gage' ); ?>
                        </p>
                        <p>
                            <?php esc_html_e( 'Our metrology and electronic laboratories are equipped with state-of-the-art measuring equipment to provide you with the greatest accuracy. We also offer on-site calibration services for your dimensional and electronic instruments.', 'abbott-gage' ); ?>
                        </p>
                    <?php endif; ?>
                    
                    <?php if ( $home_about_features ) : ?>
                        <div class="about-features">
                            <?php foreach ( $home_about_features as $feature ) : ?>
                                <div class="feature-item">
                                    <i class="<?php echo esc_attr( $feature['icon'] ); ?>"></i>
                                    <div>
                                        <h4><?php echo esc_html( $feature['title'] ); ?></h4>
                                        <?php if ( ! empty( $feature['description'] ) ) : ?>
                                            <p><?php echo esc_html( $feature['description'] ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else : ?>
                        <div class="about-features">
                            <div class="feature-item">
                                <i class="fas fa-certificate"></i>
                                <div>
                                    <h4><?php esc_html_e( 'ISO 9001:2015 Certified', 'abbott-gage' ); ?></h4>
                                    <p><?php esc_html_e( 'Meeting international quality standards', 'abbott-gage' ); ?></p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-award"></i>
                                <div>
                                    <h4><?php esc_html_e( 'Woman-Owned Business', 'abbott-gage' ); ?></h4>
                                    <p><?php esc_html_e( 'WBENC and WOSB certified', 'abbott-gage' ); ?></p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-tools"></i>
                                <div>
                                    <h4><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></h4>
                                    <p><?php esc_html_e( 'Certified repair center for major brands', 'abbott-gage' ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ( $home_about_button ) : ?>
                        <a href="<?php echo esc_url( $home_about_button['url'] ); ?>" 
                           class="btn btn-primary"
                           <?php if ( ! empty( $home_about_button['target'] ) ) : ?>target="<?php echo esc_attr( $home_about_button['target'] ); ?>"<?php endif; ?>>
                            <?php echo esc_html( $home_about_button['title'] ?: 'Learn More About Us' ); ?>
                        </a>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-primary">
                            <?php esc_html_e( 'Learn More About Us', 'abbott-gage' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="about-image">
                    <?php if ( $home_about_image ) : ?>
                        <img src="<?php echo esc_url( $home_about_image['url'] ); ?>" 
                             alt="<?php echo esc_attr( $home_about_image['alt'] ?: 'Precision Measuring Equipment' ); ?>"
                             loading="lazy">
                    <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/equipment/abbot-gage-tool-graphic.png' ); ?>" 
                             alt="<?php esc_attr_e( 'Precision Measuring Equipment', 'abbott-gage' ); ?>"
                             loading="lazy">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    // Manufacturers Section
    ?>
    <div class=" bg-light">
        <?php get_template_part( 'template-parts/manufacturers', 'section' ); ?>
    </div>

<?php
// Why Choose Us Section
$why_title = get_field('why_title') ?: 'Why Choose Abbott Gage, Inc.?';
$why_description = get_field('why_description') ?: 'Your trusted partner for precision measurement solutions';
$why_reasons = get_field('why_reasons');
?>
<section class="why-choose-us section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php echo esc_html( $why_title ); ?></h2>
                <p class="section-description">
                    <?php echo esc_html( $why_description ); ?>
                </p>
            </div>
            <div class="reasons-grid">
                <?php if ( $why_reasons ) : ?>
                    <?php foreach ( $why_reasons as $reason ) : ?>
                        <div class="reason-card">
                            <div class="reason-icon">
                                <i class="<?php echo esc_attr( $reason['icon'] ); ?>"></i>
                            </div>
                            <h3><?php echo esc_html( $reason['title'] ); ?></h3>
                            <?php if ( ! empty( $reason['description'] ) ) : ?>
                                <p><?php echo esc_html( $reason['description'] ); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <!-- Default reasons if none are set -->
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-history"></i>
                        </div>
                        <h3><?php esc_html_e( '30+ Years Experience', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Decades of expertise in precision measuring tools and calibration services.', 'abbott-gage' ); ?></p>
                    </div>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h3><?php esc_html_e( 'State-of-the-Art Lab', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Advanced equipment ensuring the highest accuracy and precision.', 'abbott-gage' ); ?></p>
                    </div>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h3><?php esc_html_e( 'Expert Team', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Knowledgeable, experienced technicians dedicated to your needs.', 'abbott-gage' ); ?></p>
                    </div>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h3><?php esc_html_e( 'Fast Turnaround', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Quick and efficient service to minimize your downtime.', 'abbott-gage' ); ?></p>
                    </div>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3><?php esc_html_e( 'Quality Assurance', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'NIST traceable standards and ISO 9001:2015 certification.', 'abbott-gage' ); ?></p>
                    </div>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3><?php esc_html_e( 'Customer Service', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Personalized attention and professional support for every client.', 'abbott-gage' ); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php
    // Call-to-Action Section
    get_template_part( 'template-parts/cta', 'section' );
    ?>

</main>

<?php
get_footer();

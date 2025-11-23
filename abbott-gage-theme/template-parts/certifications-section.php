<?php
/**
 * Template part for displaying certifications
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields
$certifications_title = get_field('certifications_title') ?: 'Our Certifications';
$certifications_description = get_field('certifications_description') ?: 'Certified excellence you can trust';
$certifications_items = get_field('certifications_items');
?>

<section class="certifications-section section bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php echo esc_html( $certifications_title ); ?></h2>
            <p class="section-description">
                <?php echo esc_html( $certifications_description ); ?>
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <?php if ( $certifications_items ) : ?>
                <?php foreach ( $certifications_items as $cert ) : ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                    <div class="certification-card h-100">
                        <div class="certification-image">
                            <?php if ( ! empty( $cert['image'] ) ) : ?>
                                <img src="<?php echo esc_url( $cert['image']['url'] ); ?>" 
                                     alt="<?php echo esc_attr( $cert['image']['alt'] ?: $cert['title'] ); ?>"
                                     loading="lazy">
                            <?php elseif ( ! empty( $cert['icon'] ) ) : ?>
                                <div class="cert-icon">
                                    <i class="<?php echo esc_attr( $cert['icon'] ); ?>"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="certification-content">
                            <h3><?php echo esc_html( $cert['title'] ); ?></h3>
                            <?php if ( ! empty( $cert['description'] ) ) : ?>
                                <p><?php echo esc_html( $cert['description'] ); ?></p>
                            <?php endif; ?>
                            <?php if ( ! empty( $cert['pdf'] ) ) : ?>
                                <a href="<?php echo esc_url( $cert['pdf']['url'] ); ?>" 
                                   class="cert-link" 
                                   target="_blank"
                                   rel="noopener noreferrer">
                                    <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'View Certificate (PDF)', 'abbott-gage' ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <!-- Default certifications if none are set in ACF -->
                <div class="col-12 col-sm-6 col-lg-3">
                <div class="certification-card h-100">
                    <div class="certification-image">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/PRI_Certification.png' ); ?>" 
                             alt="<?php esc_attr_e( 'ISO 9001:2015 Certification', 'abbott-gage' ); ?>"
                             loading="lazy">
                    </div>
                    <div class="certification-content">
                        <h3><?php esc_html_e( 'ISO 9001:2015 Certified', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Our quality management system meets international standards for excellence.', 'abbott-gage' ); ?></p>
                        <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/documents/AbbottGage_ISO_PRI_2025.pdf' ); ?>" 
                           class="cert-link" 
                           target="_blank"
                           rel="noopener noreferrer">
                            <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'View Certificate (PDF)', 'abbott-gage' ); ?>
                        </a>
                    </div>
                </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-3">
                <div class="certification-card h-100">
                    <div class="certification-image">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/equipment/womens_business_enterprise.gif' ); ?>" 
                             alt="<?php esc_attr_e( 'WBENC Certification', 'abbott-gage' ); ?>"
                             loading="lazy">
                    </div>
                    <div class="certification-content">
                        <h3><?php esc_html_e( 'WBENC Certified', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Certified Women\'s Business Enterprise by the Women\'s Business Enterprise National Council.', 'abbott-gage' ); ?></p>
                        <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/documents/womens_business_enterprise_2026.pdf' ); ?>" 
                           class="cert-link" 
                           target="_blank"
                           rel="noopener noreferrer">
                            <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'View Certificate (PDF)', 'abbott-gage' ); ?>
                        </a>
                    </div>
                </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-3">
                <div class="certification-card h-100">
                    <div class="certification-image">
                        <div class="cert-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                    </div>
                    <div class="certification-content">
                        <h3><?php esc_html_e( 'WOSB Certified', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Woman-Owned Small Business certified, supporting diversity in federal contracting.', 'abbott-gage' ); ?></p>
                        <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/documents/woman_owned_small_business_2026.pdf' ); ?>" 
                           class="cert-link" 
                           target="_blank"
                           rel="noopener noreferrer">
                            <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'View Certificate (PDF)', 'abbott-gage' ); ?>
                        </a>
                    </div>
                </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-3">
                <div class="certification-card h-100">
                    <div class="certification-image">
                        <div class="cert-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                    </div>
                    <div class="certification-content">
                        <h3><?php esc_html_e( 'NIST Traceable', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'All certifications are traceable to the National Institute of Standards and Technology.', 'abbott-gage' ); ?></p>
                    </div>
                </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

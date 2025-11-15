<?php
/**
 * Template part for displaying certifications
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get ACF fields with fallbacks
$certifications_title = abbott_gage_get_option( 'certifications_title', 'Our Certifications' );
$certifications_description = abbott_gage_get_option( 'certifications_description', 'Certified excellence you can trust' );

// Get all certifications
$certifications = array();
for ( $i = 1; $i <= 4; $i++ ) {
    $cert = array(
        'title' => abbott_gage_get_option( "cert_{$i}_title", '' ),
        'description' => abbott_gage_get_option( "cert_{$i}_description", '' ),
        'image' => abbott_gage_get_option( "cert_{$i}_image", false ),
        'pdf' => abbott_gage_get_option( "cert_{$i}_pdf", false ),
        'icon' => abbott_gage_get_option( "cert_{$i}_icon", 'fas fa-certificate' ),
    );
    
    if ( $cert['title'] ) {
        $certifications[] = $cert;
    }
}

// Default certifications if none set
if ( empty( $certifications ) ) {
    $certifications = array(
        array(
            'title' => 'ISO 9001:2015 Certified',
            'description' => 'Our quality management system meets international standards for excellence.',
            'image' => array(
                'url' => get_template_directory_uri() . '/assets/images/PRI_Certification.png',
                'alt' => 'ISO 9001:2015 Certification',
            ),
            'pdf' => array(
                'url' => get_template_directory_uri() . '/assets/documents/AbbottGage_ISO_PRI_2025.pdf',
            ),
            'icon' => '',
        ),
        array(
            'title' => 'WBENC Certified',
            'description' => 'Certified Women\'s Business Enterprise by the Women\'s Business Enterprise National Council.',
            'image' => array(
                'url' => get_template_directory_uri() . '/assets/images/equipment/womens_business_enterprise.gif',
                'alt' => 'WBENC Certification',
            ),
            'pdf' => array(
                'url' => get_template_directory_uri() . '/assets/documents/womens_business_enterprise_2026.pdf',
            ),
            'icon' => '',
        ),
        array(
            'title' => 'WOSB Certified',
            'description' => 'Woman-Owned Small Business certified, supporting diversity in federal contracting.',
            'image' => false,
            'pdf' => array(
                'url' => get_template_directory_uri() . '/assets/documents/woman_owned_small_business_2026.pdf',
            ),
            'icon' => 'fas fa-certificate',
        ),
        array(
            'title' => 'NIST Traceable',
            'description' => 'All certifications are traceable to the National Institute of Standards and Technology.',
            'image' => false,
            'pdf' => false,
            'icon' => 'fas fa-balance-scale',
        ),
    );
}
?>

<section class="certifications-section section bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php echo esc_html( $certifications_title ); ?></h2>
            <p class="section-description">
                <?php echo esc_html( $certifications_description ); ?>
            </p>
        </div>
        
        <div class="certifications-grid">
            <?php foreach ( $certifications as $cert ) : ?>
                <div class="certification-card">
                    <div class="certification-image">
                        <?php if ( $cert['image'] && is_array( $cert['image'] ) && isset( $cert['image']['url'] ) ) : ?>
                            <img src="<?php echo esc_url( $cert['image']['url'] ); ?>" 
                                 alt="<?php echo esc_attr( isset( $cert['image']['alt'] ) ? $cert['image']['alt'] : $cert['title'] ); ?>"
                                 loading="lazy">
                        <?php elseif ( $cert['icon'] ) : ?>
                            <div class="cert-icon">
                                <i class="<?php echo esc_attr( $cert['icon'] ); ?>"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="certification-content">
                        <h3><?php echo esc_html( $cert['title'] ); ?></h3>
                        <p><?php echo esc_html( $cert['description'] ); ?></p>
                        <?php if ( $cert['pdf'] && is_array( $cert['pdf'] ) && isset( $cert['pdf']['url'] ) ) : ?>
                            <a href="<?php echo esc_url( $cert['pdf']['url'] ); ?>" 
                               class="cert-link" 
                               target="_blank"
                               rel="noopener noreferrer">
                                <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'View Certificate (PDF)', 'abbott-gage' ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

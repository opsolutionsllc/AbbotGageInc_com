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
    $about_title = get_field( 'about_title' ) ?: 'About Abbott Gage, Inc.';
    $about_lead = get_field( 'about_lead' ) ?: 'Over three decades of excellence in precision measuring tools and calibration services.';
    $about_content = get_field( 'about_content' );
    $about_image = get_field( 'about_image' );
    $about_cta_text = get_field( 'about_cta_text' ) ?: 'Learn More About Us';
    $about_cta_link = get_field( 'about_cta_link' ) ?: home_url( '/about' );
    
    // About features
    $about_features = array();
    for ( $i = 1; $i <= 3; $i++ ) {
        $feature = array(
            'icon' => get_field( "about_feature_{$i}_icon" ) ?: 'fas fa-certificate',
            'title' => get_field( "about_feature_{$i}_title" ),
            'text' => get_field( "about_feature_{$i}_text" ),
        );
        if ( $feature['title'] ) {
            $about_features[] = $feature;
        }
    }
    
    // Default features if none set
    if ( empty( $about_features ) ) {
        $about_features = array(
            array(
                'icon' => 'fas fa-certificate',
                'title' => 'ISO 9001:2015 Certified',
                'text' => 'Meeting international quality standards',
            ),
            array(
                'icon' => 'fas fa-award',
                'title' => 'Woman-Owned Business',
                'text' => 'WBENC and WOSB certified',
            ),
            array(
                'icon' => 'fas fa-tools',
                'title' => 'Factory Authorized',
                'text' => 'Certified repair center for major brands',
            ),
        );
    }
    
    // Default content if none set
    if ( ! $about_content ) {
        $about_content = '<p>Abbott Gage, Inc. has been a trusted name in the precision measuring tool industry since our founding. We are ISO 9001:2015 certified, and our standards are traceable to the NIST (National Institute of Standards and Technology).</p>';
        $about_content .= '<p>Our metrology and electronic laboratories are equipped with state-of-the-art measuring equipment to provide you with the greatest accuracy. We also offer on-site calibration services for your dimensional and electronic instruments.</p>';
    }
    
    // Default image if none set
    if ( ! $about_image ) {
        $about_image = array(
            'url' => get_template_directory_uri() . '/assets/images/equipment/micrometer_surface-plate_height-gage.jpg',
            'alt' => 'Precision Measuring Equipment',
        );
    }
    ?>
    <section class="about-section section">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2><?php echo esc_html( $about_title ); ?></h2>
                    <p class="lead">
                        <?php echo esc_html( $about_lead ); ?>
                    </p>
                    <?php echo wp_kses_post( $about_content ); ?>
                    
                    <?php if ( ! empty( $about_features ) ) : ?>
                        <div class="about-features">
                            <?php foreach ( $about_features as $feature ) : ?>
                                <div class="feature-item">
                                    <i class="<?php echo esc_attr( $feature['icon'] ); ?>"></i>
                                    <div>
                                        <h4><?php echo esc_html( $feature['title'] ); ?></h4>
                                        <p><?php echo esc_html( $feature['text'] ); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <a href="<?php echo esc_url( $about_cta_link ); ?>" class="btn btn-primary">
                        <?php echo esc_html( $about_cta_text ); ?>
                    </a>
                </div>
                <div class="about-image">
                    <img src="<?php echo esc_url( is_array( $about_image ) ? $about_image['url'] : $about_image ); ?>" 
                         alt="<?php echo esc_attr( is_array( $about_image ) && isset( $about_image['alt'] ) ? $about_image['alt'] : 'About Image' ); ?>"
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <?php
    // Manufacturers Section
    get_template_part( 'template-parts/manufacturers', 'section' );
    
    // Why Choose Us Section
    $why_choose_title = get_field( 'why_choose_title' ) ?: 'Why Choose Abbott Gage, Inc.?';
    $why_choose_description = get_field( 'why_choose_description' ) ?: 'Your trusted partner for precision measurement solutions';
    
    // Get all 6 reasons
    $reasons = array();
    for ( $i = 1; $i <= 6; $i++ ) {
        $reason = array(
            'icon' => get_field( "reason_{$i}_icon" ) ?: 'fas fa-check-circle',
            'title' => get_field( "reason_{$i}_title" ),
            'text' => get_field( "reason_{$i}_text" ),
        );
        if ( $reason['title'] ) {
            $reasons[] = $reason;
        }
    }
    
    // Default reasons if none set
    if ( empty( $reasons ) ) {
        $reasons = array(
            array(
                'icon' => 'fas fa-history',
                'title' => '30+ Years Experience',
                'text' => 'Decades of expertise in precision measuring tools and calibration services.',
            ),
            array(
                'icon' => 'fas fa-microscope',
                'title' => 'State-of-the-Art Lab',
                'text' => 'Advanced equipment ensuring the highest accuracy and precision.',
            ),
            array(
                'icon' => 'fas fa-user-friends',
                'title' => 'Expert Team',
                'text' => 'Knowledgeable, experienced technicians dedicated to your needs.',
            ),
            array(
                'icon' => 'fas fa-shipping-fast',
                'title' => 'Fast Turnaround',
                'text' => 'Quick and efficient service to minimize your downtime.',
            ),
            array(
                'icon' => 'fas fa-check-circle',
                'title' => 'Quality Assurance',
                'text' => 'NIST traceable standards and ISO 9001:2015 certification.',
            ),
            array(
                'icon' => 'fas fa-handshake',
                'title' => 'Customer Service',
                'text' => 'Personalized attention and professional support for every client.',
            ),
        );
    }
    ?>
    <section class="why-choose-us section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php echo esc_html( $why_choose_title ); ?></h2>
                <p class="section-description">
                    <?php echo esc_html( $why_choose_description ); ?>
                </p>
            </div>
            <div class="reasons-grid">
                <?php foreach ( $reasons as $reason ) : ?>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="<?php echo esc_attr( $reason['icon'] ); ?>"></i>
                        </div>
                        <h3><?php echo esc_html( $reason['title'] ); ?></h3>
                        <p><?php echo esc_html( $reason['text'] ); ?></p>
                    </div>
                <?php endforeach; ?>
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

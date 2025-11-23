<?php
/**
 * Template Name: About Us
 * Template for about us page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main about-page">
    
    <?php while ( have_posts() ) : the_post(); 
        // Get ACF fields
        $about_intro_image = get_field('about_intro_image');
        $about_history_title = get_field('about_history_title') ?: 'Company History';
        $about_history_content = get_field('about_history_content');
        $about_commitment_title = get_field('about_commitment_title') ?: 'Our Commitment';
        $about_commitment_content = get_field('about_commitment_content');
        $about_highlights_title = get_field('about_highlights_title') ?: 'Our Certifications & Credentials';
        $about_highlights = get_field('about_highlights');
        $about_team_title = get_field('about_team_title') ?: 'Our Expert Team';
        $about_team_description = get_field('about_team_description') ?: 'Experienced technicians and calibration specialists dedicated to precision and quality';
        $about_team_content = get_field('about_team_content');
        $about_team_features = get_field('about_team_features');
        ?>
        
        <!-- Page Header -->
        <header class="page-header-section">
            <div class="container">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <?php if ( has_excerpt() ) : ?>
                    <p class="page-description">
                        <?php the_excerpt(); ?>
                    </p>
                <?php endif; ?>
            </div>
        </header>
        
        <!-- Introduction Section -->
        <section class="about-intro-section section bg-white">
            <div class="container">
                <div class="about-intro-grid">
                    <div class="about-intro-content">
                        <div class="intro-text">
                            <?php 
                            // Get the content
                            $content = get_the_content();
                            
                            // Split content by h2 tags to separate sections
                            $sections = preg_split('/<h2[^>]*>/', $content);
                            
                            // Get the introduction (before first h2)
                            if (!empty($sections[0])) {
                                echo apply_filters('the_content', $sections[0]);
                            }
                            ?>
                        </div>
                    </div>
                    <div class="about-intro-image">
                        <?php if ( $about_intro_image ) : ?>
                            <img src="<?php echo esc_url( $about_intro_image['url'] ); ?>" 
                                 alt="<?php echo esc_attr( $about_intro_image['alt'] ?: 'Precision Measuring Tools' ); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/equipment/abbot-gage-tool-graphic.png" 
                                 alt="Precision Measuring Tools">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Company Story Section -->
        <section class="company-story-section section bg-light">
            <div class="container">
                <div class="story-grid">
                    <div class="story-content">
                        <h2 class="section-title"><?php echo esc_html( $about_history_title ); ?></h2>
                        <div class="story-text">
                            <?php if ( $about_history_content ) : ?>
                                <?php echo wp_kses_post( $about_history_content ); ?>
                            <?php else : ?>
                                <p><?php esc_html_e( 'Founded over 30 years ago, Abbott Gage, Inc. was established with a commitment to providing the highest quality precision measuring equipment and services to industries requiring exact measurements and certifications.', 'abbott-gage' ); ?></p>
                                <p><?php esc_html_e( 'Through the years, we have built lasting relationships with our clients by delivering exceptional service, maintaining the highest standards, and continuously investing in state-of-the-art equipment and training for our team.', 'abbott-gage' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="story-content">
                        <h2 class="section-title"><?php echo esc_html( $about_commitment_title ); ?></h2>
                        <div class="story-text">
                            <?php if ( $about_commitment_content ) : ?>
                                <?php echo wp_kses_post( $about_commitment_content ); ?>
                            <?php else : ?>
                                <p><?php esc_html_e( 'At Abbott Gage, Inc., we understand that precision matters. Whether you need laboratory calibration, on-site service, equipment repairs, or new tools, we approach every job with the same dedication to accuracy and excellence.', 'abbott-gage' ); ?></p>
                                <p><?php esc_html_e( 'Our ISO 9001:2015 certification and NIST-traceable standards ensure that every calibration meets or exceeds industry requirements. As a woman-owned small business (WBENC and WOSB certified), we take pride in our role as a diverse supplier for businesses and government contracts.', 'abbott-gage' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <?php endwhile; ?>
    
    <!-- Company Highlights Section -->
    <section class="company-highlights section">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php echo esc_html( $about_highlights_title ); ?></h2>
            </div>
            <div class="highlights-grid">
                <?php if ( $about_highlights ) : ?>
                    <?php foreach ( $about_highlights as $highlight ) : ?>
                        <div class="highlight-card">
                            <div class="highlight-icon">
                                <i class="<?php echo esc_attr( $highlight['icon'] ); ?>"></i>
                            </div>
                            <h3><?php echo esc_html( $highlight['title'] ); ?></h3>
                            <?php if ( ! empty( $highlight['description'] ) ) : ?>
                                <p><?php echo esc_html( $highlight['description'] ); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <!-- Default highlights -->
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3><?php esc_html_e( 'ISO 9001:2015 Certified', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Our quality management system meets international standards for excellence and continuous improvement.', 'abbott-gage' ); ?></p>
                    </div>
                    
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3><?php esc_html_e( 'Woman-Owned Business', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'WBENC and WOSB certified, proud to serve as a diverse supplier for businesses and government contracts.', 'abbott-gage' ); ?></p>
                    </div>
                    
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3><?php esc_html_e( 'NIST Traceable Standards', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'All calibrations are performed using standards traceable to the National Institute of Standards and Technology.', 'abbott-gage' ); ?></p>
                    </div>
                    
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Authorized repair center for Mitutoyo, Fowler, and Brown & Sharpe precision measuring tools.', 'abbott-gage' ); ?></p>
                    </div>
                    
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-history"></i>
                        </div>
                        <h3><?php esc_html_e( '30+ Years Experience', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Over three decades of trusted service in precision measuring tools and calibration services.', 'abbott-gage' ); ?></p>
                    </div>
                    
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h3><?php esc_html_e( 'State-of-the-Art Lab', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Temperature and humidity controlled laboratory equipped with advanced measuring equipment.', 'abbott-gage' ); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <!-- Certifications Display Section -->
    <?php get_template_part( 'template-parts/certifications', 'section' ); ?>
    
    <!-- Team Section -->
    <section class="team-section section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php echo esc_html( $about_team_title ); ?></h2>
                <p class="section-description">
                    <?php echo esc_html( $about_team_description ); ?>
                </p>
            </div>
            <div class="team-content">
                <?php if ( $about_team_content ) : ?>
                    <?php echo wp_kses_post( $about_team_content ); ?>
                <?php else : ?>
                    <p class="lead text-center">
                        <?php esc_html_e( 'Our team of experienced technicians and calibration specialists brings decades of combined expertise to every project. We invest in ongoing training to stay current with the latest technologies and industry standards, ensuring that your equipment receives the highest level of professional service.', 'abbott-gage' ); ?>
                    </p>
                <?php endif; ?>
                
                <?php if ( $about_team_features ) : ?>
                    <div class="team-features">
                        <?php foreach ( $about_team_features as $feature ) : ?>
                            <div class="team-feature">
                                <i class="<?php echo esc_attr( $feature['icon'] ); ?>"></i>
                                <h4><?php echo esc_html( $feature['title'] ); ?></h4>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    <div class="team-features">
                        <div class="team-feature">
                            <i class="fas fa-graduation-cap"></i>
                            <h4><?php esc_html_e( 'Certified Professionals', 'abbott-gage' ); ?></h4>
                        </div>
                        <div class="team-feature">
                            <i class="fas fa-user-check"></i>
                            <h4><?php esc_html_e( 'Factory Trained', 'abbott-gage' ); ?></h4>
                        </div>
                        <div class="team-feature">
                            <i class="fas fa-users"></i>
                            <h4><?php esc_html_e( 'Experienced Technicians', 'abbott-gage' ); ?></h4>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();

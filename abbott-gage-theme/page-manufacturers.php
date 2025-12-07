<?php
/**
 * Template Name: Manufacturers
 * Template for manufacturing partners page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: precision tool manufacturers
 * Alternative Keyphrases: authorized Mitutoyo distributor, metrology equipment brands
 * 
 * SEO Title: Precision Tool Manufacturers | Authorized Service & Distribution Partners
 * 
 * Meta Description: Authorized service center & distributor for leading precision tool manufacturers: 
 * Mitutoyo, Starrett, Fowler, Brown & Sharpe, and more. Factory-trained technicians.
 */

get_header();
?>

<main id="main" class="site-main manufacturers-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Our Manufacturing Partners', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Authorized distributor and service center for industry-leading precision tool manufacturers', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Introduction Section -->
    <section class="section bg-white">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="page-content text-center">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
    
    <!-- All Manufacturers Grid -->
    <?php get_template_part( 'template-parts/manufacturers', 'section' ); ?>
    
    <!-- Additional Partners Section -->
    <section class="additional-partners section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Additional Manufacturing Partners', 'abbott-gage' ); ?></h2>
                <p class="section-description">
                    <?php esc_html_e( 'We represent and service products from these quality manufacturers', 'abbott-gage' ); ?>
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="partner-list-card h-100">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/starrett.gif' ); ?>" 
                             alt="Starrett" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Starrett', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Precision measuring tools since 1880', 'abbott-gage' ); ?></p>
                </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="partner-list-card h-100">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/cditorque.gif' ); ?>" 
                             alt="CDI Torque" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'CDI Torque', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Torque measurement solutions', 'abbott-gage' ); ?></p>
                </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="partner-list-card h-100">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/williams.gif' ); ?>" 
                             alt="Williams Tools" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Williams Tools', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Industrial hand tools', 'abbott-gage' ); ?></p>
                </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="partner-list-card h-100">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/ames.gif' ); ?>" 
                             alt="Ames" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Ames', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Precision gaging solutions', 'abbott-gage' ); ?></p>
                </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="partner-list-card h-100">
                    <div class="partner-list-logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manufacturers/hedland.gif' ); ?>" 
                             alt="Hedland" loading="lazy">
                    </div>
                    <h4><?php esc_html_e( 'Hedland', 'abbott-gage' ); ?></h4>
                    <p><?php esc_html_e( 'Flow meters and indicators', 'abbott-gage' ); ?></p>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Partner Benefits Section -->
    <section class="partner-benefits section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Benefits of Our Manufacturer Partnerships', 'abbott-gage' ); ?></h2>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                <div class="benefit-card h-100">
                    <div class="benefit-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3><?php esc_html_e( 'Genuine Products', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'All products are genuine, direct from authorized manufacturers', 'abbott-gage' ); ?></p>
                </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4">
                <div class="benefit-card h-100">
                    <div class="benefit-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3><?php esc_html_e( 'Large Inventory Selection', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Extensive product selection from manufacturers of your choice', 'abbott-gage' ); ?></p>
                </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4">
                <div class="benefit-card h-100">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3><?php esc_html_e( 'Warranty Coverage', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Full manufacturer warranties honored on all products', 'abbott-gage' ); ?></p>
                </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4">
                <div class="benefit-card h-100">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3><?php esc_html_e( 'Product Expertise', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'In-depth knowledge to help you select the right tools', 'abbott-gage' ); ?></p>
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


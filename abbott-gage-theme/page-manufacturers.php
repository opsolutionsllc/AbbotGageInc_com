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
            <h1 class="page-title"><?php the_title(); ?></h1>
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
    <?php
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
    
    <!-- Additional Partners Section -->
    <?php 
    $manufacturers_partners_title = get_field( 'manufacturers_partners_title' );
    $manufacturers_partners_description = get_field( 'manufacturers_partners_description' );
    $manufacturers_partners_items = get_field( 'manufacturers_partners_items' );
    
    if ( $manufacturers_partners_items && ! empty( $manufacturers_partners_items ) ) : ?>
    <section class="additional-partners section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <?php if ( $manufacturers_partners_title ) : ?>
                    <h2><?php echo esc_html( $manufacturers_partners_title ); ?></h2>
                <?php endif; ?>
                <?php if ( $manufacturers_partners_description ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $manufacturers_partners_description ); ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="row g-4">
                <?php foreach ( $manufacturers_partners_items as $partner ) : 
                    $partner_logo = isset( $partner['logo'] ) ? $partner['logo'] : null;
                    $partner_name = isset( $partner['name'] ) ? $partner['name'] : '';
                    $partner_description = isset( $partner['description'] ) ? $partner['description'] : '';
                    ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="partner-list-card h-100">
                            <?php if ( $partner_logo && isset( $partner_logo['url'] ) ) : ?>
                                <div class="partner-list-logo">
                                    <img src="<?php echo esc_url( $partner_logo['url'] ); ?>" 
                                         alt="<?php echo esc_attr( $partner_logo['alt'] ? $partner_logo['alt'] : $partner_name ); ?>" 
                                         loading="lazy">
                                </div>
                            <?php endif; ?>
                            <?php if ( $partner_name ) : ?>
                                <h4><?php echo esc_html( $partner_name ); ?></h4>
                            <?php endif; ?>
                            <?php if ( $partner_description ) : ?>
                                <p><?php echo esc_html( $partner_description ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Partner Benefits Section -->
    <?php 
    $manufacturers_benefits_title = get_field( 'manufacturers_benefits_title' );
    $manufacturers_benefits_items = get_field( 'manufacturers_benefits_items' );
    
    if ( $manufacturers_benefits_items && ! empty( $manufacturers_benefits_items ) ) : ?>
    <section class="partner-benefits section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <?php if ( $manufacturers_benefits_title ) : ?>
                    <h2><?php echo esc_html( $manufacturers_benefits_title ); ?></h2>
                <?php endif; ?>
            </div>
            <div class="row g-4">
                <?php foreach ( $manufacturers_benefits_items as $benefit ) : 
                    $benefit_icon = isset( $benefit['icon'] ) ? $benefit['icon'] : '';
                    $benefit_title = isset( $benefit['title'] ) ? $benefit['title'] : '';
                    $benefit_description = isset( $benefit['description'] ) ? $benefit['description'] : '';
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="benefit-card h-100">
                            <?php if ( $benefit_icon ) : ?>
                                <div class="benefit-icon">
                                    <i class="<?php echo esc_attr( $benefit_icon ); ?>"></i>
                                </div>
                            <?php endif; ?>
                            <?php if ( $benefit_title ) : ?>
                                <h3><?php echo esc_html( $benefit_title ); ?></h3>
                            <?php endif; ?>
                            <?php if ( $benefit_description ) : ?>
                                <p><?php echo esc_html( $benefit_description ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


<?php
/**
 * Template Name: Repair Services
 * Template for repair services page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: precision measuring equipment repair
 * Alternative Keyphrases: Mitutoyo authorized repair center, gage and caliper repair
 * 
 * SEO Title: Precision Measuring Equipment Repair | Factory Authorized Service Center
 * 
 * Meta Description: Factory authorized repair center for Mitutoyo, Fowler & Brown & Sharpe. 
 * Expert repair services for precision measuring tools. Fast turnaround, quality guaranteed.
 */

get_header();
?>

<main id="main" class="site-main repairs-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Expert repair services for precision measuring tools and equipment', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Main Content -->
    <section class="section">
        <div class="container">
            <div class="two-column-layout">
                <div class="content-column">
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                    
                    <!-- Repair Services Include -->
                    <?php 
                    $repairs_services_title = get_field( 'repairs_services_title' );
                    $repairs_services_columns = get_field( 'repairs_services_columns' );
                    $repairs_services_callout = get_field( 'repairs_services_callout' );
                    
                    if ( $repairs_services_columns && ! empty( $repairs_services_columns ) ) : ?>
                    <div class="services-include-section">
                        <?php if ( $repairs_services_title ) : ?>
                            <h3><?php echo esc_html( $repairs_services_title ); ?></h3>
                        <?php endif; ?>
                        <div class="services-columns">
                            <?php foreach ( $repairs_services_columns as $column ) : 
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
                        <?php if ( $repairs_services_callout ) : ?>
                            <div class="info-callout">
                                <i class="fas fa-info-circle"></i>
                                <p><?php echo esc_html( $repairs_services_callout ); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Repair Process -->
                    <?php 
                    $repairs_process_title = get_field( 'repairs_process_title' );
                    $repairs_process_steps = get_field( 'repairs_process_steps' );
                    $repairs_turnaround_label = get_field( 'repairs_turnaround_label' );
                    $repairs_turnaround_text = get_field( 'repairs_turnaround_text' );
                    
                    if ( $repairs_process_steps && ! empty( $repairs_process_steps ) ) : ?>
                    <div class="repair-process-section">
                        <?php if ( $repairs_process_title ) : ?>
                            <h3><?php echo esc_html( $repairs_process_title ); ?></h3>
                        <?php endif; ?>
                        <div class="process-steps">
                            <?php foreach ( $repairs_process_steps as $step ) : 
                                $step_number = isset( $step['number'] ) ? $step['number'] : '';
                                $step_title = isset( $step['title'] ) ? $step['title'] : '';
                                $step_description = isset( $step['description'] ) ? $step['description'] : '';
                                ?>
                                <div class="process-step">
                                    <?php if ( $step_number ) : ?>
                                        <div class="step-number"><?php echo esc_html( $step_number ); ?></div>
                                    <?php endif; ?>
                                    <?php if ( $step_title ) : ?>
                                        <h4><?php echo esc_html( $step_title ); ?></h4>
                                    <?php endif; ?>
                                    <?php if ( $step_description ) : ?>
                                        <p><?php echo esc_html( $step_description ); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if ( $repairs_turnaround_label || $repairs_turnaround_text ) : ?>
                            <p class="turnaround-time">
                                <?php if ( $repairs_turnaround_label ) : ?>
                                    <strong><?php echo esc_html( $repairs_turnaround_label ); ?></strong>
                                <?php endif; ?>
                                <?php if ( $repairs_turnaround_text ) : ?>
                                    <?php echo esc_html( $repairs_turnaround_text ); ?>
                                <?php endif; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Brands We Service -->
                    <?php 
                    $repairs_brands_title = get_field( 'repairs_brands_title' );
                    $repairs_brands_items = get_field( 'repairs_brands_items' );
                    $repairs_brands_footer = get_field( 'repairs_brands_footer' );
                    
                    if ( $repairs_brands_items && ! empty( $repairs_brands_items ) ) : ?>
                    <div class="brands-serviced-section">
                        <?php if ( $repairs_brands_title ) : ?>
                            <h3><?php echo esc_html( $repairs_brands_title ); ?></h3>
                        <?php endif; ?>
                        <div class="brands-grid">
                            <?php foreach ( $repairs_brands_items as $brand ) : 
                                $brand_name = isset( $brand['name'] ) ? $brand['name'] : '';
                                if ( $brand_name ) : ?>
                                    <span class="brand-tag"><?php echo esc_html( $brand_name ); ?></span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <?php if ( $repairs_brands_footer ) : ?>
                            <p class="text-center mt-3">
                                <?php echo esc_html( $repairs_brands_footer ); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                </div>
                
                <!-- Sidebar -->
                <div class="sidebar-column">
                    <div class="info-box">
                        <h3><?php esc_html_e( 'Request Repair Service', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Need equipment repaired? Contact us for a quote.', 'abbott-gage' ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/contact#quote' ) ); ?>" class="btn btn-primary btn-block">
                            <?php esc_html_e( 'Get a Quote', 'abbott-gage' ); ?>
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
                                <a href="mailto:hello@abbottgageinc.com">hello@abbottgageinc.com</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="info-box highlight">
                        <h4><?php esc_html_e( 'Why Choose Us?', 'abbott-gage' ); ?></h4>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Technical expertise</li>
                            <li><i class="fas fa-check"></i> Genuine OEM parts</li>
                            <li><i class="fas fa-check"></i> Expert technicians</li>
                            <li><i class="fas fa-check"></i> Fast turnaround</li>
                            <li><i class="fas fa-check"></i> Quality service</li>
                        </ul>
                    </div>
                    
                    <div class="image-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/equipment/micrometer_surface-plate_height-gage.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Precision Measuring Equipment', 'abbott-gage' ); ?>"
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


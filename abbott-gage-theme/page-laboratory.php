<?php
/**
 * Template Name: Laboratory Calibration
 * Template for laboratory calibration services page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: laboratory calibration services
 * Alternative Keyphrases: dimensional calibration lab, electronic equipment calibration
 * 
 * SEO Title: Laboratory Calibration Services | ISO Certified NIST Traceable | Abbott Gage
 * 
 * Meta Description: Professional laboratory calibration services for dimensional & electronic 
 * equipment. ISO certified, NIST traceable. Micrometers, calipers, gages, multimeters & more.
 */

get_header();
?>

<main id="main" class="site-main laboratory-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Send equipment to our state-of-the-art lab for precise calibration and certification', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Main Content -->
    <?php 
    $laboratory_main_title = get_field( 'laboratory_main_title' );
    $laboratory_lead_text = get_field( 'laboratory_lead_text' );
    $laboratory_description = get_field( 'laboratory_description' );
    $laboratory_equipment_title = get_field( 'laboratory_equipment_title' );
    $laboratory_equipment_categories = get_field( 'laboratory_equipment_categories' );
    $laboratory_benefits_title = get_field( 'laboratory_benefits_title' );
    $laboratory_benefits_items = get_field( 'laboratory_benefits_items' );
    ?>
    <section class="section">
        <div class="container">
            <div class="two-column-layout">
                <div class="content-column">
                    <?php if ( $laboratory_main_title ) : ?>
                        <h2><?php echo esc_html( $laboratory_main_title ); ?></h2>
                    <?php endif; ?>
                    
                    <?php if ( $laboratory_lead_text ) : ?>
                        <p class="lead">
                            <?php echo esc_html( $laboratory_lead_text ); ?>
                        </p>
                    <?php endif; ?>
                    
                    <?php if ( $laboratory_description ) : ?>
                        <p>
                            <?php echo esc_html( $laboratory_description ); ?>
                        </p>
                    <?php endif; ?>
                    
                    <!-- What We Calibrate -->
                    <?php if ( $laboratory_equipment_categories && ! empty( $laboratory_equipment_categories ) ) : ?>
                    <div class="calibration-equipment-section">
                        <?php if ( $laboratory_equipment_title ) : ?>
                            <h3><?php echo esc_html( $laboratory_equipment_title ); ?></h3>
                        <?php endif; ?>
                        <div class="row g-4">
                            <?php foreach ( $laboratory_equipment_categories as $category ) : 
                                $category_title = isset( $category['title'] ) ? $category['title'] : '';
                                $category_items = isset( $category['items'] ) ? $category['items'] : array();
                                ?>
                                <?php if ( $category_title && ! empty( $category_items ) ) : ?>
                                    <div class="col-12 col-md-6">
                                        <div class="equipment-category h-100">
                                            <h4><?php echo esc_html( $category_title ); ?></h4>
                                            <ul>
                                                <?php foreach ( $category_items as $item ) : 
                                                    $item_text = isset( $item['text'] ) ? $item['text'] : '';
                                                    if ( $item_text ) : ?>
                                                        <li><?php echo esc_html( $item_text ); ?></li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Benefits -->
                    <?php if ( $laboratory_benefits_items && ! empty( $laboratory_benefits_items ) ) : ?>
                    <div class="benefits-section">
                        <?php if ( $laboratory_benefits_title ) : ?>
                            <h3><?php echo esc_html( $laboratory_benefits_title ); ?></h3>
                        <?php endif; ?>
                        <div class="row g-4">
                            <?php foreach ( $laboratory_benefits_items as $benefit ) : 
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
                </div>
                
                <div class="sidebar-column">
                    <div class="info-box">
                        <h3><?php esc_html_e( 'Send Your Equipment', 'abbott-gage' ); ?></h3>
                        <p><?php esc_html_e( 'Ready to get your equipment calibrated?', 'abbott-gage' ); ?></p>
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
                                <a href="mailto:shelby@abbottgageinc.com">shelby@abbottgageinc.com</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="info-box highlight">
                        <h4><?php esc_html_e( 'Why Lab Calibration?', 'abbott-gage' ); ?></h4>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Controlled environment</li>
                            <li><i class="fas fa-check"></i> High accuracy</li>
                            <li><i class="fas fa-check"></i> NIST traceable</li>
                            <li><i class="fas fa-check"></i> ISO 9001:2015 certified</li>
                            <li><i class="fas fa-check"></i> Full documentation</li>
                        </ul>
                    </div>
                    
                    <div class="image-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/equipment/micrometer_surface-plate_height-gage.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Laboratory Equipment', 'abbott-gage' ); ?>"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <?php 
    $laboratory_faq_title = get_field( 'laboratory_faq_title' );
    $laboratory_faq_items = get_field( 'laboratory_faq_items' );
    
    if ( $laboratory_faq_items && ! empty( $laboratory_faq_items ) ) {
        // Format FAQ items for the template part
        $faq_items = array();
        foreach ( $laboratory_faq_items as $faq ) {
            if ( isset( $faq['question'] ) && isset( $faq['answer'] ) ) {
                $faq_items[] = array(
                    'question' => $faq['question'],
                    'answer' => $faq['answer']
                );
            }
        }
        
        if ( ! empty( $faq_items ) ) {
            get_template_part( 'template-parts/faq', 'section', array( 
                'title' => $laboratory_faq_title ? $laboratory_faq_title : 'Laboratory Calibration FAQs',
                'items' => $faq_items 
            ) );
        }
    }
    ?>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


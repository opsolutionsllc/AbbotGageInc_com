<?php
/**
 * Template Name: Services Overview
 * Template for displaying services overview page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: precision measurement services
 * Alternative Keyphrases: calibration certification and repair, metrology services company
 * 
 * SEO Title: Precision Measurement Services | Calibration, Repair & Sales | Abbott Gage
 * 
 * Meta Description: Comprehensive precision measurement services: laboratory & on-site calibration, 
 * equipment repair, and tool sales. ISO certified, NIST traceable. Serving industries nationwide.
 */

get_header();
?>

<main id="main" class="site-main services-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Our Services', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Comprehensive precision measuring solutions for all your calibration, certification, and repair needs', 'abbott-gage' ); ?>
            </p>
        </div>
    </header>
    
    <!-- Services Cards -->
    <?php get_template_part( 'template-parts/services', 'cards' ); ?>
    
    <!-- Service Areas Section -->
    <?php 
    $services_areas_title = get_field( 'services_areas_title' );
    $services_areas_description = get_field( 'services_areas_description' );
    $services_areas_items = get_field( 'services_areas_items' );
    
    if ( $services_areas_items ) : ?>
    <section class="service-areas section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <?php if ( $services_areas_title ) : ?>
                    <h2><?php echo esc_html( $services_areas_title ); ?></h2>
                <?php endif; ?>
                <?php if ( $services_areas_description ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $services_areas_description ); ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="service-areas-grid">
                <?php foreach ( $services_areas_items as $area ) : 
                    $area_icon = isset( $area['icon'] ) ? $area['icon'] : '';
                    $area_title = isset( $area['title'] ) ? $area['title'] : '';
                    $area_items = isset( $area['items'] ) ? $area['items'] : array();
                    ?>
                    <div class="service-area-card">
                        <?php if ( $area_icon ) : ?>
                            <div class="service-area-icon">
                                <i class="<?php echo esc_attr( $area_icon ); ?>"></i>
                            </div>
                        <?php endif; ?>
                        <?php if ( $area_title ) : ?>
                            <h3><?php echo esc_html( $area_title ); ?></h3>
                        <?php endif; ?>
                        <?php if ( ! empty( $area_items ) ) : ?>
                            <ul>
                                <?php foreach ( $area_items as $item ) : 
                                    $item_text = isset( $item['text'] ) ? $item['text'] : '';
                                    if ( $item_text ) : ?>
                                        <li><?php echo esc_html( $item_text ); ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Process Section -->
    <?php 
    $services_process_title = get_field( 'services_process_title' );
    $services_process_description = get_field( 'services_process_description' );
    $services_process_steps = get_field( 'services_process_steps' );
    
    if ( $services_process_steps ) : ?>
    <section class="process-section section">
        <div class="container">
            <div class="section-header text-center">
                <?php if ( $services_process_title ) : ?>
                    <h2><?php echo esc_html( $services_process_title ); ?></h2>
                <?php endif; ?>
                <?php if ( $services_process_description ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $services_process_description ); ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="process-steps">
                <?php foreach ( $services_process_steps as $step ) : 
                    $step_number = isset( $step['number'] ) ? $step['number'] : '';
                    $step_title = isset( $step['title'] ) ? $step['title'] : '';
                    $step_description = isset( $step['description'] ) ? $step['description'] : '';
                    ?>
                    <div class="process-step">
                        <?php if ( $step_number ) : ?>
                            <div class="step-number"><?php echo esc_html( $step_number ); ?></div>
                        <?php endif; ?>
                        <?php if ( $step_title ) : ?>
                            <h3><?php echo esc_html( $step_title ); ?></h3>
                        <?php endif; ?>
                        <?php if ( $step_description ) : ?>
                            <p><?php echo esc_html( $step_description ); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- FAQ Section -->
    <?php 
    $services_faq_title = get_field( 'services_faq_title' );
    $services_faq_items = get_field( 'services_faq_items' );
    
    if ( $services_faq_items && ! empty( $services_faq_items ) ) {
        // Format FAQ items for the template part
        $faq_items = array();
        foreach ( $services_faq_items as $faq ) {
            if ( isset( $faq['question'] ) && isset( $faq['answer'] ) ) {
                $faq_items[] = array(
                    'question' => $faq['question'],
                    'answer' => $faq['answer']
                );
            }
        }
        
        if ( ! empty( $faq_items ) ) {
            get_template_part( 'template-parts/faq', 'section', array( 
                'title' => $services_faq_title ? $services_faq_title : 'Calibration Services FAQs',
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


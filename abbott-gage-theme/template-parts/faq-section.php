<?php
/**
 * Template part for displaying FAQ section
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

// Get the FAQ data passed to this template
$faq_title = isset( $args['title'] ) ? $args['title'] : 'Frequently Asked Questions';
$faq_items = isset( $args['items'] ) ? $args['items'] : array();

if ( empty( $faq_items ) ) {
    return;
}

// Output FAQ Schema for SEO
abbott_gage_faq_schema( $faq_items );
?>

<section class="faq-section section bg-white">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php echo esc_html( $faq_title ); ?></h2>
        </div>
        
        <div class="faq-accordion" id="faqAccordion">
            <?php foreach ( $faq_items as $index => $faq ) : 
                $faq_id = 'faq-' . $index;
                $is_first = ( $index === 0 );
                ?>
                <div class="faq-item">
                    <h3 class="faq-question" id="heading-<?php echo esc_attr( $faq_id ); ?>">
                        <button class="faq-toggle <?php echo $is_first ? '' : 'collapsed'; ?>" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapse-<?php echo esc_attr( $faq_id ); ?>" 
                                aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" 
                                aria-controls="collapse-<?php echo esc_attr( $faq_id ); ?>">
                            <i class="fas fa-plus-circle faq-icon"></i>
                            <?php echo esc_html( $faq['question'] ); ?>
                        </button>
                    </h3>
                    <div id="collapse-<?php echo esc_attr( $faq_id ); ?>" 
                         class="faq-answer collapse <?php echo $is_first ? 'show' : ''; ?>" 
                         aria-labelledby="heading-<?php echo esc_attr( $faq_id ); ?>" 
                         data-bs-parent="#faqAccordion">
                        <div class="faq-answer-body">
                            <?php echo wp_kses_post( wpautop( $faq['answer'] ) ); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


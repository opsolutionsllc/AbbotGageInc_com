<?php
/**
 * Template Name: Sales & Products
 * Template for precision tool sales page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: precision measuring tools for sale
 * Alternative Keyphrases: buy micrometers and calipers, metrology equipment supplier
 * 
 * SEO Title: Precision Measuring Equipment Sales | Micrometers, Calipers & Gages
 * 
 * Meta Description: Purchase precision measuring equipment from authorized distributors. 
 * Micrometers, calipers, indicators, gages & more. Expert guidance on tool selection. Fast shipping.
 */

get_header();
?>

<main id="main" class="site-main sales-page">
    
    <!-- Page Header -->
    <header class="page-header-section">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Precision Tool Sales', 'abbott-gage' ); ?></h1>
            <p class="page-description">
                <?php esc_html_e( 'Authorized distributor for all major precision tool manufacturers', 'abbott-gage' ); ?>
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
    
    <!-- Product Categories Section -->
    <?php 
    $sales_categories_title = get_field( 'sales_categories_title' );
    $sales_categories_description = get_field( 'sales_categories_description' );
    $sales_categories_items = get_field( 'sales_categories_items' );
    
    if ( $sales_categories_items && ! empty( $sales_categories_items ) ) : ?>
    <section class="products-section section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <?php if ( $sales_categories_title ) : ?>
                    <h2><?php echo esc_html( $sales_categories_title ); ?></h2>
                <?php endif; ?>
                <?php if ( $sales_categories_description ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $sales_categories_description ); ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="row g-4">
                <?php foreach ( $sales_categories_items as $category ) : 
                    $category_icon = isset( $category['icon'] ) ? $category['icon'] : '';
                    $category_title = isset( $category['title'] ) ? $category['title'] : '';
                    $category_items = isset( $category['items'] ) ? $category['items'] : array();
                    ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="product-category-card h-100">
                            <?php if ( $category_icon ) : ?>
                                <div class="category-icon">
                                    <i class="<?php echo esc_attr( $category_icon ); ?>"></i>
                                </div>
                            <?php endif; ?>
                            <?php if ( $category_title ) : ?>
                                <h3><?php echo esc_html( $category_title ); ?></h3>
                            <?php endif; ?>
                            <?php if ( ! empty( $category_items ) ) : ?>
                                <ul>
                                    <?php foreach ( $category_items as $item ) : 
                                        $item_text = isset( $item['text'] ) ? $item['text'] : '';
                                        if ( $item_text ) : ?>
                                            <li><?php echo esc_html( $item_text ); ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Why Buy From Us Section -->
    <?php 
    $sales_why_buy_title = get_field( 'sales_why_buy_title' );
    $sales_why_buy_items = get_field( 'sales_why_buy_items' );
    
    if ( $sales_why_buy_items && ! empty( $sales_why_buy_items ) ) : ?>
    <section class="why-buy-section section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <?php if ( $sales_why_buy_title ) : ?>
                    <h2><?php echo esc_html( $sales_why_buy_title ); ?></h2>
                <?php endif; ?>
            </div>
            <div class="row g-4">
                <?php foreach ( $sales_why_buy_items as $benefit ) : 
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
    
    <!-- Featured Manufacturers -->
    <?php 
    $sales_manufacturers_title = get_field( 'sales_manufacturers_title' );
    $sales_manufacturers_description = get_field( 'sales_manufacturers_description' );
    $sales_manufacturers_items = get_field( 'sales_manufacturers_items' );
    
    if ( $sales_manufacturers_items && ! empty( $sales_manufacturers_items ) ) : ?>
    <section class="manufacturers-section section">
        <div class="container">
            <div class="section-header text-center">
                <?php if ( $sales_manufacturers_title ) : ?>
                    <h2><?php echo esc_html( $sales_manufacturers_title ); ?></h2>
                <?php endif; ?>
                <?php if ( $sales_manufacturers_description ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $sales_manufacturers_description ); ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="row g-4 justify-content-center">
                <?php foreach ( $sales_manufacturers_items as $manufacturer ) : 
                    $manufacturer_logo = isset( $manufacturer['logo'] ) ? $manufacturer['logo'] : null;
                    $manufacturer_name = isset( $manufacturer['name'] ) ? $manufacturer['name'] : '';
                    $manufacturer_authorized = isset( $manufacturer['authorized'] ) ? $manufacturer['authorized'] : false;
                    ?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="manufacturer-item">
                            <?php if ( $manufacturer_logo && isset( $manufacturer_logo['url'] ) ) : ?>
                                <img src="<?php echo esc_url( $manufacturer_logo['url'] ); ?>" 
                                    alt="<?php echo esc_attr( $manufacturer_logo['alt'] ? $manufacturer_logo['alt'] : $manufacturer_name ); ?>" 
                                    loading="lazy">
                            <?php endif; ?>
                            <?php if ( $manufacturer_authorized ) : ?>
                                <div class="manufacturer-badge"><?php esc_html_e( 'Factory Authorized', 'abbott-gage' ); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Ordering Process Section -->
    <?php 
    $sales_ordering_title = get_field( 'sales_ordering_title' );
    $sales_ordering_description = get_field( 'sales_ordering_description' );
    $sales_ordering_steps = get_field( 'sales_ordering_steps' );
    $sales_payment_title = get_field( 'sales_payment_title' );
    $sales_payment_image = get_field( 'sales_payment_image' );
    $sales_payment_image_alt = get_field( 'sales_payment_image_alt' );
    $sales_payment_footer = get_field( 'sales_payment_footer' );
    
    if ( $sales_ordering_steps && ! empty( $sales_ordering_steps ) ) : ?>
    <section class="ordering-section section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <?php if ( $sales_ordering_title ) : ?>
                    <h2><?php echo esc_html( $sales_ordering_title ); ?></h2>
                <?php endif; ?>
                <?php if ( $sales_ordering_description ) : ?>
                    <p class="section-description">
                        <?php echo esc_html( $sales_ordering_description ); ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="ordering-steps">
                <?php foreach ( $sales_ordering_steps as $step ) : 
                    $step_icon = isset( $step['icon'] ) ? $step['icon'] : '';
                    $step_title = isset( $step['title'] ) ? $step['title'] : '';
                    $step_description = isset( $step['description'] ) ? $step['description'] : '';
                    ?>
                    <div class="ordering-step">
                        <?php if ( $step_icon ) : ?>
                            <div class="step-icon">
                                <i class="<?php echo esc_attr( $step_icon ); ?>"></i>
                            </div>
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
            
            <?php if ( $sales_payment_title || $sales_payment_image || $sales_payment_footer ) : ?>
            <div class="payment-info text-center">
                <?php if ( $sales_payment_title ) : ?>
                    <h3><?php echo esc_html( $sales_payment_title ); ?></h3>
                <?php endif; ?>
                <?php if ( $sales_payment_image && isset( $sales_payment_image['url'] ) ) : ?>
                    <div class="payment-methods-image">
                        <img src="<?php echo esc_url( $sales_payment_image['url'] ); ?>" 
                             alt="<?php echo esc_attr( $sales_payment_image_alt ? $sales_payment_image_alt : ( $sales_payment_image['alt'] ? $sales_payment_image['alt'] : 'Payment Methods' ) ); ?>"
                             loading="lazy">
                    </div>
                <?php endif; ?>
                <?php if ( $sales_payment_footer ) : ?>
                    <p><?php echo esc_html( $sales_payment_footer ); ?></p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Special Offer Section -->
    <?php 
    $sales_promo_cards = get_field( 'sales_promo_cards' );
    
    if ( $sales_promo_cards && ! empty( $sales_promo_cards ) ) : ?>
    <section class="special-offer-section section">
        <div class="container">
            <div class="promo-cards-grid">
                <?php foreach ( $sales_promo_cards as $index => $card ) : 
                    $card_icon = isset( $card['icon'] ) ? $card['icon'] : '';
                    $card_title = isset( $card['title'] ) ? $card['title'] : '';
                    $card_text = isset( $card['text'] ) ? $card['text'] : '';
                    $card_button_text = isset( $card['button_text'] ) ? $card['button_text'] : '';
                    $card_button_url = isset( $card['button_url'] ) ? $card['button_url'] : '';
                    $show_phone_links = isset( $card['show_phone_links'] ) ? $card['show_phone_links'] : false;
                    $card_class = ( $index === 0 ) ? 'promo-card--certification' : 'promo-card--contact';
                    ?>
                    <div class="promo-card <?php echo esc_attr( $card_class ); ?>">
                        <?php if ( $card_icon ) : ?>
                            <div class="promo-card__icon">
                                <i class="<?php echo esc_attr( $card_icon ); ?>"></i>
                            </div>
                        <?php endif; ?>
                        <div class="promo-card__content">
                            <?php if ( $card_title ) : ?>
                                <h3 class="promo-card__title"><?php echo esc_html( $card_title ); ?></h3>
                            <?php endif; ?>
                            <?php if ( $card_text ) : ?>
                                <p class="promo-card__text">
                                    <?php echo esc_html( $card_text ); ?>
                                </p>
                            <?php endif; ?>
                            <?php if ( $show_phone_links ) : ?>
                                <div class="promo-card__phones">
                                    <a href="tel:+12563783286" class="phone-link">
                                        <i class="fas fa-phone-alt"></i>
                                        <span>(256) 378-3286</span>
                                    </a>
                                    <a href="tel:+18004814243" class="phone-link phone-link--toll-free">
                                        <i class="fas fa-phone-alt"></i>
                                        <span>1-800-481-4243</span>
                                    </a>
                                </div>
                            <?php elseif ( $card_button_text && $card_button_url ) : ?>
                                <a href="<?php echo esc_url( home_url( $card_button_url ) ); ?>" class="btn btn-primary">
                                    <i class="fas fa-shopping-cart"></i> <?php echo esc_html( $card_button_text ); ?>
                                </a>
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


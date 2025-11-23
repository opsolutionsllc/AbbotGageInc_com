<?php
/**
 * Template Name: Sales & Products
 * Template for precision tool sales page
 *
 * @package Abbott_Gage
 * @since 1.0.0
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
    <section class="products-section section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Product Categories', 'abbott-gage' ); ?></h2>
                <p class="section-description">
                    <?php esc_html_e( 'Complete range of precision measuring tools and equipment', 'abbott-gage' ); ?>
                </p>
            </div>
            
            <div class="product-categories-grid">
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3><?php esc_html_e( 'Micrometers', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Outside Micrometers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Inside Micrometers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Depth Micrometers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Digital & Mechanical', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <h3><?php esc_html_e( 'Calipers', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Digital Calipers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Dial Calipers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Vernier Calipers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Specialty Calipers', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-arrows-alt-v"></i>
                    </div>
                    <h3><?php esc_html_e( 'Height Gages', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Digital Height Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Dial Height Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Vernier Height Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Accessories', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-circle-notch"></i>
                    </div>
                    <h3><?php esc_html_e( 'Indicators', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Dial Indicators', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Digital Indicators', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Test Indicators', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Indicator Stands', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3><?php esc_html_e( 'Gage Blocks & Plates', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Gage Block Sets', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Surface Plates', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Angle Plates', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'V-Blocks', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3><?php esc_html_e( 'Torque Tools', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Torque Wrenches', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Torque Screwdrivers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Torque Analyzers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Calibration Equipment', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3><?php esc_html_e( 'Pressure Gages', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Mechanical Pressure Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Digital Pressure Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Pressure Transmitters', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Dead Weight Testers', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3><?php esc_html_e( 'Electronic Equipment', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Multimeters', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Thermometers', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Balances & Scales', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Test Equipment', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
                
                <div class="product-category-card">
                    <div class="category-icon">
                        <i class="fas fa-grip-vertical"></i>
                    </div>
                    <h3><?php esc_html_e( 'Thread & Pin Gages', 'abbott-gage' ); ?></h3>
                    <ul>
                        <li><?php esc_html_e( 'Thread Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Pin Gage Sets', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Ring Gages', 'abbott-gage' ); ?></li>
                        <li><?php esc_html_e( 'Plug Gages', 'abbott-gage' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Buy From Us Section -->
    <section class="why-buy-section section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Why Buy From Abbott Gage?', 'abbott-gage' ); ?></h2>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3><?php esc_html_e( 'Authorized Distributor', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Official distributor for all major precision tool brands', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3><?php esc_html_e( 'Competitive Pricing', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Best prices on quality precision measuring equipment', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3><?php esc_html_e( 'Expert Guidance', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Professional advice to select the right tools for your needs', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3><?php esc_html_e( 'Fast Delivery', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Quick shipping or local pickup options available', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3><?php esc_html_e( 'Service & Support', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Calibration and repair services for equipment purchased', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3><?php esc_html_e( 'Flexible Payment', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Multiple payment options and NET 30 terms available', 'abbott-gage' ); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Featured Manufacturers -->
    <?php get_template_part( 'template-parts/manufacturers', 'section' ); ?>
    
    <!-- Ordering Process Section -->
    <section class="ordering-section section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'How to Order', 'abbott-gage' ); ?></h2>
                <p class="section-description">
                    <?php esc_html_e( 'Simple and straightforward ordering process', 'abbott-gage' ); ?>
                </p>
            </div>
            
            <div class="ordering-steps">
                <div class="ordering-step">
                    <div class="step-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3><?php esc_html_e( 'Step 1: Contact Us', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Call (256) 378-3286, email info@abbottgageinc.com, or use our contact form with product details.', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="ordering-step">
                    <div class="step-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3><?php esc_html_e( 'Step 2: Get Quote', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Receive a detailed quote within 24 hours with competitive pricing.', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="ordering-step">
                    <div class="step-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3><?php esc_html_e( 'Step 3: Place Order', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Approve the quote and place your order with order confirmation provided.', 'abbott-gage' ); ?></p>
                </div>
                
                <div class="ordering-step">
                    <div class="step-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3><?php esc_html_e( 'Step 4: Receive', 'abbott-gage' ); ?></h3>
                    <p><?php esc_html_e( 'Fast shipping to your location or pick up locally if preferred.', 'abbott-gage' ); ?></p>
                </div>
            </div>
            
            <div class="payment-info text-center">
                <h3><?php esc_html_e( 'Payment Methods Accepted', 'abbott-gage' ); ?></h3>
                <div class="payment-methods-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cards-accepted.png' ); ?>" 
                         alt="<?php esc_attr_e( 'Accepted Payment Methods: Visa, Mastercard, Discover, American Express', 'abbott-gage' ); ?>"
                         loading="lazy">
                </div>
                <p><?php esc_html_e( 'NET 30 terms available for approved accounts', 'abbott-gage' ); ?></p>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


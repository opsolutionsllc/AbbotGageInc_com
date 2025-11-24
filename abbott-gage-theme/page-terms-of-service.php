<?php
/**
 * Template Name: Terms of Service
 * Template for terms of service page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: terms of service
 * Set to "noindex, follow" in Yoast (Advanced tab)
 * 
 * Meta Description: Terms of service for Abbott Gage Inc. Review our business terms 
 * and conditions for using our calibration and repair services.
 */

get_header();
?>

<main id="main" class="site-main terms-of-service-page">
    
    <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Page Header -->
        <header class="page-header-section">
            <div class="container">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <p class="page-description">
                    <?php esc_html_e( 'Terms and conditions for using our services', 'abbott-gage' ); ?>
                </p>
            </div>
        </header>
        
        <!-- Content Section -->
        <section class="legal-content-section section bg-white">
            <div class="container">
                <div class="legal-content-wrapper">
                    <div class="legal-content">
                        <?php 
                        // Display the page content from WordPress editor
                        the_content();
                        ?>
                    </div>
                    
                    <!-- Last Updated -->
                    <div class="legal-meta">
                        <p class="last-updated">
                            <strong><?php esc_html_e( 'Last Updated:', 'abbott-gage' ); ?></strong>
                            <?php echo get_the_modified_date(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
    <?php endwhile; ?>
    
    <!-- CTA Section -->
    <?php get_template_part( 'template-parts/cta', 'section' ); ?>
    
</main>

<?php
get_footer();


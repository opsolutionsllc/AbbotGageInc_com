<?php
/**
 * Template Name: Privacy Policy
 * Template for privacy policy page
 *
 * @package Abbott_Gage
 * @since 1.0.0
 * 
 * YOAST SEO SETTINGS:
 * Focus Keyphrase: privacy policy
 * Set to "noindex, follow" in Yoast (Advanced tab)
 * 
 * Meta Description: Privacy policy for Abbott Gage Inc. Learn how we collect, use, 
 * and protect your personal information.
 */

get_header();
?>

<main id="main" class="site-main privacy-policy-page">
    
    <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Page Header -->
        <header class="page-header-section">
            <div class="container">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <p class="page-description">
                    <?php esc_html_e( 'Your privacy is important to us', 'abbott-gage' ); ?>
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


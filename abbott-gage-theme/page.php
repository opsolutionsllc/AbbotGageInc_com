<?php
/**
 * The template for displaying all pages
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main">
    
    <?php while ( have_posts() ) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <!-- Page Header -->
            <header class="page-header-section">
                <div class="container">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php if ( has_excerpt() ) : ?>
                        <div class="page-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </header>
            
            <!-- Page Content -->
            <div class="page-content-section section">
                <div class="container">
                    <div class="page-content">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'abbott-gage' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
            
        </article>
        
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
        
    <?php endwhile; ?>
    
</main>

<?php
get_footer();

